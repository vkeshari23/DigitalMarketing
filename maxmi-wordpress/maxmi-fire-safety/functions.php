<?php
/**
 * MAX MI Fire Safety Solution - theme functions
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

if ( ! defined( 'MAXMI_VERSION' ) ) {
	define( 'MAXMI_VERSION', '1.0.0' );
}

/* -------------------------------------------------------------------------
 * 1. Theme setup
 * ---------------------------------------------------------------------- */
function maxmi_setup() {
	load_theme_textdomain( 'maxmi', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'maxmi' ),
		'footer'  => __( 'Footer Menu', 'maxmi' ),
	) );

	// Reasonable default image sizes for product cards.
	add_image_size( 'maxmi-product', 600, 600, true );
}
add_action( 'after_setup_theme', 'maxmi_setup' );

/* -------------------------------------------------------------------------
 * 2. Enqueue styles & scripts
 * ---------------------------------------------------------------------- */
function maxmi_assets() {
	// Google Fonts.
	wp_enqueue_style(
		'maxmi-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// File-modification time as the version so browsers and caching plugins
	// always fetch the newest CSS/JS after a theme update.
	$css_path = get_template_directory() . '/assets/css/main.css';
	$js_path  = get_template_directory() . '/assets/js/main.js';
	$css_ver  = file_exists( $css_path ) ? filemtime( $css_path ) : MAXMI_VERSION;
	$js_ver   = file_exists( $js_path ) ? filemtime( $js_path ) : MAXMI_VERSION;

	// Main stylesheet.
	wp_enqueue_style( 'maxmi-main', get_template_directory_uri() . '/assets/css/main.css', array(), $css_ver );

	// Root stylesheet (theme header only, keeps WP happy).
	wp_enqueue_style( 'maxmi-style', get_stylesheet_uri(), array( 'maxmi-main' ), $css_ver );

	// Main script.
	wp_enqueue_script( 'maxmi-main', get_template_directory_uri() . '/assets/js/main.js', array(), $js_ver, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maxmi_assets' );

/* -------------------------------------------------------------------------
 * 3. Load helpers (default content + SVG illustrations)
 * ---------------------------------------------------------------------- */
require get_template_directory() . '/inc/data.php';
require get_template_directory() . '/inc/svg.php';
require get_template_directory() . '/inc/catalog.php';

/* -------------------------------------------------------------------------
 * 4. Products custom post type (makes the site dynamic / editable)
 * ---------------------------------------------------------------------- */
function maxmi_register_product_cpt() {
	$labels = array(
		'name'               => __( 'Products', 'maxmi' ),
		'singular_name'      => __( 'Product', 'maxmi' ),
		'menu_name'          => __( 'Products', 'maxmi' ),
		'add_new'            => __( 'Add New', 'maxmi' ),
		'add_new_item'       => __( 'Add New Product', 'maxmi' ),
		'edit_item'          => __( 'Edit Product', 'maxmi' ),
		'new_item'           => __( 'New Product', 'maxmi' ),
		'view_item'          => __( 'View Product', 'maxmi' ),
		'search_items'       => __( 'Search Products', 'maxmi' ),
		'not_found'          => __( 'No products found', 'maxmi' ),
		'not_found_in_trash' => __( 'No products found in Trash', 'maxmi' ),
		'all_items'          => __( 'All Products', 'maxmi' ),
	);

	register_post_type( 'maxmi_product', array(
		'labels'       => $labels,
		'public'       => true,
		'has_archive'  => true,
		'menu_icon'    => 'dashicons-shield',
		'menu_position'=> 5,
		'rewrite'      => array( 'slug' => 'product' ),
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'show_in_rest' => true,
	) );

	register_taxonomy( 'maxmi_product_cat', 'maxmi_product', array(
		'label'        => __( 'Product Categories', 'maxmi' ),
		'hierarchical' => true,
		'public'       => true,
		'show_in_rest' => true,
		'rewrite'      => array( 'slug' => 'product-category' ),
	) );
}
add_action( 'init', 'maxmi_register_product_cpt' );

/* Flush rewrite rules once on activation so /products works. */
function maxmi_rewrite_flush() {
	maxmi_register_product_cpt();
	maxmi_auto_setup();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'maxmi_rewrite_flush' );

/**
 * One-time setup on theme activation:
 * creates the core pages and a primary menu so the site works instantly.
 */
function maxmi_auto_setup() {
	$pages = array(
		'about'       => 'About Us',
		'products'    => 'Products',
		'accessories' => 'Accessories',
		'services'    => 'Services',
		'projects'    => 'Projects',
		'contact'     => 'Contact Us',
	);

	$ids = array();
	foreach ( $pages as $slug => $title ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = $existing->ID;
			continue;
		}
		$ids[ $slug ] = wp_insert_post( array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => '',
		) );
	}

	// Build a primary menu if none is assigned yet.
	$locations = get_theme_mod( 'nav_menu_locations' );
	if ( empty( $locations['primary'] ) ) {
		$menu_name = 'Primary Menu';
		$menu      = wp_get_nav_menu_object( $menu_name );
		if ( ! $menu ) {
			$menu_id = wp_create_nav_menu( $menu_name );
		} else {
			$menu_id = $menu->term_id;
		}

		if ( ! is_wp_error( $menu_id ) ) {
			// Avoid duplicating items if the menu already has some.
			$items = wp_get_nav_menu_items( $menu_id );
			if ( empty( $items ) ) {
				wp_update_nav_menu_item( $menu_id, 0, array(
					'menu-item-title'  => 'Home',
					'menu-item-url'    => home_url( '/' ),
					'menu-item-status' => 'publish',
					'menu-item-type'   => 'custom',
				) );
				foreach ( $pages as $slug => $title ) {
					if ( ! empty( $ids[ $slug ] ) && ! is_wp_error( $ids[ $slug ] ) ) {
						wp_update_nav_menu_item( $menu_id, 0, array(
							'menu-item-object'    => 'page',
							'menu-item-object-id' => $ids[ $slug ],
							'menu-item-type'      => 'post_type',
							'menu-item-status'    => 'publish',
						) );
					}
				}
			}

			$locations           = (array) get_theme_mod( 'nav_menu_locations', array() );
			$locations['primary'] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		}
	}
}

/* -------------------------------------------------------------------------
 * 5. Theme Customizer  (all key content editable from Appearance > Customize)
 * ---------------------------------------------------------------------- */
function maxmi_customize_register( $wp_customize ) {

	/* ---- Contact / Company panel ---- */
	$wp_customize->add_section( 'maxmi_contact', array(
		'title'    => __( 'MAX MI — Contact Info', 'maxmi' ),
		'priority' => 30,
	) );

	$contact_fields = array(
		'maxmi_phone'    => array( 'Phone Number', '9582851966' ),
		'maxmi_phone2'   => array( 'Phone Number 2', '9354609399' ),
		'maxmi_whatsapp' => array( 'WhatsApp Number (with country code, e.g. 919582851966)', '919582851966' ),
		'maxmi_email'    => array( 'Email Address', 'info@maxmifiresafety.com' ),
		'maxmi_address'  => array( 'Address', 'Noida, Gautam Buddha Nagar, Uttar Pradesh' ),
	);
	foreach ( $contact_fields as $id => $data ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $data[1],
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => __( $data[0], 'maxmi' ),
			'section' => 'maxmi_contact',
			'type'    => 'text',
		) );
	}

	/* ---- Social links ---- */
	$wp_customize->add_section( 'maxmi_social', array(
		'title'    => __( 'MAX MI — Social Links', 'maxmi' ),
		'priority' => 31,
	) );
	$socials = array(
		'maxmi_facebook'  => 'Facebook URL',
		'maxmi_instagram' => 'Instagram URL',
		'maxmi_linkedin'  => 'LinkedIn URL',
		'maxmi_youtube'   => 'YouTube URL',
		'maxmi_twitter'   => 'X / Twitter URL',
	);
	foreach ( $socials as $id => $label ) {
		$wp_customize->add_setting( $id, array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( $id, array(
			'label'       => __( $label, 'maxmi' ),
			'description' => __( 'Leave empty to hide for now.', 'maxmi' ),
			'section'     => 'maxmi_social',
			'type'        => 'url',
		) );
	}

	/* ---- Hero / Banner ---- */
	$wp_customize->add_section( 'maxmi_hero', array(
		'title'    => __( 'MAX MI — Hero Banner', 'maxmi' ),
		'priority' => 32,
	) );

	$hero_texts = array(
		'maxmi_hero_kicker'   => array( 'Hero Small Heading', 'MAX MI FIRE SAFETY SOLUTION' ),
		'maxmi_hero_title'    => array( 'Hero Title (line 1)', 'Protecting Lives.' ),
		'maxmi_hero_title2'   => array( 'Hero Title (line 2, red word inside)', 'Securing Every Space.' ),
		'maxmi_hero_subtitle' => array( 'Hero Subtitle', 'Complete Fire Protection Solutions for Residential, Commercial & Industrial Projects.' ),
		'maxmi_hero_btn1'     => array( 'Button 1 Text', 'Get Free Site Inspection' ),
		'maxmi_hero_btn2'     => array( 'Button 2 Text', 'Explore Products' ),
	);
	foreach ( $hero_texts as $id => $data ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $data[1],
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => __( $data[0], 'maxmi' ),
			'section' => 'maxmi_hero',
			'type'    => 'text',
		) );
	}

	$wp_customize->add_setting( 'maxmi_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'maxmi_hero_image', array(
		'label'       => __( 'Hero Banner Image (optional — replaces the built-in illustration)', 'maxmi' ),
		'section'     => 'maxmi_hero',
	) ) );
}
add_action( 'customize_register', 'maxmi_customize_register' );

