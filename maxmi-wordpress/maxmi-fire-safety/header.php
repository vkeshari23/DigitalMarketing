<?php
/**
 * Header + top navigation.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$phone = maxmi_opt( 'maxmi_phone', '9582851966' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Page loader -->
<div class="maxmi-loader" id="maxmiLoader" aria-hidden="true">
	<?php if ( maxmi_logo_url() ) : ?>
		<img class="maxmi-loader__logo" src="<?php echo esc_url( maxmi_logo_url() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
	<?php else : ?>
		<div class="maxmi-loader__flame"><span></span><span></span><span></span></div>
	<?php endif; ?>
	<p class="maxmi-loader__text">MAX <b>MI</b> <small>Fire Safety Solution</small></p>
</div>

<a class="maxmi-skip screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'maxmi' ); ?></a>

<header class="maxmi-header" id="site-header">
	<div class="maxmi-topline" aria-hidden="true"></div>
	<div class="maxmi-progress" id="maxmiProgress" aria-hidden="true"></div>

	<!-- Top utility bar -->
	<?php
	$h_email   = maxmi_opt( 'maxmi_email', 'info@maxmifiresafety.com' );
	$h_address = maxmi_opt( 'maxmi_address', 'Noida, Gautam Buddha Nagar, Uttar Pradesh' );
	?>
	<div class="maxmi-topbar">
		<div class="maxmi-container maxmi-topbar__inner">
			<div class="maxmi-topbar__left">
				<?php $h_phone2 = maxmi_opt( 'maxmi_phone2', '9354609399' ); ?>
				<a href="tel:<?php echo esc_attr( maxmi_tel( $phone ) ); ?>">
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11 11 0 003.4.55 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.3.55 3.4a1 1 0 01-.25 1z"/></svg>
					<?php echo esc_html( $phone ); ?>
				</a>
				<a href="tel:<?php echo esc_attr( maxmi_tel( $h_phone2 ) ); ?>">
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11 11 0 003.4.55 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.3.55 3.4a1 1 0 01-.25 1z"/></svg>
					<?php echo esc_html( $h_phone2 ); ?>
				</a>
				<a href="mailto:<?php echo esc_attr( $h_email ); ?>" class="maxmi-topbar__hide-sm">
					<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
					<?php echo esc_html( $h_email ); ?>
				</a>
			</div>
			<div class="maxmi-topbar__right">
				<span class="maxmi-topbar__tag"><?php echo maxmi_flame(); ?> <?php esc_html_e( 'ISO Certified · 24/7 Emergency Support', 'maxmi' ); ?></span>
			</div>
		</div>
	</div>

	<div class="maxmi-nav-wrap">
		<div class="maxmi-container maxmi-nav">

			<!-- Logo -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="maxmi-logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php elseif ( maxmi_logo_url() ) : ?>
					<img class="maxmi-logo__img" src="<?php echo esc_url( maxmi_logo_url() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					<span class="maxmi-logo__txt">MAX <b>MI</b><small>Fire Safety Solution</small></span>
				<?php else : ?>
					<span class="maxmi-logo__mark"><?php echo maxmi_flame(); // phpcs:ignore ?></span>
					<span class="maxmi-logo__txt">MAX <b>MI</b><small>Fire Safety Solution</small></span>
				<?php endif; ?>
			</a>

			<!-- Desktop menu -->
			<nav class="maxmi-menu" aria-label="<?php esc_attr_e( 'Primary', 'maxmi' ); ?>">
				<?php
				if ( maxmi_menu_has_children( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'maxmi-menu__list',
						'depth'          => 2,
						'fallback_cb'    => 'maxmi_default_menu',
					) );
				} else {
					maxmi_default_menu();
				}
				?>
			</nav>

			<div class="maxmi-nav-actions">
				<!-- Quote CTA -->
				<a class="maxmi-btn maxmi-btn--primary maxmi-nav-cta" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'maxmi' ); ?></a>

				<!-- Mobile toggle -->
				<button class="maxmi-burger" id="maxmiBurger" aria-label="<?php esc_attr_e( 'Open menu', 'maxmi' ); ?>" aria-expanded="false">
					<span></span><span></span><span></span>
				</button>
			</div>
		</div>
	</div>
</header>

<!-- Mobile drawer -->
<div class="maxmi-drawer" id="maxmiDrawer" aria-hidden="true">
	<div class="maxmi-drawer__head">
		<span class="maxmi-logo__txt">MAX <b>MI</b><small>Fire Safety Solution</small></span>
		<button class="maxmi-drawer__close" id="maxmiDrawerClose" aria-label="<?php esc_attr_e( 'Close menu', 'maxmi' ); ?>">&times;</button>
	</div>
	<?php
	if ( maxmi_menu_has_children( 'primary' ) ) {
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'maxmi-drawer__list',
			'depth'          => 2,
			'fallback_cb'    => 'maxmi_default_menu_mobile',
		) );
	} else {
		maxmi_default_menu_mobile();
	}
	?>
	<a class="maxmi-btn maxmi-btn--primary maxmi-drawer__cta" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'maxmi' ); ?></a>
	<div class="maxmi-drawer__contact">
		<a href="tel:<?php echo esc_attr( maxmi_tel( $phone ) ); ?>">
			<svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11 11 0 003.4.55 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.3.55 3.4a1 1 0 01-.25 1z"/></svg>
			<?php echo esc_html( $phone ); ?>
		</a>
		<a href="tel:<?php echo esc_attr( maxmi_tel( maxmi_opt( 'maxmi_phone2', '9354609399' ) ) ); ?>">
			<svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11 11 0 003.4.55 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.3.55 3.4a1 1 0 01-.25 1z"/></svg>
			<?php echo esc_html( maxmi_opt( 'maxmi_phone2', '9354609399' ) ); ?>
		</a>
		<a href="mailto:<?php echo esc_attr( maxmi_opt( 'maxmi_email', 'info@maxmifiresafety.com' ) ); ?>">
			<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
			<?php echo esc_html( maxmi_opt( 'maxmi_email', 'info@maxmifiresafety.com' ) ); ?>
		</a>
	</div>
</div>
<div class="maxmi-drawer-backdrop" id="maxmiBackdrop"></div>

<main id="content" class="maxmi-main">
