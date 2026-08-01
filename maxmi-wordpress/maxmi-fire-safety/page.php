<?php
/**
 * Generic page template.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
while ( have_posts() ) : the_post();
	?>
	<section class="maxmi-page-hero">
		<div class="maxmi-container">
			<h1><?php the_title(); ?></h1>
			<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php the_title(); ?></p>
		</div>
	</section>

	<section class="maxmi-section">
		<div class="maxmi-container maxmi-prose">
			<?php the_content(); ?>
		</div>
	</section>
	<?php
endwhile;
get_footer();
