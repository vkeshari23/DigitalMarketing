<?php
/**
 * Single product view.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

while ( have_posts() ) : the_post();
	$terms = get_the_terms( get_the_ID(), 'maxmi_product_cat' );
	$cat   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
	$phone = maxmi_opt( 'maxmi_phone', '9582851966' );
	?>
	<section class="maxmi-page-hero">
		<div class="maxmi-container">
			<h1><?php the_title(); ?></h1>
			<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Products', 'maxmi' ); ?></a> / <?php the_title(); ?></p>
		</div>
	</section>

	<section class="maxmi-section">
		<div class="maxmi-container maxmi-about-grid">
			<div class="maxmi-hero__media" data-reveal>
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'large', array( 'style' => 'border-radius:20px;box-shadow:var(--shadow-lg)' ) );
				} else {
					echo maxmi_product_svg( 'default' ); // phpcs:ignore
				}
				?>
			</div>
			<div data-reveal>
				<?php if ( $cat ) : ?><span class="maxmi-pfull-card__cat"><?php echo esc_html( $cat ); ?></span><?php endif; ?>
				<h2 class="maxmi-h2"><?php the_title(); ?></h2>
				<div class="maxmi-prose"><?php the_content(); ?></div>
				<div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:20px">
					<a class="maxmi-btn maxmi-btn--primary" href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Request a Quote', 'maxmi' ); ?></a>
					<a class="maxmi-btn maxmi-btn--ghost" href="tel:<?php echo esc_attr( maxmi_tel( $phone ) ); ?>"><?php esc_html_e( 'Call Now', 'maxmi' ); ?></a>
				</div>
			</div>
		</div>
	</section>
	<?php
endwhile;
get_footer();
