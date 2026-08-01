<?php
/**
 * Product archive (/product/). Mirrors the Products page listing.
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
		<h1><?php esc_html_e( 'Our Products', 'maxmi' ); ?></h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php esc_html_e( 'Products', 'maxmi' ); ?></p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container">
		<div class="maxmi-products-full">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					$terms = get_the_terms( get_the_ID(), 'maxmi_product_cat' );
					$cat   = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
					?>
					<a class="maxmi-pfull-card" href="<?php the_permalink(); ?>" data-reveal>
						<div class="maxmi-pfull-card__img">
							<?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'maxmi-product' ); else : echo maxmi_product_svg( 'default' ); endif; ?>
						</div>
						<?php if ( $cat ) : ?><span class="maxmi-pfull-card__cat"><?php echo esc_html( $cat ); ?></span><?php endif; ?>
						<h3><?php the_title(); ?></h3>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 16 ) ); ?></p>
					</a>
					<?php
				endwhile;
			else :
				foreach ( maxmi_default_products() as $p ) :
					$pimg = maxmi_product_img_url( isset( $p['img'] ) ? $p['img'] : '' );
					?>
					<div class="maxmi-pfull-card" data-reveal>
						<div class="maxmi-pfull-card__img">
							<?php if ( $pimg ) : ?>
								<img src="<?php echo esc_url( $pimg ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" loading="lazy">
							<?php else : echo maxmi_product_svg( $p['svg'] ); endif; // phpcs:ignore ?>
						</div>
						<span class="maxmi-pfull-card__cat"><?php echo esc_html( $p['cat'] ); ?></span>
						<h3><?php echo esc_html( $p['title'] ); ?></h3>
						<p><?php echo esc_html( $p['desc'] ); ?></p>
					</div>
					<?php
				endforeach;
			endif;
			?>
		</div>
		<?php if ( have_posts() ) : ?><div style="margin-top:34px;text-align:center"><?php the_posts_pagination(); ?></div><?php endif; ?>
	</div>
</section>
<?php
get_footer();
