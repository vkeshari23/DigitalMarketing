<?php
/**
 * Template Name: MAX MI — Projects
 * Auto-used for a page with slug "projects".
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$projects = array(
	array( 'title' => 'Residential Tower — Fire Alarm & Hydrant', 'cat' => 'Residential', 'svg' => 'alarm_panel' ),
	array( 'title' => 'IT Park — Sprinkler System Installation', 'cat' => 'Commercial', 'svg' => 'sprinkler' ),
	array( 'title' => 'Manufacturing Plant — Complete Fire System', 'cat' => 'Industrial', 'svg' => 'hydrant' ),
	array( 'title' => 'Hospital — Detection & Extinguishers', 'cat' => 'Healthcare', 'svg' => 'smoke_detector' ),
	array( 'title' => 'Warehouse — Hose Reel & Hydrant Network', 'cat' => 'Logistics', 'svg' => 'hose_reel' ),
	array( 'title' => 'Hotel — AMC & Safety Audit', 'cat' => 'Hospitality', 'svg' => 'extinguisher_abc' ),
);
?>
<section class="maxmi-page-hero">
	<div class="maxmi-container">
		<h1><?php esc_html_e( 'Our Projects', 'maxmi' ); ?></h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php esc_html_e( 'Projects', 'maxmi' ); ?></p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Some of Our <span class="maxmi-red">Recent Work</span></h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'Trusted by builders, factories, hospitals and offices across the region.', 'maxmi' ); ?></p>
		</div>
		<div class="maxmi-products-full">
			<?php foreach ( $projects as $p ) : ?>
				<div class="maxmi-pfull-card" data-reveal>
					<div class="maxmi-pfull-card__img"><?php echo maxmi_product_svg( $p['svg'] ); // phpcs:ignore ?></div>
					<span class="maxmi-pfull-card__cat"><?php echo esc_html( $p['cat'] ); ?></span>
					<h3 style="font-size:15px"><?php echo esc_html( $p['title'] ); ?></h3>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="maxmi-cta">
	<div class="maxmi-container maxmi-cta__inner">
		<div class="maxmi-cta__text">
			<h2><?php esc_html_e( 'Have a project in mind?', 'maxmi' ); ?></h2>
			<p><?php esc_html_e( 'Let us design a fire safety solution tailored to your site.', 'maxmi' ); ?></p>
		</div>
		<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Discuss Your Project', 'maxmi' ); ?></a>
	</div>
</section>
<?php
get_footer();
