<?php
/**
 * Template Name: MAX MI — Contact
 * Auto-used for a page with slug "contact".
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$phone   = maxmi_opt( 'maxmi_phone', '9582851966' );
$wa      = preg_replace( '/[^0-9]/', '', maxmi_opt( 'maxmi_whatsapp', '919582851966' ) );
$email   = maxmi_opt( 'maxmi_email', 'info@maxmifiresafety.com' );
$address = maxmi_opt( 'maxmi_address', 'Noida, Gautam Buddha Nagar, Uttar Pradesh' );
$map_q   = rawurlencode( $address );
?>
<section class="maxmi-page-hero">
	<div class="maxmi-container">
		<h1><?php esc_html_e( 'Contact Us', 'maxmi' ); ?></h1>
		<p class="maxmi-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'maxmi' ); ?></a> / <?php esc_html_e( 'Contact Us', 'maxmi' ); ?></p>
	</div>
</section>

<section class="maxmi-section">
	<div class="maxmi-container maxmi-contact-grid">

		<!-- info -->
		<div class="maxmi-contact-info" data-reveal>
			<div class="maxmi-info-card">
				<span class="maxmi-info-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-5.7 7-11a7 7 0 10-14 0c0 5.3 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg></span>
				<div><b><?php esc_html_e( 'Our Address', 'maxmi' ); ?></b><span><?php echo esc_html( $address ); ?></span></div>
			</div>
			<div class="maxmi-info-card">
				<span class="maxmi-info-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M6.6 10.8a15 15 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11 11 0 003.4.55 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.2.2 2.3.55 3.4a1 1 0 01-.25 1z"/></svg></span>
				<div><b><?php esc_html_e( 'Call Us', 'maxmi' ); ?></b><a href="tel:<?php echo esc_attr( maxmi_tel( $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></div>
			</div>
			<div class="maxmi-info-card">
				<span class="maxmi-info-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></span>
				<div><b><?php esc_html_e( 'Email Us', 'maxmi' ); ?></b><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></div>
			</div>
			<div class="maxmi-info-card">
				<span class="maxmi-info-card__icon"><svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
				<div><b><?php esc_html_e( 'Working Hours', 'maxmi' ); ?></b><span><?php esc_html_e( 'Mon – Sat: 9:00 AM – 7:00 PM · 24/7 Emergency Support', 'maxmi' ); ?></span></div>
			</div>
		</div>

		<!-- form (sends via WhatsApp — works without email setup) -->
		<form class="maxmi-form" id="maxmiContactForm" data-reveal data-wa="<?php echo esc_attr( $wa ); ?>">
			<h3 class="maxmi-h3"><?php esc_html_e( 'Send Us a Message', 'maxmi' ); ?></h3>
			<p style="color:var(--gray);margin:0 0 18px;font-size:14px"><?php esc_html_e( 'Fill the form and we will get back to you shortly.', 'maxmi' ); ?></p>
			<div class="row">
				<div class="maxmi-field"><label><?php esc_html_e( 'Full Name', 'maxmi' ); ?></label><input type="text" name="name" required placeholder="<?php esc_attr_e( 'Your name', 'maxmi' ); ?>"></div>
				<div class="maxmi-field"><label><?php esc_html_e( 'Phone', 'maxmi' ); ?></label><input type="tel" name="phone" required placeholder="<?php esc_attr_e( 'Your phone', 'maxmi' ); ?>"></div>
			</div>
			<div class="maxmi-field"><label><?php esc_html_e( 'Email', 'maxmi' ); ?></label><input type="email" name="email" placeholder="<?php esc_attr_e( 'Your email (optional)', 'maxmi' ); ?>"></div>
			<div class="maxmi-field"><label><?php esc_html_e( 'Requirement', 'maxmi' ); ?></label>
				<select name="subject">
					<option><?php esc_html_e( 'Fire Extinguishers', 'maxmi' ); ?></option>
					<option><?php esc_html_e( 'Fire Alarm System', 'maxmi' ); ?></option>
					<option><?php esc_html_e( 'Hydrant / Sprinkler System', 'maxmi' ); ?></option>
					<option><?php esc_html_e( 'AMC / Maintenance', 'maxmi' ); ?></option>
					<option><?php esc_html_e( 'Site Inspection', 'maxmi' ); ?></option>
					<option><?php esc_html_e( 'Other', 'maxmi' ); ?></option>
				</select>
			</div>
			<div class="maxmi-field"><label><?php esc_html_e( 'Message', 'maxmi' ); ?></label><textarea name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your requirement…', 'maxmi' ); ?>"></textarea></div>
			<button type="submit" class="maxmi-btn maxmi-btn--primary" style="width:100%;justify-content:center">
				<?php esc_html_e( 'Send on WhatsApp', 'maxmi' ); ?>
				<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
			</button>
			<p style="text-align:center;margin:14px 0 0;font-size:13px;color:var(--gray)">
				<?php esc_html_e( 'or call us directly at', 'maxmi' ); ?> <a href="tel:<?php echo esc_attr( maxmi_tel( $phone ) ); ?>" style="color:var(--red);font-weight:700"><?php echo esc_html( $phone ); ?></a>
			</p>
		</form>
	</div>

	<div class="maxmi-container" style="margin-top:34px">
		<div class="maxmi-map" data-reveal>
			<iframe title="MAX MI location map" loading="lazy" src="https://www.google.com/maps?q=<?php echo $map_q; ?>&output=embed"></iframe>
		</div>
	</div>
</section>

<script>
(function(){
	var f = document.getElementById('maxmiContactForm');
	if(!f) return;
	f.addEventListener('submit', function(e){
		e.preventDefault();
		var wa = f.getAttribute('data-wa') || '';
		var d = new FormData(f);
		var msg = 'New enquiry from website%0A%0A'
			+ 'Name: ' + encodeURIComponent(d.get('name')||'') + '%0A'
			+ 'Phone: ' + encodeURIComponent(d.get('phone')||'') + '%0A'
			+ 'Email: ' + encodeURIComponent(d.get('email')||'') + '%0A'
			+ 'Requirement: ' + encodeURIComponent(d.get('subject')||'') + '%0A'
			+ 'Message: ' + encodeURIComponent(d.get('message')||'');
		window.open('https://wa.me/' + wa + '?text=' + msg, '_blank');
	});
})();
</script>
<?php
get_footer();
