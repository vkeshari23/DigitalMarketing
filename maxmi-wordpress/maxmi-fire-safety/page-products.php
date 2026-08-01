<?php
/**
 * Template Name: MAX MI — Products
 * Auto-used for the page with slug "products".
 *
 * Three views:
 *   ?product=<slug>   → single product detail page
 *   ?category=<slug>  → all items inside a category
 *   (no param)        → the 6 product categories
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$req_product  = isset( $_GET['product'] ) ? sanitize_title( wp_unslash( $_GET['product'] ) ) : '';
$req_category = isset( $_GET['category'] ) ? sanitize_title( wp_unslash( $_GET['category'] ) ) : '';

/* ============================================================= PRODUCT DETAIL */
if ( $req_product ) :
	$item = maxmi_find_product( $req_product );
	if ( $item ) :
		$pimg = maxmi_product_img_url( isset( $item['img'] ) ? $item['img'] : '' );
		?>
		<section class="maxmi-page-hero">
			<div class="maxmi-container">
				<h1><?php echo esc_html( $item['name'] ); ?></h1>
				<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / <a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>">Products</a> / <a href="<?php echo esc_url( add_query_arg( 'category', $item['category_slug'], maxmi_page_url( 'products' ) ) ); ?>"><?php echo esc_html( $item['category'] ); ?></a> / <?php echo esc_html( $item['name'] ); ?></p>
			</div>
		</section>
		<section class="maxmi-section">
			<div class="maxmi-container maxmi-about-grid">
				<div class="maxmi-hero__media maxmi-detail-media" data-reveal>
					<?php if ( $pimg ) : ?><img src="<?php echo esc_url( $pimg ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>"><?php else : echo maxmi_product_svg( $item['svg'] ); endif; // phpcs:ignore ?>
				</div>
				<div data-reveal>
					<span class="maxmi-pfull-card__cat"><?php echo esc_html( $item['category'] ); ?></span>
					<h2 class="maxmi-h2"><?php echo esc_html( $item['name'] ); ?></h2>
					<p style="color:var(--gray)"><?php echo esc_html( $item['desc'] ); ?></p>
					<p style="color:var(--gray)"><?php echo esc_html( $item['detail'] ); ?></p>
					<ul class="maxmi-why__list" style="margin:18px 0">
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>ISO / IS certified &amp; quality tested</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Professional installation &amp; commissioning</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>AMC, refilling &amp; 24/7 support</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Best price for bulk &amp; project orders</li>
					</ul>
					<div style="display:flex;gap:12px;flex-wrap:wrap">
						<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>">Request a Quote</a>
						<a class="maxmi-btn maxmi-btn--ghost" href="<?php echo esc_url( add_query_arg( 'category', $item['category_slug'], maxmi_page_url( 'products' ) ) ); ?>">More in <?php echo esc_html( $item['category'] ); ?></a>
					</div>
				</div>
			</div>
		</section>

		<?php
		$cat_obj   = maxmi_find_category( $item['category_slug'] );
		$cat_intro = $cat_obj ? $cat_obj['intro'] : '';
		$apps      = maxmi_category_apps( $item['category_slug'] );
		?>
		<section class="maxmi-section maxmi-industries-sec">
			<div class="maxmi-container maxmi-detail-cols">
				<div data-reveal>
					<h2 class="maxmi-h3">About the <?php echo esc_html( $item['name'] ); ?></h2>
					<?php if ( $cat_intro ) : ?><p style="color:var(--gray)"><?php echo esc_html( $cat_intro ); ?></p><?php endif; ?>
					<p style="color:var(--gray)">At MAX MI Fire Safety Solution we supply, install, test, commission and maintain the <?php echo esc_html( $item['name'] ); ?> for residential, commercial and industrial clients across the region. Every unit is sourced from trusted, quality-certified manufacturers and delivered with proper documentation and warranty. Our certified engineers ensure correct sizing, placement and installation as per NBC, IS and fire-department norms — so you stay fully compliant and protected.</p>
					<p style="color:var(--gray)">We also offer annual maintenance contracts (AMC), refilling, servicing and 24×7 emergency support, making MAX MI a single-window partner for all your fire-safety needs — from a single extinguisher to a complete building system.</p>
					<h3 class="maxmi-h3" style="margin-top:24px">Why choose MAX MI?</h3>
					<ul class="maxmi-why__list">
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Genuine, quality &amp; ISO/IS certified products</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Expert installation, testing &amp; commissioning</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>AMC, refilling &amp; 24×7 emergency support</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Best pricing for bulk &amp; project orders</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Fast delivery &amp; experienced engineers</li>
					</ul>
				</div>
				<div data-reveal>
					<h3 class="maxmi-h3">Typical Applications</h3>
					<p style="color:var(--gray);margin-bottom:14px">The <?php echo esc_html( $item['name'] ); ?> is ideally suited for:</p>
					<div class="maxmi-apps">
						<?php foreach ( $apps as $ap ) : ?>
							<span class="maxmi-app"><?php echo maxmi_flame(); ?> <?php echo esc_html( $ap ); ?></span>
						<?php endforeach; ?>
					</div>
					<div class="maxmi-detail-cta">
						<h3 class="maxmi-h3">Need this product?</h3>
						<p style="color:var(--gray)">Get the best price and free expert advice today.</p>
						<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>">Request a Quote</a>
					</div>
				</div>
			</div>
		</section>
		<?php
		get_footer();
		return;
	endif;
