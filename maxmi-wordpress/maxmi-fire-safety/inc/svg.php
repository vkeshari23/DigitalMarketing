<?php
/**
 * Inline SVG illustrations & icons for MAX MI Fire Safety Solution.
 * Self-generated fire-safety graphics (no external images required).
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Product illustration by key. Returns an <svg> string.
 * Flat modern style using the red/white palette.
 */
function maxmi_product_svg( $key ) {
	$open = '<svg class="maxmi-prod-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">';
	$close = '</svg>';
	$g = ''; // inner markup

	switch ( $key ) {
		case 'extinguisher_abc':
		case 'extinguisher_co2':
		case 'extinguisher_foam':
			$body = ( 'extinguisher_co2' === $key ) ? '#222' : '#e11d1d';
			$label = ( 'extinguisher_foam' === $key ) ? 'FOAM' : ( ( 'extinguisher_co2' === $key ) ? 'CO2' : 'ABC' );
			$g = '
			<rect x="70" y="55" width="60" height="105" rx="18" fill="' . $body . '"/>
			<rect x="70" y="80" width="60" height="34" rx="4" fill="#fff"/>
			<text x="100" y="103" text-anchor="middle" font-family="Poppins,Arial" font-weight="800" font-size="16" fill="' . $body . '">' . $label . '</text>
			<rect x="90" y="38" width="20" height="20" rx="4" fill="#333"/>
			<rect x="84" y="30" width="32" height="12" rx="4" fill="#111"/>
			<rect x="112" y="24" width="30" height="8" rx="4" fill="#111"/>
			<path d="M124 34 q22 6 20 42 q-2 16 -18 20" fill="none" stroke="#111" stroke-width="6" stroke-linecap="round"/>
			<rect x="66" y="158" width="68" height="10" rx="5" fill="#222"/>';
			break;

		case 'alarm_panel':
			$g = '
			<rect x="52" y="40" width="96" height="120" rx="10" fill="#e11d1d"/>
			<rect x="64" y="54" width="72" height="40" rx="6" fill="#fff"/>
			<circle cx="80" cy="74" r="7" fill="#e11d1d"/>
			<rect x="94" y="66" width="34" height="6" rx="3" fill="#f4b400"/>
			<rect x="94" y="78" width="26" height="6" rx="3" fill="#ddd"/>
			<circle cx="76" cy="118" r="8" fill="#f4b400"/>
			<circle cx="100" cy="118" r="8" fill="#22c55e"/>
			<circle cx="124" cy="118" r="8" fill="#fff"/>
			<rect x="70" y="138" width="60" height="8" rx="4" fill="#fff"/>';
			break;

		case 'smoke_detector':
			$g = '
			<ellipse cx="100" cy="70" rx="70" ry="16" fill="#eee"/>
			<path d="M30 70 a70 30 0 0 0 140 0" fill="#fff" stroke="#ddd" stroke-width="2"/>
			<ellipse cx="100" cy="70" rx="46" ry="10" fill="#f3f4f6"/>
			<g stroke="#c9ccd1" stroke-width="4">
			<line x1="70" y1="78" x2="130" y2="78"/><line x1="66" y1="86" x2="134" y2="86"/><line x1="70" y1="94" x2="130" y2="94"/></g>
			<circle cx="100" cy="70" r="8" fill="#e11d1d"/>
			<circle cx="128" cy="66" r="4" fill="#22c55e"/>';
			break;

		case 'hydrant':
			$g = '
			<rect x="86" y="60" width="28" height="70" rx="8" fill="#e11d1d"/>
			<circle cx="100" cy="52" r="16" fill="#222"/>
			<rect x="96" y="30" width="8" height="24" rx="4" fill="#333"/>
			<rect x="55" y="82" width="34" height="22" rx="6" fill="#c9a227"/>
			<rect x="111" y="82" width="34" height="22" rx="6" fill="#c9a227"/>
			<circle cx="52" cy="93" r="10" fill="#e11d1d"/>
			<rect x="74" y="130" width="52" height="14" rx="4" fill="#222"/>
			<rect x="66" y="144" width="68" height="12" rx="4" fill="#333"/>';
			break;

		case 'sprinkler':
			$g = '
			<rect x="92" y="34" width="16" height="34" rx="4" fill="#bbb"/>
			<circle cx="100" cy="78" r="20" fill="#d1d5db"/>
			<circle cx="100" cy="78" r="9" fill="#e11d1d"/>
			<path d="M78 96 q22 26 44 0" fill="none" stroke="#9ca3af" stroke-width="6"/>
			<g fill="#93c5fd"><circle cx="72" cy="120" r="5"/><circle cx="90" cy="134" r="5"/><circle cx="110" cy="134" r="5"/><circle cx="128" cy="120" r="5"/><circle cx="100" cy="150" r="5"/></g>';
			break;

		case 'hose_reel':
			$g = '
			<circle cx="100" cy="100" r="62" fill="#e11d1d"/>
			<circle cx="100" cy="100" r="44" fill="#fff"/>
			<circle cx="100" cy="100" r="30" fill="#e11d1d"/>
			<circle cx="100" cy="100" r="10" fill="#fff"/>
			<rect x="150" y="92" width="26" height="16" rx="4" fill="#c9a227"/>
			<circle cx="100" cy="100" r="52" fill="none" stroke="#b91c1c" stroke-width="4" stroke-dasharray="6 10"/>';
			break;

		case 'fire_ball':
			$g = '
			<circle cx="100" cy="86" r="46" fill="#ff6a00"/>
			<circle cx="100" cy="86" r="46" fill="url(#fbg)"/>
			<defs><radialGradient id="fbg" cx="38%" cy="35%"><stop offset="0%" stop-color="#ffd27a"/><stop offset="60%" stop-color="#ff7a00"/><stop offset="100%" stop-color="#e11d1d"/></radialGradient></defs>
			<path d="M70 86 q30 -22 60 0" fill="none" stroke="#fff" stroke-width="4" opacity=".7"/>
			<path d="M60 150 q40 -18 80 0 v6 q-40 -14 -80 0 z" fill="#222"/>
			<rect x="70" y="132" width="60" height="14" rx="4" fill="#333"/>';
			break;

		case 'accessories':
			$g = '
			<rect x="40" y="60" width="52" height="52" rx="8" fill="#e11d1d"/>
			<path d="M66 72 l10 18 h-20 z" fill="#fff"/>
			<circle cx="66" cy="98" r="4" fill="#fff"/>
			<circle cx="140" cy="70" r="24" fill="#f4b400"/>
			<path d="M140 58 v14 M140 78 v2" stroke="#111" stroke-width="4" stroke-linecap="round"/>
			<rect x="108" y="118" width="64" height="30" rx="6" fill="#222"/>
			<text x="140" y="138" text-anchor="middle" font-family="Poppins,Arial" font-weight="800" font-size="13" fill="#fff">EXIT</text>';
			break;

		default:
			$g = '<circle cx="100" cy="100" r="60" fill="#e11d1d"/><path d="M100 60 q26 26 0 60 q-26 -34 0 -60z" fill="#f4b400"/>';
	}

	return $open . $g . $close;
}