/* -------------------------------------------------------------------------
 * 6. Small template helpers
 * ---------------------------------------------------------------------- */

/** Get a customizer value with fallback. */
function maxmi_opt( $key, $default = '' ) {
	return get_theme_mod( $key, $default );
}

/** Clean phone number for tel: links. */
function maxmi_tel( $number ) {
	return preg_replace( '/[^0-9+]/', '', $number );
}

/** Output an internal permalink by page slug, fallback to home + slug. */
function maxmi_page_url( $slug ) {
	$page = get_page_by_path( $slug );
	if ( $page ) {
		return get_permalink( $page->ID );
	}
	return home_url( '/' . $slug . '/' );
}

/** Fixed WhatsApp floating button (used in footer). */
function maxmi_whatsapp_button() {
	$wa = maxmi_opt( 'maxmi_whatsapp', '919582851966' );
	$wa = preg_replace( '/[^0-9]/', '', $wa );
	if ( ! $wa ) {
		return;
	}
	$msg = rawurlencode( 'Hello MAX MI Fire Safety, I would like to know more about your products & services.' );
	?>
	<a class="maxmi-wa" href="https://wa.me/<?php echo esc_attr( $wa ); ?>?text=<?php echo $msg; ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
		<svg viewBox="0 0 32 32" width="30" height="30" aria-hidden="true"><path fill="#fff" d="M16 .4A15.6 15.6 0 0 0 2.6 24.1L.4 31.6l7.7-2A15.6 15.6 0 1 0 16 .4Zm0 28.5a13 13 0 0 1-6.6-1.8l-.5-.3-4.6 1.2 1.2-4.5-.3-.5A13 13 0 1 1 16 28.9Zm7.1-9.7c-.4-.2-2.3-1.1-2.6-1.2-.3-.1-.6-.2-.9.2-.3.4-1 1.2-1.2 1.4-.2.2-.4.3-.8.1-.4-.2-1.6-.6-3.1-1.9-1.1-1-1.9-2.3-2.1-2.7-.2-.4 0-.6.2-.8l.6-.7c.2-.2.3-.4.4-.6.1-.2 0-.5 0-.7l-1.2-2.8c-.3-.7-.6-.6-.9-.6h-.7c-.2 0-.6.1-1 .5-.3.4-1.3 1.3-1.3 3.1s1.3 3.6 1.5 3.8c.2.2 2.6 4 6.3 5.6.9.4 1.6.6 2.1.8.9.3 1.7.2 2.3.1.7-.1 2.3-.9 2.6-1.8.3-.9.3-1.6.2-1.8-.1-.2-.3-.3-.7-.5Z"/></svg>
	</a>
	<?php
}

