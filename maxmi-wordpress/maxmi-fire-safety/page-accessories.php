<?php
/**
 * Template Name: MAX MI — Accessories
 * Auto-used for the page with slug "accessories".
 *
 *   ?accessory=<slug> → single accessory detail
 *   (no param)        → all accessories
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$req = isset( $_GET['accessory'] ) ? sanitize_title( wp_unslash( $_GET['accessory'] ) ) : '';

/* -------- Accessory detail -------- */
if ( $req ) :
	$item = maxmi_find_accessory( $req );
	if ( $item ) : ?>
		<section class="maxmi-page-hero">
			<div class="maxmi-container">
				<h1><?php echo esc_html( $item['name'] ); ?></h1>
				<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / <a href="<?php echo esc_url( maxmi_page_url( 'accessories' ) ); ?>">Accessories</a> / <?php echo esc_html( $item['name'] ); ?></p>
			</div>
		</section>
		<section class="maxmi-section">
			<div class="maxmi-container maxmi-about-grid">
				<?php $aimg = maxmi_accessory_img_url( isset( $item['img'] ) ? $item['img'] : '' ); ?>
				<div class="maxmi-hero__media maxmi-detail-media" data-reveal>
					<?php if ( $aimg ) : ?>
						<img src="<?php echo esc_url( $aimg ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>">
					<?php else : echo maxmi_accessory_svg( isset( $item['svg'] ) ? $item['svg'] : 'default' ); endif; // phpcs:ignore ?>
				</div>
				<div data-reveal>
					<span class="maxmi-pfull-card__cat">Accessory</span>
					<h2 class="maxmi-h2"><?php echo esc_html( $item['name'] ); ?></h2>
					<p style="color:var(--gray)"><?php echo esc_html( $item['desc'] ); ?></p>
					<p style="color:var(--gray)"><?php echo esc_html( $item['detail'] ); ?></p>
					<ul class="maxmi-why__list" style="margin:18px 0">
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Genuine, quality-tested spare / accessory</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Available for all leading fire-system brands</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Bulk supply &amp; fast delivery across India</li>
					</ul>
					<div style="display:flex;gap:12px;flex-wrap:wrap">
						<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>">Request a Quote</a>
						<a class="maxmi-btn maxmi-btn--ghost" href="<?php echo esc_url( maxmi_page_url( 'accessories' ) ); ?>">All Accessories</a>
					</div>
				</div>
			</div>
		</section>

		<section class="maxmi-section maxmi-industries-sec">
			<div class="maxmi-container maxmi-detail-cols">
				<div data-reveal>
					<h2 class="maxmi-h3">About the <?php echo esc_html( $item['name'] ); ?></h2>
					<p style="color:var(--gray)"><?php echo esc_html( $item['detail'] ); ?></p>
					<p style="color:var(--gray)">MAX MI Fire Safety Solution stocks a complete range of fire-safety accessories and spare parts for all leading brands. Whether you need a single spare for maintenance or bulk supply for a new project, we deliver genuine, quality-tested components at competitive prices — backed by fast dispatch and expert guidance.</p>
					<h3 class="maxmi-h3" style="margin-top:24px">Why choose MAX MI?</h3>
					<ul class="maxmi-why__list">
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Genuine, quality-tested spares &amp; accessories</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Huge stock for all major fire-system brands</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Bulk supply &amp; fast delivery across India</li>
						<li><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#e11d1d" stroke-width="2.4"><path d="M8 12l3 3 5-6"/></svg>Expert help to find the right part</li>
					</ul>
				</div>
				<div data-reveal>
					<div class="maxmi-detail-cta">
						<h3 class="maxmi-h3">Need this part?</h3>
						<p style="color:var(--gray)">Send us the name or specification — we'll quote you the best price.</p>
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
?>
<section class="maxmi-page-hero">
	<div class="maxmi-container">
		<h1>Fire Safety Accessories &amp; Spares</h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / Accessories</p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Complete <span class="maxmi-red">Accessories</span> &amp; Spare Parts</h2>
			<p class="maxmi-sec-sub">Pipes, valves, gauges, clamps, couplings, tools and every spare you need to build and maintain a fire-safety system — all under one roof.</p>
		</div>
		<div class="maxmi-products-full">
			<?php foreach ( maxmi_accessory_items() as $item ) :
				$url  = add_query_arg( 'accessory', sanitize_title( $item['name'] ), maxmi_page_url( 'accessories' ) );
				$aimg = maxmi_accessory_img_url( isset( $item['img'] ) ? $item['img'] : '' );
				?>
				<a class="maxmi-pfull-card" href="<?php echo esc_url( $url ); ?>" data-reveal>
					<div class="maxmi-pfull-card__img">
						<?php if ( $aimg ) : ?>
							<img src="<?php echo esc_url( $aimg ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" loading="lazy">
						<?php else : echo maxmi_accessory_svg( isset( $item['svg'] ) ? $item['svg'] : 'default' ); endif; // phpcs:ignore ?>
					</div>
					<span class="maxmi-pfull-card__cat">Accessory</span>
					<h3 style="font-size:16px"><?php echo esc_html( $item['name'] ); ?></h3>
					<p><?php echo esc_html( $item['desc'] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="maxmi-cta">
	<div class="maxmi-container maxmi-cta__inner">
		<div class="maxmi-cta__text">
			<h2>Looking for a specific spare?</h2>
			<p>Send us the part name — we stock a huge range of fire-safety accessories at the best prices.</p>
		</div>
		<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>">Enquire Now</a>
	</div>
</section>
<?php
get_footer();