/**
 * Simple line/solid icons for features, services, industries.
 */
function maxmi_icon( $key ) {
	$s = '<svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
	$e = '</svg>';
	$paths = array(
		'certified' => '<path d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8z"/>',
		'install'   => '<path d="M14.7 6.3a4 4 0 01-5.4 5.4L4 17v3h3l5.3-5.3a4 4 0 015.4-5.4z"/>',
		'amc'       => '<circle cx="12" cy="12" r="3.5"/><path d="M19 12l1.5-1-1-2.3-1.8.5a6 6 0 00-1.7-1L15.5 6h-2.5l-.5 1.8a6 6 0 00-1.7 1L9 8.7l-2 1.3 1 1.8a6 6 0 000 2l-1 1L8 17l1.8-.5a6 6 0 001.7 1L12 19h2.5"/>',
		'support'   => '<path d="M4 13v-1a8 8 0 0116 0v1"/><rect x="3" y="13" width="4" height="6" rx="1"/><rect x="17" y="13" width="4" height="6" rx="1"/><path d="M21 19a4 4 0 01-4 3h-3"/>',
		'delivery'  => '<rect x="1" y="6" width="13" height="10" rx="1"/><path d="M14 9h4l3 3v4h-7z"/><circle cx="6" cy="18" r="2"/><circle cx="17" cy="18" r="2"/>',
		'engineer'  => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0116 0"/><path d="M9 8h6"/>',
		'design'    => '<path d="M12 2v4M12 6l7 4v8H5v-8z"/><path d="M9 18v-4h6v4"/>',
		'supply'    => '<path d="M3 7l9-4 9 4-9 4z"/><path d="M3 7v10l9 4 9-4V7"/><path d="M12 11v10"/>',
		'audit'     => '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h5"/><path d="M14 16l2 2 3-3"/>',
		'home'      => '<path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>',
		'building'  => '<rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h.01M12 7h.01M16 7h.01M8 11h.01M12 11h.01M16 11h.01M10 21v-4h4v4"/>',
		'factory'   => '<path d="M3 21V10l6 4V10l6 4V7h6v14z"/><path d="M7 17h.01M12 17h.01M17 17h.01"/>',
		'hospital'  => '<rect x="4" y="4" width="16" height="16" rx="2"/><path d="M12 8v8M8 12h8"/>',
		'school'    => '<path d="M12 3l10 5-10 5L2 8z"/><path d="M6 10v5c0 1 3 3 6 3s6-2 6-3v-5"/>',
		'hotel'     => '<rect x="4" y="8" width="16" height="12" rx="1"/><path d="M4 8V5h16v3"/><path d="M8 12h.01M12 12h.01M16 12h.01M8 16h.01M12 16h.01M16 16h.01"/>',
		'itpark'    => '<rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/>',
		'warehouse' => '<path d="M3 21V9l9-5 9 5v12z"/><path d="M7 21v-8h10v8"/><path d="M7 15h10"/>',
	);
	$p = isset( $paths[ $key ] ) ? $paths[ $key ] : '<circle cx="12" cy="12" r="9"/>';
	return $s . $p . $e;
}

