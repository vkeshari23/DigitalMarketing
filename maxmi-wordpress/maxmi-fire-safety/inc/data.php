<?php
/**
 * Default content data for MAX MI Fire Safety Solution.
 * Used when no dynamic content (Products CPT) has been added yet,
 * so the site looks complete immediately after activation.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hero banner slides (auto-sliding, text overlaid). Images live in
 * /assets/images/banner/. Only slides whose image file exists are shown.
 */
function maxmi_banner_slides() {
	$dir = get_template_directory() . '/assets/images/banner/';
	$uri = get_template_directory_uri() . '/assets/images/banner/';
	$slides = array(
		array( 'file' => 'slide1.jpg', 'kicker' => 'MAX MI FIRE SAFETY SOLUTION', 'title' => 'Protecting Lives, Securing Every Space', 'sub' => 'Complete, ISI-certified fire protection for homes, offices & industries — backed by expert installation and 24/7 support.' ),
		array( 'file' => 'slide2.jpg', 'kicker' => '24/7 EMERGENCY RESPONSE',       'title' => 'Always Ready When Fire Strikes',      'sub' => 'Trained engineers, genuine equipment and rapid support — because every single second counts.' ),
		array( 'file' => 'slide3.jpg', 'kicker' => 'PRODUCTS & SYSTEMS',            'title' => 'Everything Fire-Safe, Under One Roof', 'sub' => 'Extinguishers, alarms, hydrants, sprinklers, hose reels & accessories — supplied, installed & maintained.' ),
	);
	$out = array();
	foreach ( $slides as $s ) {
		if ( file_exists( $dir . $s['file'] ) ) {
			$s['url'] = $uri . $s['file'];
			$out[]    = $s;
		}
	}
	return $out;
}

/** Bundled logo image URL (used when no custom logo is set). */
function maxmi_logo_url() {
	if ( file_exists( get_template_directory() . '/assets/images/logo.png' ) ) {
		return get_template_directory_uri() . '/assets/images/logo.png';
	}
	return '';
}

/**
 * Default products shown on Home & Products page.
 * `svg` maps to inc/svg.php; `img` (optional) maps to /assets/images/products/<img>.(webp|png|jpg)
 * and is shown instead of the SVG when the file exists.
 */
function maxmi_default_products() {
	return array(
		array( 'title' => 'ABC Fire Extinguisher',   'cat' => 'Extinguishers', 'svg' => 'extinguisher_abc', 'img' => 'abc-extinguisher', 'desc' => 'Multipurpose ABC dry powder extinguisher for Class A, B & C fires. ISI certified.' ),
		array( 'title' => 'CO2 Fire Extinguisher',   'cat' => 'Extinguishers', 'svg' => 'extinguisher_co2', 'img' => '',                'desc' => 'Clean CO₂ extinguisher ideal for electrical & flammable liquid fires.' ),
		array( 'title' => 'Foam Fire Extinguisher',  'cat' => 'Extinguishers', 'svg' => 'extinguisher_foam','img' => '',                'desc' => 'Mechanical foam (AFFF) extinguisher for Class A & B fire hazards.' ),
		array( 'title' => 'Fire Alarm System',       'cat' => 'Detection',     'svg' => 'alarm_panel',      'img' => 'fire-alarm',      'desc' => 'Addressable & conventional fire alarm control panels for every building.' ),
		array( 'title' => 'Smoke / Heat Detector',   'cat' => 'Detection',     'svg' => 'smoke_detector',   'img' => 'smoke-detector',  'desc' => 'Photoelectric smoke & heat detectors for early and reliable fire detection.' ),
		array( 'title' => 'Fire Hydrant System',     'cat' => 'Systems',       'svg' => 'hydrant',          'img' => 'hydrant',         'desc' => 'Complete internal & external hydrant systems with landing valves.' ),
		array( 'title' => 'Sprinkler System',        'cat' => 'Systems',       'svg' => 'sprinkler',        'img' => 'sprinkler',       'desc' => 'Automatic sprinkler systems designed as per NBC & IS standards.' ),
		array( 'title' => 'Fire Hose Reel',          'cat' => 'Systems',       'svg' => 'hose_reel',        'img' => 'hose-reel',       'desc' => 'RRL & rubber-lined fire hoses and swinging hose reel drums.' ),
		array( 'title' => 'Fire Ball Extinguisher',  'cat' => 'Extinguishers', 'svg' => 'fire_ball',        'img' => 'fire-ball',       'desc' => 'Self-activating fire extinguisher ball — throws & auto-bursts on fire.' ),
		array( 'title' => 'Fire Safety Accessories', 'cat' => 'Accessories',   'svg' => 'accessories',      'img' => 'accessories',     'desc' => 'Manual call points, hooters, beacons, signage, stands & spare parts.' ),
	);
}