/* -----------------------------------------------------------------------
 * Fallback menus (used until the user builds a menu in Appearance > Menus).
 * Defined here so they are available before header.php runs.
 * -------------------------------------------------------------------- */
/**
 * Whether the assigned menu at a location has sub-items (children).
 * If not, we render our richer built-in menu with Products/Services dropdowns.
 */
function maxmi_menu_has_children( $location ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations[ $location ] ) ) {
		return false;
	}
	$items = wp_get_nav_menu_items( $locations[ $location ] );
	if ( empty( $items ) ) {
		return false;
	}
	foreach ( $items as $it ) {
		if ( ! empty( $it->menu_item_parent ) ) {
			return true;
		}
	}
	return false;
}

/** Structured fallback menu with Products, Accessories & Services dropdowns. */
function maxmi_default_menu_tree() {
	// How many items to show inside a dropdown before the "View More" link.
	$max = 6;

	// Products dropdown = 6 categories, each with a nested flyout of (max 6) items.
	$products_sub = array();
	foreach ( maxmi_catalog() as $cat ) {
		$items = array();
		foreach ( array_slice( $cat['items'], 0, $max ) as $it ) {
			$items[] = array(
				'label' => $it['name'],
				'url'   => add_query_arg( 'product', sanitize_title( $it['name'] ), maxmi_page_url( 'products' ) ),
			);
		}
		$items[] = array(
			'label'   => 'View More →',
			'url'     => add_query_arg( 'category', $cat['slug'], maxmi_page_url( 'products' ) ),
			'is_more' => true,
		);
		$products_sub[] = array(
			'label' => $cat['name'],
			'url'   => add_query_arg( 'category', $cat['slug'], maxmi_page_url( 'products' ) ),
			'sub'   => $items,
		);
	}
	$products_sub[] = array( 'label' => 'View More →', 'url' => maxmi_page_url( 'products' ), 'is_more' => true );

	// Accessories dropdown = first 6 items + "View More" (full list on the Accessories page).
	$acc_sub = array();
	foreach ( array_slice( maxmi_accessory_items(), 0, $max ) as $a ) {
		$acc_sub[] = array(
			'label' => $a['name'],
			'url'   => add_query_arg( 'accessory', sanitize_title( $a['name'] ), maxmi_page_url( 'accessories' ) ),
		);
	}
	$acc_sub[] = array( 'label' => 'View More →', 'url' => maxmi_page_url( 'accessories' ), 'is_more' => true );

	// Services dropdown.
	$services_sub = array();
	foreach ( array_slice( maxmi_services(), 0, $max ) as $s ) {
		$services_sub[] = array(
			'label' => $s['title'],
			'url'   => add_query_arg( 'service', sanitize_title( $s['title'] ), maxmi_page_url( 'services' ) ),
		);
	}
	$services_sub[] = array( 'label' => 'View More →', 'url' => maxmi_page_url( 'services' ), 'is_more' => true );

	return array(
		array( 'label' => 'Home',        'url' => home_url( '/' ) ),
		array( 'label' => 'About Us',    'url' => maxmi_page_url( 'about' ) ),
		array( 'label' => 'Products',    'url' => maxmi_page_url( 'products' ),    'sub' => $products_sub ),
		array( 'label' => 'Accessories', 'url' => maxmi_page_url( 'accessories' ), 'sub' => $acc_sub ),
		array( 'label' => 'Services',    'url' => maxmi_page_url( 'services' ),    'sub' => $services_sub ),
		array( 'label' => 'Projects',    'url' => maxmi_page_url( 'projects' ) ),
		array( 'label' => 'Contact Us',  'url' => maxmi_page_url( 'contact' ) ),
	);
}