/**
 * Accessory illustrations by type key. Returns an <svg> string.
 */
function maxmi_accessory_svg( $key ) {
	$open  = '<svg class="maxmi-prod-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">';
	$close = '</svg>';
	$g = '';
	switch ( $key ) {
		case 'pipe':
			$g = '<rect x="26" y="86" width="148" height="30" rx="6" fill="#9aa3ad"/><rect x="24" y="78" width="12" height="46" rx="3" fill="#6b7280"/><rect x="164" y="78" width="12" height="46" rx="3" fill="#6b7280"/><ellipse cx="30" cy="101" rx="6" ry="15" fill="#4b5563"/>';
			break;
		case 'angle':
			$g = '<path d="M64 44 h22 v92 h56 v22 h-78 z" fill="#9aa3ad" stroke="#6b7280" stroke-width="3"/><circle cx="75" cy="120" r="4" fill="#4b5563"/><circle cx="118" cy="147" r="4" fill="#4b5563"/>';
			break;
		case 'valve':
			$g = '<rect x="70" y="92" width="60" height="42" rx="6" fill="#e11d1d"/><rect x="52" y="100" width="20" height="26" rx="3" fill="#c9a227"/><rect x="128" y="100" width="20" height="26" rx="3" fill="#c9a227"/><rect x="92" y="52" width="16" height="42" fill="#6b7280"/><circle cx="100" cy="48" r="22" fill="none" stroke="#333" stroke-width="7"/>';
			break;
		case 'ball_valve':
			$g = '<rect x="52" y="94" width="96" height="26" rx="6" fill="#c9a227"/><circle cx="100" cy="107" r="24" fill="#e11d1d"/><rect x="120" y="46" width="12" height="52" rx="5" fill="#333" transform="rotate(38 126 72)"/>';
			break;
		case 'gauge':
			$g = '<circle cx="100" cy="96" r="46" fill="#fff" stroke="#333" stroke-width="7"/><path d="M100 96 L128 74" stroke="#e11d1d" stroke-width="5" stroke-linecap="round"/><circle cx="100" cy="96" r="7" fill="#333"/><g fill="#9aa3ad"><circle cx="70" cy="96" r="3"/><circle cx="130" cy="96" r="3"/><circle cx="100" cy="66" r="3"/></g><rect x="93" y="142" width="14" height="22" fill="#6b7280"/>';
			break;
		case 'switch':
			$g = '<rect x="58" y="64" width="84" height="74" rx="8" fill="#333"/><rect x="70" y="76" width="60" height="30" rx="4" fill="#c9ccd1"/><circle cx="100" cy="120" r="8" fill="#e11d1d"/><rect x="93" y="138" width="14" height="24" fill="#6b7280"/>';
			break;
		case 'vessel':
			$g = '<rect x="72" y="52" width="56" height="108" rx="28" fill="#e11d1d"/><ellipse cx="100" cy="54" rx="28" ry="10" fill="#ff6a3c"/><rect x="92" y="32" width="16" height="24" fill="#6b7280"/><rect x="84" y="150" width="32" height="10" rx="3" fill="#4b5563"/>';
			break;
		case 'hose':
			$g = '<path d="M44 78 q22 -22 44 0 t44 0 t24 6" fill="none" stroke="#e11d1d" stroke-width="15" stroke-linecap="round"/><path d="M44 112 q22 -22 44 0 t44 0 t24 6" fill="none" stroke="#c0392b" stroke-width="15" stroke-linecap="round"/><rect x="150" y="120" width="18" height="16" rx="3" fill="#c9a227"/>';
			break;
		case 'horn':
			$g = '<path d="M62 82 L128 60 L128 140 L62 118 Z" fill="#333"/><rect x="48" y="90" width="16" height="22" fill="#6b7280"/><ellipse cx="128" cy="100" rx="9" ry="40" fill="#111"/>';
			break;
		case 'trolley':
			$g = '<rect x="80" y="44" width="42" height="92" rx="20" fill="#e11d1d"/><ellipse cx="101" cy="46" rx="21" ry="8" fill="#ff6a3c"/><rect x="70" y="136" width="62" height="10" rx="3" fill="#333"/><circle cx="82" cy="156" r="12" fill="#333"/><circle cx="120" cy="156" r="12" fill="#333"/><rect x="120" y="40" width="10" height="82" rx="4" fill="#6b7280"/>';
			break;
		case 'clamp':
			$g = '<path d="M72 58 h58 v15 h-44 v54 h44 v15 h-58 z" fill="#6b7280"/><circle cx="116" cy="65" r="5" fill="#333"/><circle cx="116" cy="135" r="5" fill="#333"/>';
			break;
		case 'bucket':
			$g = '<path d="M68 82 L132 82 L123 152 L77 152 Z" fill="#e11d1d"/><ellipse cx="100" cy="82" rx="32" ry="9" fill="#ff6a3c"/><path d="M72 84 q28 -28 56 0" fill="none" stroke="#333" stroke-width="4"/><text x="100" y="126" text-anchor="middle" font-family="Poppins,Arial" font-weight="800" font-size="15" fill="#fff">FIRE</text>';
			break;
		case 'axe':
			$g = '<rect x="95" y="48" width="11" height="104" rx="5" fill="#8b5a2b"/><path d="M95 54 q42 -12 46 26 q-26 5 -46 -6 z" fill="#c9ccd1" stroke="#6b7280" stroke-width="2"/><path d="M95 60 h-22" stroke="#c9ccd1" stroke-width="8" stroke-linecap="round"/>';
			break;
		case 'beater':
			$g = '<rect x="95" y="72" width="11" height="86" rx="5" fill="#333"/><rect x="66" y="44" width="70" height="42" rx="6" fill="#111"/><g stroke="#4b5563" stroke-width="3"><line x1="74" y1="52" x2="128" y2="52"/><line x1="74" y1="65" x2="128" y2="65"/><line x1="74" y1="78" x2="128" y2="78"/></g>';
			break;
		case 'hook':
			$g = '<rect x="95" y="44" width="11" height="72" rx="4" fill="#6b7280"/><path d="M100 110 q34 8 28 -34" fill="none" stroke="#6b7280" stroke-width="11" stroke-linecap="round"/><rect x="90" y="40" width="21" height="9" rx="4" fill="#4b5563"/>';
			break;
		case 'coupling':
			$g = '<circle cx="100" cy="100" r="44" fill="none" stroke="#c9a227" stroke-width="16"/><circle cx="100" cy="100" r="24" fill="none" stroke="#9aa3ad" stroke-width="9"/><rect x="52" y="94" width="18" height="12" rx="3" fill="#c9a227"/><rect x="130" y="94" width="18" height="12" rx="3" fill="#c9a227"/>';
			break;
		case 'plate':
			$g = '<circle cx="100" cy="100" r="48" fill="#e11d1d"/><circle cx="100" cy="100" r="30" fill="#fff"/><circle cx="100" cy="100" r="12" fill="#c9ccd1"/>';
			break;
		case 'pin':
			$g = '<circle cx="100" cy="60" r="20" fill="none" stroke="#c9a227" stroke-width="9"/><rect x="95" y="78" width="10" height="82" rx="5" fill="#c9a227"/>';
			break;
		case 'handle':
			$g = '<rect x="58" y="96" width="84" height="18" rx="9" fill="#e11d1d"/><rect x="52" y="88" width="16" height="34" rx="4" fill="#333"/><rect x="132" y="92" width="14" height="26" rx="4" fill="#6b7280"/>';
			break;
		case 'stand':
			$g = '<rect x="86" y="70" width="28" height="64" rx="13" fill="#e11d1d"/><rect x="94" y="52" width="12" height="20" rx="4" fill="#333"/><rect x="66" y="134" width="68" height="9" rx="4" fill="#c9ccd1"/><path d="M78 143 L70 164 M122 143 L130 164" stroke="#9aa3ad" stroke-width="6" stroke-linecap="round"/>';
			break;
		case 'battery':
			$g = '<rect x="60" y="72" width="80" height="62" rx="6" fill="#333"/><rect x="72" y="62" width="16" height="12" rx="2" fill="#e11d1d"/><rect x="112" y="62" width="16" height="12" rx="2" fill="#4b5563"/><text x="82" y="112" text-anchor="middle" font-family="Arial" font-weight="800" font-size="24" fill="#e11d1d">+</text><text x="120" y="110" text-anchor="middle" font-family="Arial" font-weight="800" font-size="24" fill="#9aa3ad">-</text>';
			break;
		case 'connection':
			$g = '<rect x="56" y="90" width="88" height="24" rx="4" fill="#c9a227"/><rect x="50" y="76" width="12" height="52" rx="3" fill="#6b7280"/><rect x="138" y="76" width="12" height="52" rx="3" fill="#6b7280"/><g fill="#4b5563"><circle cx="56" cy="84" r="3"/><circle cx="56" cy="120" r="3"/><circle cx="144" cy="84" r="3"/><circle cx="144" cy="120" r="3"/></g>';
			break;
		default:
			$g = '<rect x="60" y="70" width="80" height="60" rx="10" fill="#e11d1d"/><path d="M100 80 q18 18 0 40 q-18 -22 0 -40z" fill="#f4b400"/>';
	}
	return $open . $g . $close;
}