/** Return product image URL for a slug if the file exists, else empty string. */
function maxmi_product_img_url( $slug ) {
	if ( ! $slug ) {
		return '';
	}
	$dir = get_template_directory() . '/assets/images/products/';
	$uri = get_template_directory_uri() . '/assets/images/products/';
	foreach ( array( 'webp', 'png', 'jpg', 'jpeg' ) as $ext ) {
		if ( file_exists( $dir . $slug . '.' . $ext ) ) {
			return $uri . $slug . '.' . $ext;
		}
	}
	return '';
}

/** Home "Why choose us" feature strip. */
function maxmi_features() {
	return array(
		array( 'icon' => 'certified',  'title' => 'ISO Certified Products', 'text' => 'High quality & ISO approved' ),
		array( 'icon' => 'install',    'title' => 'Expert Installation',    'text' => 'Professional team with expertise' ),
		array( 'icon' => 'amc',        'title' => 'Annual Maintenance (AMC)','text' => 'Keep your systems always ready' ),
		array( 'icon' => 'support',    'title' => '24/7 Emergency Support',  'text' => 'Always here when you need us' ),
		array( 'icon' => 'delivery',   'title' => 'Fast Delivery',          'text' => 'On-time delivery across India' ),
		array( 'icon' => 'engineer',   'title' => 'Professional Engineers', 'text' => 'Certified & experienced engineers' ),
	);
}

/** Stat counters. */
function maxmi_stats() {
	return array(
		array( 'num' => 1000, 'suffix' => '+', 'label' => 'Happy Clients' ),
		array( 'num' => 15,   'suffix' => '+', 'label' => 'Years Experience' ),
		array( 'num' => 5000, 'suffix' => '+', 'label' => 'Products Delivered' ),
		array( 'num' => 24,   'suffix' => '/7','label' => 'Support' ),
	);
}

/** Services list (Home + Services page). */
function maxmi_services() {
	return array(
		array( 'icon' => 'design',   'title' => 'Fire System Design & Consultation', 'text' => 'End-to-end design of fire protection systems as per NBC, IS & local fire norms — drawings, BOQ and approvals.' ),
		array( 'icon' => 'supply',   'title' => 'Supply of Fire Safety Equipment',   'text' => 'Genuine, ISI-certified extinguishers, hydrants, alarms, sprinklers and accessories from trusted brands.' ),
		array( 'icon' => 'install',  'title' => 'Installation & Commissioning',      'text' => 'Professional installation, testing and commissioning by certified engineers & skilled technicians.' ),
		array( 'icon' => 'amc',      'title' => 'Annual Maintenance Contract (AMC)', 'text' => 'Scheduled inspection, refilling & servicing so your systems always stay compliant and ready.' ),
		array( 'icon' => 'audit',    'title' => 'Fire Safety Audit & Inspection',    'text' => 'Detailed risk assessment, gap analysis and reporting to make your premises fully fire-safe.' ),
		array( 'icon' => 'support',  'title' => '24/7 Emergency Support',            'text' => 'Round-the-clock support, quick response and priority service whenever you need us most.' ),
	);
}

/** Industries served. */
function maxmi_industries() {
	return array(
		array( 'icon' => 'home',      'label' => 'Residential Buildings' ),
		array( 'icon' => 'building',  'label' => 'Commercial Complexes' ),
		array( 'icon' => 'factory',   'label' => 'Industrial Plants' ),
		array( 'icon' => 'hospital',  'label' => 'Hospitals' ),
		array( 'icon' => 'school',    'label' => 'Schools & Colleges' ),
		array( 'icon' => 'hotel',     'label' => 'Hotels & Hospitality' ),
		array( 'icon' => 'itpark',    'label' => 'IT Parks & Offices' ),
		array( 'icon' => 'warehouse', 'label' => 'Warehouses & Logistics' ),
	);
}

/** "Our Process" steps. */
function maxmi_process() {
	return array(
		array( 'no' => '01', 'title' => 'Site Inspection', 'text' => 'We assess your requirements' ),
		array( 'no' => '02', 'title' => 'Planning',        'text' => 'Customized solution design' ),
		array( 'no' => '03', 'title' => 'Installation',    'text' => 'Professional installation' ),
		array( 'no' => '04', 'title' => 'Maintenance',     'text' => 'Regular checks & support' ),
	);
}

/** Why choose us bullet list. */
function maxmi_why() {
	return array(
		'ISO Certified & Approved Products',
		'Experienced & Skilled Engineers',
		'Customized Fire Safety Solutions',
		'Timely Delivery & Installation',
		'AMC & 24/7 Support',
		'Affordable & Transparent Pricing',
	);
}