/* kept for backward compatibility */
function maxmi_default_menu_items() {
	return maxmi_default_menu_tree();
}

/** Recursively render a (multi-level) menu tree. */
function maxmi_render_menu_ul( $nodes, $ul_class, $depth = 0 ) {
	echo '<ul class="' . esc_attr( $ul_class ) . '">';
	foreach ( $nodes as $n ) {
		$has = ! empty( $n['sub'] );
		$li_class = trim( ( $has ? 'menu-item-has-children ' : '' ) . ( ! empty( $n['is_more'] ) ? 'menu-item-more' : '' ) );
		echo '<li class="' . esc_attr( $li_class ) . '">';
		echo '<a href="' . esc_url( $n['url'] ) . '">' . esc_html( $n['label'] );
		if ( $has ) {
			// down caret for the top row, right caret for nested flyouts.
			$d = ( 0 === $depth ) ? 'M6 9l6 6 6-6' : 'M9 6l6 6-6 6';
			echo ' <svg class="maxmi-caret" viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2.6"><path d="' . $d . '"/></svg>';
		}
		echo '</a>';
		if ( $has ) {
			$scroll = ( count( $n['sub'] ) > 14 ) ? ' sub-menu--scroll' : '';
			maxmi_render_menu_ul( $n['sub'], 'sub-menu' . $scroll, $depth + 1 );
		}
		echo '</li>';
	}
	echo '</ul>';
}

function maxmi_default_menu() {
	maxmi_render_menu_ul( maxmi_default_menu_tree(), 'maxmi-menu__list' );
}

function maxmi_default_menu_mobile() {
	maxmi_render_menu_ul( maxmi_default_menu_tree(), 'maxmi-drawer__list' );
}

/** Excerpt length for product cards. */
function maxmi_excerpt_length( $length ) {
	return 18;
}
add_filter( 'excerpt_length', 'maxmi_excerpt_length' );

function maxmi_excerpt_more( $more ) {
	return '…';
}
add_filter( 'excerpt_more', 'maxmi_excerpt_more' );
