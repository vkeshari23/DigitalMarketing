<?php
/**
 * Footer.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$phone   = maxmi_opt( 'maxmi_phone', '9582851966' );
$email   = maxmi_opt( 'maxmi_email', 'info@maxmifiresafety.com' );
$address = maxmi_opt( 'maxmi_address', 'Noida, Gautam Buddha Nagar, Uttar Pradesh' );

$socials = array(
	'maxmi_facebook'  => array( 'Facebook', '<path d="M13 22v-8h3l.5-3H13V9c0-.9.3-1.5 1.6-1.5H17V4.8A22 22 0 0014.7 4.6C12.3 4.6 11 6 11 8.7V11H8v3h3v8z"/>' ),
	'maxmi_instagram' => array( 'Instagram', '<path d="M12 8a4 4 0 100 8 4 4 0 000-8zm0 6.5A2.5 2.5 0 1112 9.5a2.5 2.5 0 010 5zM16.5 6.5a1 1 0 100 2 1 1 0 000-2z"/><rect x="4" y="4" width="16" height="16" rx="5" fill="none" stroke="currentColor" stroke-width="1.6"/>' ),
	'maxmi_linkedin'  => array( 'LinkedIn', '<path d="M7 9v9H4V9zm-1.5-1.4A1.6 1.6 0 117 6a1.6 1.6 0 01-1.5 1.6zM20 18h-3v-4.7c0-1.2-.4-2-1.5-2A1.6 1.6 0 0014 13v5h-3V9h3v1.2A3.2 3.2 0 0117 8.8c2.2 0 3 1.4 3 3.7z"/>' ),
	'maxmi_youtube'   => array( 'YouTube', '<path d="M21.6 8.2a2.5 2.5 0 00-1.8-1.8C18.2 6 12 6 12 6s-6.2 0-7.8.4A2.5 2.5 0 002.4 8.2 26 26 0 002 12a26 26 0 00.4 3.8 2.5 2.5 0 001.8 1.8C5.8 18 12 18 12 18s6.2 0 7.8-.4a2.5 2.5 0 001.8-1.8A26 26 0 0022 12a26 26 0 00-.4-3.8zM10 15V9l5 3z"/>' ),
	'maxmi_twitter'   => array( 'Twitter', '<path d="M18.9 4h2.6l-5.7 6.5L22.5 20h-5.3l-4.1-5.4L8.3 20H5.7l6.1-7L5.5 4h5.4l3.7 4.9zm-.9 14.4h1.4L9 5.5H7.5z"/>' ),
);
?>
</main><!-- #content -->

<footer class="maxmi-footer">
	<div class="maxmi-container maxmi-footer__grid">

		<div class="maxmi-footer__col maxmi-footer__about">
			<span class="maxmi-logo__txt maxmi-logo__txt--light">MAX <b>MI</b><small>Fire Safety Solution</small></span>
			<p><?php esc_html_e( 'Your trusted partner in fire safety and protection. We are committed to providing the best solutions for lives and property.', 'maxmi' ); ?></p>
			<div class="maxmi-socials">
				<?php foreach ( $socials as $key => $data ) :
					$url = maxmi_opt( $key, '' );
					?>
					<a href="<?php echo $url ? esc_url( $url ) : '#'; ?>"
						class="maxmi-social<?php echo $url ? '' : ' is-empty'; ?>"
						<?php echo $url ? 'target="_blank" rel="noopener"' : 'aria-disabled="true" tabindex="-1"'; ?>
						aria-label="<?php echo esc_attr( $data[0] ); ?>">
						<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><?php echo $data[1]; // phpcs:ignore ?></svg>
					</a>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="maxmi-footer__col">
			<h4><?php esc_html_e( 'Quick Links', 'maxmi' ); ?></h4>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'about' ) ); ?>"><?php esc_html_e( 'About Us', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Products', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'services' ) ); ?>"><?php esc_html_e( 'Services', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'projects' ) ); ?>"><?php esc_html_e( 'Projects', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'maxmi' ); ?></a></li>
			</ul>
		</div>

		<div class="maxmi-footer__col">
			<h4><?php esc_html_e( 'Our Products', 'maxmi' ); ?></h4>
			<ul>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Fire Extinguishers', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Fire Alarm Systems', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Fire Hydrant Systems', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Sprinkler Systems', 'maxmi' ); ?></a></li>
				<li><a href="<?php echo esc_url( maxmi_page_url( 'products' ) ); ?>"><?php esc_html_e( 'Fire Safety Accessories', 'maxmi' ); ?></a></li>
			</ul>
		</div>

		<div class="maxmi-footer__col">
			<h4><?php esc_html_e( 'Contact Us', 'maxmi' ); ?></h4>
			<ul class="maxmi-footer__contact">
				<li>
					<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-5.7 7-11a7 7 0 10-14 0c0 5.3 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
					<span><?php echo esc_html( $address ); ?></span>
				</li>
				<li>
					<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11 11 0 003.4.55 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.3.55 3.4a1 1 0 01-.25 1z"/></svg>
					<span>
						<a href="tel:<?php echo esc_attr( maxmi_tel( $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a><br>
						<a href="tel:<?php echo esc_attr( maxmi_tel( maxmi_opt( 'maxmi_phone2', '9354609399' ) ) ); ?>"><?php echo esc_html( maxmi_opt( 'maxmi_phone2', '9354609399' ) ); ?></a>
					</span>
				</li>
				<li>
					<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
					<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="maxmi-footer__bottom">
		<div class="maxmi-container maxmi-footer__bottom-inner">
			<p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Digital India Fire Protection. <?php esc_html_e( 'All Rights Reserved.', 'maxmi' ); ?> <?php esc_html_e( 'Designed &amp; Developed by', 'maxmi' ); ?> <span class="maxmi-credit">Futureloopix Technologies</span></p>
			<p class="maxmi-footer__links">
				<a href="#"><?php esc_html_e( 'Privacy Policy', 'maxmi' ); ?></a>
				<a href="#"><?php esc_html_e( 'Terms &amp; Conditions', 'maxmi' ); ?></a>
			</p>
		</div>
	</div>
</footer>

<?php maxmi_whatsapp_button(); ?>

<button class="maxmi-totop" id="maxmiToTop" aria-label="<?php esc_attr_e( 'Back to top', 'maxmi' ); ?>">
	<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 15l6-6 6 6"/></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