/** Testimonials. */
function maxmi_testimonials() {
	return array(
		array( 'text' => 'Excellent service and high-quality products. MAX MI Fire Safety Solution has been our trusted partner for years.', 'name' => 'Rajesh Kumar', 'role' => 'Facility Manager, IT Park' ),
		array( 'text' => 'Professional team, on-time installation and reliable AMC support. Highly recommended for any commercial project.', 'name' => 'Anita Sharma', 'role' => 'Admin Head, Hospital' ),
		array( 'text' => 'From site inspection to commissioning everything was smooth. Genuine ISI certified equipment at fair prices.', 'name' => 'Mohit Verma', 'role' => 'Project Engineer, Factory' ),
		array( 'text' => 'They installed our complete hydrant and sprinkler system on time and within budget. Very professional work.', 'name' => 'Suresh Patel', 'role' => 'Builder, Residential Project' ),
		array( 'text' => 'Quick response during our fire audit and the team fixed all the gaps. Our premises are now fully compliant.', 'name' => 'Priya Nair', 'role' => 'Safety Officer, Manufacturing' ),
		array( 'text' => 'Best pricing for genuine ISI extinguishers in the region. Delivery was fast and the staff is very supportive.', 'name' => 'Amit Singh', 'role' => 'Purchase Manager, Warehouse' ),
		array( 'text' => 'We rely on their AMC service for all our branches. Never had a single issue in three years. Truly dependable.', 'name' => 'Deepak Sharma', 'role' => 'Operations Head, Retail Chain' ),
		array( 'text' => 'Great experience from start to finish. Their engineers explained everything clearly and the work quality is top-notch.', 'name' => 'Neha Gupta', 'role' => 'Facility Incharge, School' ),
	);
}

/**
 * Brands / clients we deal with.
 * `logo` = filename (without extension) placed in /assets/images/brands/.
 * If the logo file exists it is shown, otherwise the name text is shown.
 */
function maxmi_brands() {
	return array(
		array( 'name' => 'Promivac Engineers',   'logo' => 'promivac' ),
		array( 'name' => 'LCE',                  'logo' => 'lce' ),
		array( 'name' => 'Brij Packaging',       'logo' => 'brij-packaging' ),
		array( 'name' => 'The Salt Cafe',        'logo' => 'salt-cafe' ),
		array( 'name' => 'College',              'logo' => 'college' ),
		array( 'name' => 'Sagar Motors',         'logo' => 'sagar-motors' ),
		array( 'name' => 'MASSH',                'logo' => 'massh' ),
		array( 'name' => 'Bonnie Products',      'logo' => 'bonnie-products' ),
		array( 'name' => 'Radiant',              'logo' => 'radiant' ),
		array( 'name' => 'Radiant Polymers',     'logo' => 'radiant-polymers' ),
		array( 'name' => 'TCCI',                 'logo' => 'tcci' ),
		array( 'name' => 'Aqua Viva',            'logo' => 'aqua-viva' ),
		array( 'name' => 'Elisa',                'logo' => 'elisa' ),
		array( 'name' => 'Blackboard',           'logo' => 'blackboard' ),
		array( 'name' => 'Himalaya International','logo' => 'himalaya-international' ),
		array( 'name' => 'Markup Designs',       'logo' => 'markup-designs' ),
		array( 'name' => 'Mindworm Industries',  'logo' => 'mindworm-industries' ),
		array( 'name' => 'BLR Logistiks',        'logo' => 'blr-logistiks' ),
		array( 'name' => 'Snow Way Logistics',   'logo' => 'snow-way-logistics' ),
		array( 'name' => 'Green PC World',       'logo' => 'green-pc-world' ),
	);
}

/** Return logo <img> URL for a brand slug if the file exists, else empty string. */
function maxmi_brand_logo_url( $slug ) {
	$dir = get_template_directory() . '/assets/images/brands/';
	$uri = get_template_directory_uri() . '/assets/images/brands/';
	foreach ( array( 'png', 'jpg', 'jpeg', 'webp', 'svg' ) as $ext ) {
		if ( file_exists( $dir . $slug . '.' . $ext ) ) {
			return $uri . $slug . '.' . $ext;
		}
	}
	return '';
}

/**
 * Build the brand list for the "Brands We Deal With" slider.
 * If logo image files exist in /assets/images/brands/, use them (folder-driven,
 * sorted by filename). A leading "01-" numeric prefix controls order and is
 * stripped from the display name. Falls back to the text list above if empty.
 */
function maxmi_brand_items() {
	$dir  = get_template_directory() . '/assets/images/brands/';
	$uri  = get_template_directory_uri() . '/assets/images/brands/';
	$exts = array( 'png', 'jpg', 'jpeg', 'webp', 'svg', 'gif' );
	$items = array();

	if ( is_dir( $dir ) ) {
		$files = array();
		foreach ( scandir( $dir ) as $f ) {
			if ( in_array( strtolower( pathinfo( $f, PATHINFO_EXTENSION ) ), $exts, true ) ) {
				$files[] = $f;
			}
		}
		natsort( $files );
		foreach ( $files as $f ) {
			$base = pathinfo( $f, PATHINFO_FILENAME );
			$name = preg_replace( '/^\d+[-_]/', '', $base );
			$name = ucwords( str_replace( array( '-', '_' ), ' ', $name ) );
			$items[] = array( 'name' => $name, 'logo_url' => $uri . $f );
		}
	}

	if ( empty( $items ) ) {
		foreach ( maxmi_brands() as $b ) {
			$items[] = array( 'name' => $b['name'], 'logo_url' => '' );
		}
	}
	return $items;
}
