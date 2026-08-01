<?php
/**
 * Fallback template (blog / archive / search).
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
		<h1><?php echo is_home() ? esc_html__( 'Blog', 'maxmi' ) : esc_html( wp_get_document_title() ); ?></h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php esc_html_e( 'Posts', 'maxmi' ); ?></p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container">
		<?php if ( have_posts() ) : ?>
			<div class="maxmi-cards">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="maxmi-card">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large', array( 'style' => 'border-radius:12px;margin-bottom:14px' ) ); ?></a>
						<?php endif; ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
						<a class="maxmi-viewall" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'maxmi' ); ?> &rarr;</a>
					</article>
				<?php endwhile; ?>
			</div>
			<div style="margin-top:34px;text-align:center"><?php the_posts_pagination(); ?></div>
		<?php else : ?>
			<p class="maxmi-center"><?php esc_html_e( 'Nothing found.', 'maxmi' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