/** Decorative flame used across the site. */
function maxmi_flame( $class = '' ) {
	return '<svg class="' . esc_attr( $class ) . '" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path fill="currentColor" d="M12 2c1 3 4 4 4 8a4 4 0 01-8 0c0-1 .3-1.8.8-2.5C9 9 10 8 10 6c1 .8 2 2 2 3 .8-1 1-2 0-7z"/></svg>';
}

/**
 * The self-generated hero banner illustration (buildings + firefighters + fire + products).
 */
function maxmi_hero_illustration() {
	ob_start();
	?>
	<svg class="maxmi-hero-art" viewBox="0 0 560 460" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Fire safety illustration">
		<defs>
			<linearGradient id="sky" x1="0" y1="0" x2="1" y2="1">
				<stop offset="0" stop-color="#fff5f2"/><stop offset="1" stop-color="#ffe3d8"/>
			</linearGradient>
			<linearGradient id="fire" x1="0" y1="1" x2="0" y2="0">
				<stop offset="0" stop-color="#e11d1d"/><stop offset="0.5" stop-color="#ff6a00"/><stop offset="1" stop-color="#ffd166"/>
			</linearGradient>
			<linearGradient id="glass" x1="0" y1="0" x2="1" y2="1">
				<stop offset="0" stop-color="#dbeafe"/><stop offset="1" stop-color="#bfdbfe"/>
			</linearGradient>
		</defs>

		<rect x="0" y="0" width="560" height="460" rx="24" fill="url(#sky)"/>

		<!-- building -->
		<rect x="40" y="70" width="230" height="300" rx="6" fill="url(#glass)"/>
		<g fill="#93c5fd" opacity="0.9">
			<rect x="60" y="90" width="40" height="30"/><rect x="112" y="90" width="40" height="30"/><rect x="164" y="90" width="40" height="30"/><rect x="216" y="90" width="34" height="30"/>
			<rect x="60" y="132" width="40" height="30"/><rect x="112" y="132" width="40" height="30"/><rect x="164" y="132" width="40" height="30"/><rect x="216" y="132" width="34" height="30"/>
			<rect x="60" y="174" width="40" height="30"/><rect x="112" y="174" width="40" height="30"/><rect x="164" y="174" width="40" height="30"/><rect x="216" y="174" width="34" height="30"/>
			<rect x="60" y="216" width="40" height="30"/><rect x="112" y="216" width="40" height="30"/><rect x="164" y="216" width="40" height="30"/><rect x="216" y="216" width="34" height="30"/>
		</g>

		<!-- flames behind right -->
		<g class="maxmi-fire">
			<path d="M430 360 q-40 -60 0 -120 q20 40 40 20 q30 60 -10 120z" fill="url(#fire)"/>
			<path d="M470 360 q-30 -50 0 -96 q16 30 30 16 q22 46 -8 92z" fill="#ff8c00" opacity="0.85"/>
			<path d="M500 360 q-24 -40 0 -74 q12 24 24 12 q16 36 -6 70z" fill="#ffd166" opacity="0.85"/>
		</g>

		<!-- ground -->
		<rect x="0" y="360" width="560" height="100" fill="#f3f4f6"/>

		<!-- firefighter (simplified silhouette) -->
		<g transform="translate(300,150)">
			<rect x="-6" y="0" width="52" height="10" rx="5" fill="#111"/>
			<rect x="4" y="-20" width="34" height="26" rx="8" fill="#f4b400"/>
			<rect x="0" y="10" width="42" height="80" rx="14" fill="#222"/>
			<rect x="6" y="30" width="30" height="10" rx="4" fill="#f4b400"/>
			<rect x="6" y="52" width="30" height="8" rx="4" fill="#f4b400"/>
			<rect x="2" y="90" width="16" height="70" rx="7" fill="#111"/>
			<rect x="24" y="90" width="16" height="70" rx="7" fill="#111"/>
			<rect x="-18" y="20" width="16" height="60" rx="7" fill="#222"/>
			<rect x="40" y="20" width="16" height="60" rx="7" fill="#222"/>
		</g>

		<!-- foreground products -->
		<g transform="translate(150,300)">
			<rect x="0" y="0" width="46" height="80" rx="14" fill="#e11d1d"/>
			<rect x="0" y="20" width="46" height="22" rx="3" fill="#fff"/>
			<rect x="14" y="-14" width="18" height="16" rx="4" fill="#333"/>
		</g>
		<g transform="translate(360,320)">
			<circle cx="30" cy="30" r="30" fill="#ff6a00"/>
			<path d="M8 30 q22 -16 44 0" stroke="#fff" stroke-width="3" fill="none" opacity=".6"/>
		</g>
		<g transform="translate(440,300)">
			<circle cx="30" cy="34" r="30" fill="#e11d1d"/>
			<circle cx="30" cy="34" r="20" fill="#fff"/>
			<circle cx="30" cy="34" r="10" fill="#e11d1d"/>
		</g>

		<!-- safety badge -->
		<g transform="translate(470,60)">
			<rect x="0" y="0" width="70" height="86" rx="10" fill="#e11d1d"/>
			<path d="M35 18 q14 14 0 34 q-14 -20 0 -34z" fill="#fff"/>
			<text x="35" y="70" text-anchor="middle" font-family="Poppins,Arial" font-weight="800" font-size="10" fill="#fff">SAFETY</text>
		</g>
	</svg>
	<?php
	return ob_get_clean();
}
