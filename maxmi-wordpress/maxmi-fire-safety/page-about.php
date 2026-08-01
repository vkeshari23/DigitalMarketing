<?php
/**
 * Template Name: MAX MI — About Us
 * Auto-used for a page with slug "about".
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<section class="maxmi-page-hero">
	<div class="maxmi-container">
		<h1><?php esc_html_e( 'About Us', 'maxmi' ); ?></h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php esc_html_e( 'About Us', 'maxmi' ); ?></p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container maxmi-about-grid">
		<div data-reveal>
			<span class="maxmi-hero__kicker"><?php echo maxmi_flame(); ?> <?php esc_html_e( 'WHO WE ARE', 'maxmi' ); ?></span>
			<h2 class="maxmi-h2"><?php esc_html_e( 'Your Trusted Fire Safety Partner', 'maxmi' ); ?></h2>
			<?php
			// If the page has its own content, show it; else show default text.
			$has_content = false;
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					if ( trim( get_the_content() ) ) {
						$has_content = true;
						echo '<div class="maxmi-prose">'; the_content(); echo '</div>';
					}
				endwhile;
			endif;
			if ( ! $has_content ) : ?>
				<p style="color:var(--gray)"><?php esc_html_e( 'MAX MI Fire Safety Solution is a leading provider of comprehensive fire protection products and services. With over 15 years of experience, we help residential, commercial and industrial clients stay safe and fully compliant with fire safety norms.', 'maxmi' ); ?></p>
				<p style="color:var(--gray)"><?php esc_html_e( 'We supply ISI-certified fire extinguishers, alarm systems, hydrant & sprinkler systems and a complete range of safety accessories — backed by expert installation, AMC and 24/7 emergency support.', 'maxmi' ); ?></p>
			<?php endif; ?>
			<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Get in Touch', 'maxmi' ); ?>
				<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
			</a>
		</div>
		<div class="maxmi-hero__media" data-reveal><?php echo maxmi_hero_illustration(); // phpcs:ignore ?></div>
	</div>
</section>

<!-- mission / vision / values -->
<section class="maxmi-section maxmi-industries-sec">
	<div class="maxmi-container">
		<div class="maxmi-cards">
			<div class="maxmi-card" data-reveal>
				<span class="maxmi-card__icon"><?php echo maxmi_icon( 'design' ); ?></span>
				<h3><?php esc_html_e( 'Our Mission', 'maxmi' ); ?></h3>
				<p><?php esc_html_e( 'To protect lives and property by delivering reliable, certified and affordable fire safety solutions to every space.', 'maxmi' ); ?></p>
			</div>
			<div class="maxmi-card" data-reveal>
				<span class="maxmi-card__icon"><?php echo maxmi_icon( 'certified' ); ?></span>
				<h3><?php esc_html_e( 'Our Vision', 'maxmi' ); ?></h3>
				<p><?php esc_html_e( 'To be the most trusted name in fire safety across India through quality, integrity and outstanding service.', 'maxmi' ); ?></p>
			</div>
			<div class="maxmi-card" data-reveal>
				<span class="maxmi-card__icon"><?php echo maxmi_icon( 'support' ); ?></span>
				<h3><?php esc_html_e( 'Our Values', 'maxmi' ); ?></h3>
				<p><?php esc_html_e( 'Safety first, honest pricing, timely delivery and long-term support for every client we serve.', 'maxmi' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- stats -->
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

<section class="maxmi-cta">
	<div class="maxmi-container maxmi-cta__inner">
		<div class="maxmi-cta__text">
			<h2><?php esc_html_e( 'Ready to make your space fire-safe?', 'maxmi' ); ?></h2>
			<p><?php esc_html_e( 'Book a free site inspection with our experts today.', 'maxmi' ); ?></p>
		</div>
		<a class="maxmi-btn maxmi-btn--white" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'maxmi' ); ?></a>
	</div>
</section>
<?php
get_footer();
