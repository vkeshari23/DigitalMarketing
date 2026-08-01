<?php
/**
 * Template Name: MAX MI — Services
 * Auto-used for a page with slug "services".
 * Shows all services, OR a single service detail page when ?service=<slug>
 * is present, so every service has its own inner page.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

/* Extended copy for service detail pages, keyed by service icon. */
function maxmi_service_detail_text( $icon ) {
	$map = array(
		'design'  => 'Our engineers prepare complete fire protection designs as per NBC, IS and local fire-department norms — including layout drawings, hydraulic calculations, BOQ and liaison for approvals. Every design is tailored to your building type, occupancy and risk level so you get a system that is both compliant and cost-effective.',
		'supply'  => 'We supply only genuine, ISI-certified fire safety equipment from trusted brands — extinguishers, hydrants, alarm panels, detectors, sprinklers, hose reels and accessories. Bulk and project pricing available, with proper documentation and warranty for every item.',
		'install' => 'Certified engineers and skilled technicians handle installation, testing and commissioning of your entire fire system. We follow strict safety and quality standards, complete the job on schedule, and hand over with full testing reports and a demonstration for your team.',
		'amc'     => 'Our Annual Maintenance Contracts keep your fire systems always ready. Scheduled inspections, refilling, servicing and prompt repairs ensure your equipment stays compliant and functional year-round — with priority response and detailed service records.',
		'audit'   => 'A detailed fire safety audit identifies gaps and risks in your premises. We assess existing systems, check compliance, and provide a clear report with practical recommendations and a prioritised action plan to make your building fully fire-safe.',
		'support' => 'Round-the-clock emergency support means help is always a call away. Our team responds quickly to breakdowns, refills and urgent requirements, minimising downtime and keeping your people and property protected at all times.',
	);
	return isset( $map[ $icon ] ) ? $map[ $icon ] : '';
}

/* ---- Detail view (?service=slug) ---- */
$req = isset( $_GET['service'] ) ? sanitize_title( wp_unslash( $_GET['service'] ) ) : '';
$single = null;
if ( $req ) {
	foreach ( maxmi_services() as $s ) {
		if ( sanitize_title( $s['title'] ) === $req ) {
			$single = $s;
			break;
		}
	}
}

if ( $single ) : ?>
	<section class="maxmi-page-hero">
		<div class="maxmi-container">
			<h1><?php echo esc_html( $single['title'] ); ?></h1>
			<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <a href="<?php echo esc_url( maxmi_page_url( 'services' ) ); ?>"><?php esc_html_e( 'Services', 'maxmi' ); ?></a> / <?php echo esc_html( $single['title'] ); ?></p>
		</div>
	</section>

	<section class="maxmi-section">
		<div class="maxmi-container maxmi-prose">
			<span class="maxmi-service-detail-icon"><?php echo maxmi_icon( $single['icon'] ); ?></span>
			<h2 class="maxmi-h2"><?php echo esc_html( $single['title'] ); ?></h2>
			<p><?php echo esc_html( $single['text'] ); ?></p>
			<p><?php echo esc_html( maxmi_service_detail_text( $single['icon'] ) ); ?></p>
			<div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:20px">
				<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Enquire Now', 'maxmi' ); ?></a>
				<a class="maxmi-btn maxmi-btn--ghost" href="<?php echo esc_url( maxmi_page_url( 'services' ) ); ?>"><?php esc_html_e( 'All Services', 'maxmi' ); ?></a>
			</div>
		</div>
	</section>
	<?php
	get_footer();
	return;
endif;
?>
<section class="maxmi-page-hero">
	<div class="maxmi-container">
		<h1><?php esc_html_e( 'Our Services', 'maxmi' ); ?></h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php esc_html_e( 'Services', 'maxmi' ); ?></p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-sec-head">
			<h2 class="maxmi-h2">Complete <span class="maxmi-red">Fire Safety</span> Services</h2>
			<p class="maxmi-sec-sub"><?php esc_html_e( 'From design & supply to installation, AMC and 24/7 emergency support — we handle it all. Click a service to learn more.', 'maxmi' ); ?></p>
		</div>

		<div class="maxmi-cards">
			<?php foreach ( maxmi_services() as $s ) :
				$url = add_query_arg( 'service', sanitize_title( $s['title'] ), maxmi_page_url( 'services' ) );
				?>
				<a class="maxmi-card" href="<?php echo esc_url( $url ); ?>" data-reveal>
					<span class="maxmi-card__icon"><?php echo maxmi_icon( $s['icon'] ); ?></span>
					<h3><?php echo esc_html( $s['title'] ); ?></h3>
					<p><?php echo esc_html( $s['text'] ); ?></p>
					<span class="maxmi-card__more"><?php esc_html_e( 'Learn More', 'maxmi' ); ?> &rarr;</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="maxmi-cta">
	<div class="maxmi-container maxmi-cta__inner">
		<div class="maxmi-cta__text">
			<h2><?php esc_html_e( 'Book a Free Site Inspection', 'maxmi' ); ?></h2>
			<p><?php esc_html_e( 'Our engineers will assess your premises at no cost.', 'maxmi' ); ?></p>
		</div>
		<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Get Started', 'maxmi' ); ?></a>
	</div>
</section>
<?php
get_footer();