endif;

/* ============================================================= CATEGORY VIEW */
if ( $req_category ) :
	$cat = maxmi_find_category( $req_category );
	if ( $cat ) :
		?>
		<section class="maxmi-page-hero">
			<div class="maxmi-container">
				<h1><?php echo esc_html( $cat['name'] ); ?></h1>
				<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / <a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>">Products</a> / <?php echo esc_html( $cat['name'] ); ?></p>
			</div>
		</section>
		<section class="maxmi-section">
			<div class="maxmi-container">
				<div class="maxmi-sec-head">
					<h2 class="maxmi-h2"><?php echo esc_html( $cat['name'] ); ?></h2>
					<p class="maxmi-sec-sub"><?php echo esc_html( $cat['intro'] ); ?></p>
				</div>
				<div class="maxmi-products-full">
					<?php foreach ( $cat['items'] as $item ) :
						$pimg = maxmi_product_img_url( isset( $item['img'] ) ? $item['img'] : '' );
						$svg  = ! empty( $item['svg'] ) ? $item['svg'] : $cat['svg'];
						$url  = add_query_arg( 'product', sanitize_title( $item['name'] ), maxmi_page_url( 'products' ) );
						?>
						<a class="maxmi-pfull-card" href="<?php echo esc_url( $url ); ?>" data-reveal>
							<div class="maxmi-pfull-card__img">
								<?php if ( $pimg ) : ?><img src="<?php echo esc_url( $pimg ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" loading="lazy"><?php else : echo maxmi_product_svg( $svg ); endif; // phpcs:ignore ?>
							</div>
							<span class="maxmi-pfull-card__cat"><?php echo esc_html( $cat['name'] ); ?></span>
							<h3><?php echo esc_html( $item['name'] ); ?></h3>
							<p><?php echo esc_html( $item['desc'] ); ?></p>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<?php
		get_footer();
		return;
	endif;
endif;

/* ============================================================= CATEGORIES (default) */
?>
<section class="maxmi-page-hero">
	<div class="maxmi-container">
		<h1>Our Products</h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / Products</p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Complete <span class="maxmi-red">Fire Safety</span> Product Range</h2>
			<p class="maxmi-sec-sub">From extinguishers and alarms to hydrants, pumps and sprinklers — explore our full category-wise range. Click any category to see all products.</p>
		</div>
		<div class="maxmi-cards">
			<?php foreach ( maxmi_catalog() as $cat ) :
				$pimg = maxmi_product_img_url( isset( $cat['img'] ) ? $cat['img'] : '' );
				$url  = add_query_arg( 'category', $cat['slug'], maxmi_page_url( 'products' ) );
				?>
				<a class="maxmi-card maxmi-cat-card" href="<?php echo esc_url( $url ); ?>" data-reveal>
					<div class="maxmi-cat-card__media">
						<?php if ( $pimg ) : ?><img src="<?php echo esc_url( $pimg ); ?>" alt="<?php echo esc_attr( $cat['name'] ); ?>" loading="lazy"><?php else : echo maxmi_product_svg( $cat['svg'] ); endif; // phpcs:ignore ?>
					</div>
					<h3><?php echo esc_html( $cat['name'] ); ?></h3>
					<p><?php echo esc_html( wp_trim_words( $cat['intro'], 18 ) ); ?></p>
					<span class="maxmi-card__more"><?php echo count( $cat['items'] ); ?> products &rarr;</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="maxmi-cta">
	<div class="maxmi-container maxmi-cta__inner">
		<div class="maxmi-cta__text">
			<h2>Need a product quote?</h2>
			<p>Tell us your requirement and get the best price on genuine, certified fire-safety products.</p>
		</div>
		<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>">Request a Quote</a>
	</div>
</section>
<?php
get_footer();
