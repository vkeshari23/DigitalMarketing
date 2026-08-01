<?php
/**
 * Front page (Home) — all sections.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$hero_img = maxmi_opt( 'maxmi_hero_image', '' );
?>

<!-- ============ HERO / AUTO-SLIDING BANNER ============ -->
<?php $slides = maxmi_banner_slides(); ?>
<?php if ( ! empty( $slides ) ) : ?>
<section class="maxmi-banner" id="maxmiBanner" aria-label="<?php esc_attr_e( 'Fire safety highlights', 'maxmi' ); ?>">
	<div class="maxmi-banner__stage">
		<?php foreach ( $slides as $i => $s ) : ?>
			<div class="maxmi-banner__slide<?php echo 0 === $i ? ' is-active' : ''; ?>" style="background-image:url('<?php echo esc_url( $s['url'] ); ?>')"></div>
		<?php endforeach; ?>
		<div class="maxmi-banner__overlay"></div>
	</div>

	<div class="maxmi-container maxmi-banner__inner">
		<?php foreach ( $slides as $i => $s ) : ?>
			<div class="maxmi-banner__caption<?php echo 0 === $i ? ' is-active' : ''; ?>">
				<span class="maxmi-banner__kicker"><?php echo maxmi_flame(); ?> <?php echo esc_html( $s['kicker'] ); ?></span>
				<h1 class="maxmi-banner__title"><?php echo esc_html( $s['title'] ); ?></h1>
				<p class="maxmi-banner__sub"><?php echo esc_html( $s['sub'] ); ?></p>
				<div class="maxmi-banner__actions">
					<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php echo esc_html( maxmi_opt( 'maxmi_hero_btn1', 'Get Free Site Inspection' ) ); ?>
						<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
					</a>
					<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php echo esc_html( maxmi_opt( 'maxmi_hero_btn2', 'Explore Products' ) ); ?></a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<!-- trust badges strip (below the banner) -->
<section class="maxmi-usp">
	<div class="maxmi-container maxmi-usp__row">
		<div class="maxmi-badge"><span><?php echo maxmi_icon( 'certified' ); ?></span><b>ISO Certified</b><small>Products</small></div>
		<div class="maxmi-badge"><span><?php echo maxmi_icon( 'install' ); ?></span><b>Expert</b><small>Installation</small></div>
		<div class="maxmi-badge"><span><?php echo maxmi_icon( 'support' ); ?></span><b>24/7 Emergency</b><small>Support</small></div>
		<div class="maxmi-badge"><span><?php echo maxmi_icon( 'delivery' ); ?></span><b>Fast</b><small>Delivery</small></div>
	</div>
</section>
<?php endif; ?>

<!-- ============ PREMIUM PRODUCTS ============ -->
<section class="maxmi-section maxmi-products">
	<div class="maxmi-container">
		<div class="maxmi-sec-head maxmi-sec-head--row">
			<h2 class="maxmi-h2">Our <span class="maxmi-red">Product</span> Categories</h2>
			<a class="maxmi-viewall" href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'View All Products', 'maxmi' ); ?>
				<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
			</a>
		</div>

		<div class="maxmi-prod-grid maxmi-prod-grid--cat">
			<?php
			foreach ( maxmi_catalog() as $cat ) :
				$pimg = maxmi_product_img_url( isset( $cat['img'] ) ? $cat['img'] : '' );
				$curl = add_query_arg( 'category', $cat['slug'], maxmi_page_url( 'products' ) );
				?>
				<a class="maxmi-prod-card" href="<?php echo esc_url( $curl ); ?>" data-reveal>
					<div class="maxmi-prod-card__img">
						<?php if ( $pimg ) : ?>
							<img src="<?php echo esc_url( $pimg ); ?>" alt="<?php echo esc_attr( $cat['name'] ); ?>" loading="lazy">
						<?php else : echo maxmi_product_svg( $cat['svg'] ); endif; // phpcs:ignore ?>
					</div>
					<h3 class="maxmi-prod-card__title"><?php echo esc_html( $cat['name'] ); ?></h3>
					<span class="maxmi-prod-card__count"><?php echo count( $cat['items'] ); ?> products</span>
				</a>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>

<!-- ============ FEATURE STRIP ============ -->
<section class="maxmi-section maxmi-features-sec">
	<div class="maxmi-container">
		<div class="maxmi-feature-strip">
			<?php foreach ( maxmi_features() as $f ) : ?>
				<div class="maxmi-feature" data-reveal>
					<span class="maxmi-feature__icon"><?php echo maxmi_icon( $f['icon'] ); ?></span>
					<div>
						<b><?php echo esc_html( $f['title'] ); ?></b>
						<small><?php echo esc_html( $f['text'] ); ?></small>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ STATS ============ -->
<section class="maxmi-section maxmi-stats-sec">
	<div class="maxmi-container">
		<div class="maxmi-stats">
			<?php foreach ( maxmi_stats() as $st ) : ?>
				<div class="maxmi-stat" data-reveal>
					<div class="maxmi-stat__num" data-count="<?php echo esc_attr( $st['num'] ); ?>" data-suffix="<?php echo esc_attr( $st['suffix'] ); ?>">0<?php echo esc_html( $st['suffix'] ); ?></div>
					<div class="maxmi-stat__label"><?php echo esc_html( $st['label'] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ ABOUT (full width) ============ -->
<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-about-card maxmi-about-card--full" data-reveal>
			<h2 class="maxmi-h2">About <span class="maxmi-red">MAX MI</span> Fire Safety Solution</h2>
			<p><?php esc_html_e( 'MAX MI Fire Safety Solution is a leading provider of comprehensive fire protection solutions. We deliver high-quality, ISI-certified products, expert installation, and reliable maintenance services to keep your spaces safe and fully compliant.', 'maxmi' ); ?></p>
			<p><?php esc_html_e( 'From residential apartments to large industrial plants, our certified engineers design and install fire systems that protect what matters most — lives and property.', 'maxmi' ); ?></p>
			<p><?php esc_html_e( 'With 15+ years of experience, 1000+ happy clients and a 24/7 support promise, MAX MI is the name businesses across the region trust for genuine products, honest pricing and reliable after-sales service.', 'maxmi' ); ?></p>
			<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'about' ) ); ?>"><?php esc_html_e( 'Know More About Us', 'maxmi' ); ?>
				<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
			</a>
		</div>
	</div>
</section>

<!-- ============ OUR SERVICES (full width) ============ -->
<section class="maxmi-section maxmi-industries-sec">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Our <span class="maxmi-red">Services</span></h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'End-to-end fire safety services — from design and supply to installation, AMC and 24/7 support.', 'maxmi' ); ?></p>
		</div>
		<div class="maxmi-cards">
			<?php foreach ( maxmi_services() as $s ) :
				$surl = add_query_arg( 'service', sanitize_title( $s['title'] ), maxmi_page_url( 'services' ) );
				?>
				<a class="maxmi-card" href="<?php echo esc_url( $surl ); ?>" data-reveal>
					<span class="maxmi-card__icon"><?php echo maxmi_icon( $s['icon'] ); ?></span>
					<h3><?php echo esc_html( $s['title'] ); ?></h3>
					<p><?php echo esc_html( $s['text'] ); ?></p>
					<span class="maxmi-card__more"><?php esc_html_e( 'Learn More', 'maxmi' ); ?> &rarr;</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ INDUSTRIES ============ -->
<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Industries <span class="maxmi-red">We Serve</span></h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'Trusted fire safety partner across every sector.', 'maxmi' ); ?></p>
		</div>
		<div class="maxmi-industries">
			<?php foreach ( maxmi_industries() as $ind ) : ?>
				<div class="maxmi-industry" data-reveal>
					<span class="maxmi-industry__icon"><?php echo maxmi_icon( $ind['icon'] ); ?></span>
					<b><?php echo esc_html( $ind['label'] ); ?></b>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ WHY CHOOSE US (full width) ============ -->
<section class="maxmi-section maxmi-industries-sec">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Why <span class="maxmi-red">Choose Us?</span></h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'The reasons thousands of clients trust MAX MI for their fire safety needs.', 'maxmi' ); ?></p>
		</div>
		<div class="maxmi-why-grid">
			<?php foreach ( maxmi_why() as $w ) : ?>
				<div class="maxmi-why-item" data-reveal>
					<svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#e11d1d" stroke-width="2.4"><circle cx="12" cy="12" r="10" stroke="#e11d1d" opacity=".25"/><path d="M8 12l3 3 5-6"/></svg>
					<span><?php echo esc_html( $w ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ============ TESTIMONIALS (full width) ============ -->
<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Customer <span class="maxmi-red">Testimonials</span></h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'What our clients say about working with us.', 'maxmi' ); ?></p>
		</div>
		<div class="maxmi-panel maxmi-testis maxmi-testis--full" data-reveal>
			<div class="maxmi-testi-slider" id="maxmiTesti">
				<?php foreach ( maxmi_testimonials() as $i => $t ) : ?>
					<figure class="maxmi-testi<?php echo 0 === $i ? ' is-active' : ''; ?>">
						<div class="maxmi-quote">&ldquo;</div>
						<blockquote><?php echo esc_html( $t['text'] ); ?></blockquote>
						<div class="maxmi-stars">★★★★★</div>
						<figcaption><b><?php echo esc_html( $t['name'] ); ?></b><small><?php echo esc_html( $t['role'] ); ?></small></figcaption>
					</figure>
				<?php endforeach; ?>
				<div class="maxmi-testi-dots"></div>
			</div>
		</div>
	</div>
</section>

<!-- ============ BRANDS (2-row opposite marquee) ============ -->
<section class="maxmi-section maxmi-brands-sec">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Brands <span class="maxmi-red">We Deal With</span></h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'Trusted by leading companies and institutions across industries.', 'maxmi' ); ?></p>
		</div>
		<?php
		$brands = maxmi_brand_items();
		$half   = (int) ceil( count( $brands ) / 2 );
		$rows   = array( array_slice( $brands, 0, $half ), array_slice( $brands, $half ) );

		foreach ( $rows as $r => $row ) :
			// Row 1 slides left -> right, Row 2 slides right -> left.
			$dir_class = ( 0 === $r ) ? 'maxmi-marquee__track--right' : 'maxmi-marquee__track--left';
			?>
			<div class="maxmi-marquee">
				<div class="maxmi-marquee__track <?php echo esc_attr( $dir_class ); ?>">
					<?php
					// Print items twice for a seamless infinite loop.
					for ( $dup = 0; $dup < 2; $dup++ ) :
						foreach ( $row as $b ) :
							?>
							<div class="maxmi-brand" title="<?php echo esc_attr( $b['name'] ); ?>">
								<?php if ( ! empty( $b['logo_url'] ) ) : ?>
									<img src="<?php echo esc_url( $b['logo_url'] ); ?>" alt="<?php echo esc_attr( $b['name'] ); ?>" loading="lazy">
								<?php else : ?>
									<span class="maxmi-brand__name"><?php echo esc_html( $b['name'] ); ?></span>
								<?php endif; ?>
							</div>
							<?php
						endforeach;
					endfor;
					?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<!-- ============ CTA BANNER ============ -->
<section class="maxmi-cta">
	<div class="maxmi-container maxmi-cta__inner">
		<div class="maxmi-cta__text">
			<h2><?php esc_html_e( 'Ensure Safety. Protect What Matters Most.', 'maxmi' ); ?></h2>
			<p><?php esc_html_e( 'Get expert consultation & a free site inspection today!', 'maxmi' ); ?></p>
		</div>
		<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Get Free Site Inspection', 'maxmi' ); ?>
			<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
		</a>
	</div>
</section>

<?php
get_footer();
