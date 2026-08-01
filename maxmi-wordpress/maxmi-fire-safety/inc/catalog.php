<?php
/**
 * Full product catalog (categories + items) and accessories,
 * sourced from the client's "Product category-wise" document.
 * Each item renders its own detail page.
 *
 * @package maxmi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 6 product categories, each with its sub-items.
 * item keys: name, desc (short), detail (long), img (optional image slug), svg (optional illustration key)
 */
function maxmi_catalog() {
	return array(

		array(
			'slug' => 'fire-extinguisher', 'name' => 'Fire Extinguisher',
			'icon' => 'supply', 'svg' => 'extinguisher_abc', 'img' => 'abc-extinguisher',
			'intro' => 'A complete range of ISO/IS-certified fire extinguishers for every class of fire — from homes and offices to factories and fuel stations. Choose from ABC dry powder, CO₂, foam, clean-agent, modular and trolley-mounted units, all supplied, installed and refilled by MAX MI.',
			'items' => array(
				array( 'name' => 'ABC Type Fire Extinguisher', 'img' => 'abc-extinguisher', 'svg' => 'extinguisher_abc', 'desc' => 'Multipurpose dry-powder extinguisher for Class A, B & C fires.', 'detail' => 'The ABC dry-powder extinguisher is the most versatile fire-fighting device, effective on solid combustibles (wood, paper, cloth), flammable liquids and gas/electrical fires. Ideal for homes, shops, offices, vehicles and industrial areas, it is available in 1–10 kg capacities with a pressure gauge for easy monitoring. Manufactured to IS 15683 / ISO quality standards, with annual refilling and AMC available.' ),
				array( 'name' => 'CO2 Type Fire Extinguisher', 'svg' => 'extinguisher_co2', 'desc' => 'Clean carbon-dioxide extinguisher for electrical & flammable-liquid fires.', 'detail' => 'CO₂ extinguishers leave no residue, making them perfect for server rooms, electrical panels, laboratories and kitchens. The carbon-dioxide gas smothers the fire by displacing oxygen and cools the burning material without damaging sensitive equipment. Available in 2–22.5 kg capacities.' ),
				array( 'name' => 'Modular ABC Powder Type Fire Extinguisher', 'svg' => 'extinguisher_abc', 'desc' => 'Ceiling-mounted automatic modular extinguisher that bursts on fire.', 'detail' => 'Installed above electrical panels, kitchens, DG sets and machinery, the modular extinguisher auto-activates when temperature crosses its threshold — giving 24×7 unmanned protection with no electricity or wiring required. A cost-effective automatic safeguard for high-risk points.' ),
				array( 'name' => 'Mechanical Foam / Water Type Fire Extinguisher', 'svg' => 'extinguisher_foam', 'desc' => 'AFFF foam & water extinguishers for Class A & B fires.', 'detail' => 'The AFFF foam blanket cuts off oxygen and prevents re-ignition of flammable-liquid fires, while water-type units rapidly cool Class A fires. Widely used in warehouses, fuel stations, paint shops and manufacturing units, available in 9 L and larger capacities.' ),
				array( 'name' => 'Clean Agent Multipurpose Fire Extinguisher', 'svg' => 'extinguisher_co2', 'desc' => 'Eco-friendly clean-agent extinguisher, safe for electronics.', 'detail' => 'Discharges a non-conductive, residue-free clean agent that extinguishes fire without harming people or delicate equipment — ideal for data centres, control rooms, telecom and museums. Environmentally friendly and safe for occupied spaces.' ),
				array( 'name' => 'Trolley Type Fire Extinguishers', 'svg' => 'extinguisher_abc', 'desc' => 'High-capacity 25–75 kg wheeled extinguishers for large areas.', 'detail' => 'Mounted on a sturdy trolley for quick mobility, trolley-mounted extinguishers deliver a high discharge capacity for factories, godowns, fuel depots and large commercial premises where bigger fire risks demand more agent. Available in ABC, CO₂ and foam variants.' ),
				array( 'name' => 'Fire Ball Extinguisher', 'img' => 'fire-ball', 'svg' => 'fire_ball', 'desc' => 'Self-activating throw-and-burst fire ball — no training needed.', 'detail' => 'Simply place the fire ball near a fire risk or throw it into flames — it bursts within 3–5 seconds and disperses fire-fighting powder over the area, also raising a loud alarm. Perfect for homes, shops, kitchens and vehicles where anyone can use it instantly.' ),
				array( 'name' => 'Fire Aerosol Extinguisher', 'svg' => 'extinguisher_co2', 'desc' => 'Compact aerosol-based automatic fire-suppression unit.', 'detail' => 'Releases a fine aerosol that interrupts the fire\'s chemical chain reaction. Lightweight, maintenance-free and non-pressurised, it is ideal for vehicles, electrical cabinets, boats and small enclosed spaces.' ),
			),
		),

		array(
			'slug' => 'fire-alarm-system', 'name' => 'Fire Alarm System',
			'icon' => 'support', 'svg' => 'alarm_panel', 'img' => 'fire-alarm',
			'intro' => 'Early detection saves lives. Our conventional and addressable fire alarm systems detect smoke and heat at the earliest stage and alert the whole building instantly — designed, supplied, installed and maintained as per NBC and IS standards.',
			'items' => array(
				array( 'name' => 'Fire Alarm Panel', 'img' => 'fire-alarm-panel', 'svg' => 'alarm_panel', 'desc' => 'Conventional & addressable fire alarm control panels.', 'detail' => 'The brain of the fire-detection system, the control panel monitors all detectors and call points, pinpoints the fire zone and triggers alarms and linked systems. Available from 2 to 32+ zones and fully addressable versions for buildings of every size.' ),
				array( 'name' => 'Manual Call Point', 'img' => 'call-point', 'svg' => 'accessories', 'desc' => 'Break-glass call point to raise the alarm instantly.', 'detail' => 'Wall-mounted at exits, staircases and corridors, the manual call point lets any occupant press or break the glass to trigger the building alarm during an emergency. A mandatory device for all commercial and industrial buildings.' ),
				array( 'name' => 'Hooters', 'svg' => 'alarm_panel', 'desc' => 'Loud electronic hooters & sounders for fire warning.', 'detail' => 'Hooters provide a high-decibel audible alert across the premises so occupants can evacuate quickly. Often combined with a flashing red beacon for noisy factory floors or large open areas.' ),
				array( 'name' => 'Smoke Detector', 'img' => 'smoke-detector', 'svg' => 'smoke_detector', 'desc' => 'Photoelectric/optical smoke detectors for early warning.', 'detail' => 'Smoke detectors sense smoke particles at the earliest stage of a fire and signal the panel automatically, giving occupants maximum time to escape. Essential for offices, hotels, hospitals, schools and residential buildings.' ),
				array( 'name' => 'Heat Detector', 'img' => 'smoke-detector', 'svg' => 'smoke_detector', 'desc' => 'Fixed & rate-of-rise heat detectors for harsh areas.', 'detail' => 'Heat detectors trigger when the temperature rises abnormally or crosses a fixed limit — ideal for kitchens, boiler rooms, car parks and dusty areas where smoke detectors could give false alarms.' ),
			),
		),

		array(
			'slug' => 'hydrant-system', 'name' => 'Hydrant System',
			'icon' => 'design', 'svg' => 'hydrant', 'img' => 'hydrant',
			'intro' => 'A wet/dry riser hydrant system delivers high-pressure water exactly where a fire breaks out. MAX MI supplies and installs complete internal and external hydrant systems — valves, hoses, hose boxes and reels — engineered to IS 3844 and NBC norms.',
			'items' => array(
				array( 'name' => 'Hydrant Valve', 'img' => 'hydrant', 'svg' => 'hydrant', 'desc' => 'Gunmetal / stainless-steel landing & yard hydrant valves.', 'detail' => 'The hydrant valve is the outlet point of the system where a fire hose is connected. Manufactured in gunmetal and stainless steel to IS 5290 standards, it delivers reliable high-pressure water discharge, available in single and double-headed types.' ),
				array( 'name' => 'RRL Hose Pipe', 'img' => 'hose-reel', 'svg' => 'hose_reel', 'desc' => 'Reinforced Rubber Lined (RRL) fire hose, 63 mm.', 'detail' => 'RRL hoses are high-pressure, durable and rot-proof, carrying water from the hydrant to the fire. They conform to IS 636 Type-A/B with instantaneous SS couplings for quick, leak-free connection.' ),
				array( 'name' => 'Short Branch Pipe', 'svg' => 'hydrant', 'desc' => 'Gunmetal short branch pipe with nozzle.', 'detail' => 'Fitted at the end of the fire hose, the branch pipe controls and directs the water jet or spray onto the fire, increasing reach and pressure at the nozzle.' ),
				array( 'name' => 'Fire Hose Cabinet / Hose Box', 'img' => 'hose-box', 'svg' => 'accessories', 'desc' => 'MS / FRP hose box to store hose, branch & accessories.', 'detail' => 'A wall-mounted or free-standing cabinet that keeps the fire hose, branch pipe, hydrant valve key and other accessories safely stored and instantly accessible near hydrant points.' ),
				array( 'name' => 'First Aid Hose Reel', 'img' => 'hose-reel-new', 'svg' => 'hose_reel', 'desc' => 'Swinging drum hose reel with 20–36 m rubber hose.', 'detail' => 'The first-aid hose reel provides a quick first response to a fire before the main hydrant is deployed. Wall-mounted with a swinging drum, it can be operated easily by a single person.' ),
				array( 'name' => 'Butterfly Valve', 'img' => 'butterfly-valve', 'svg' => 'hydrant', 'desc' => 'Cast-iron / SS butterfly isolation valves.', 'detail' => 'Butterfly valves isolate sections of the fire-water pipeline for maintenance or flow control without shutting down the entire system. Available in wafer and lug types with lever or gear operation.' ),
			),
		),

		array(
			'slug' => 'fire-pumps', 'name' => 'Fire Pumps',
			'icon' => 'engineer', 'svg' => 'hydrant', 'img' => 'fire-pump',
			'intro' => 'The pump house is the heart of any fire-water system. We supply and commission complete pump sets — electric main pump, diesel standby, jockey and terrace pumps — sized and automated to keep your hydrant and sprinkler network always pressurised.',
			'items' => array(
				array( 'name' => 'Main Electric Fire Pump', 'img' => 'fire-pump', 'svg' => 'hydrant', 'desc' => 'Electric-driven main fire pump as per NBC / IS.', 'detail' => 'The main electric pump maintains hydrant and sprinkler pressure and is the primary water source during a fire. Sized to the building\'s demand, it starts automatically on pressure drop and is available in various flow and head ratings.' ),
				array( 'name' => 'Diesel Engine Pump', 'img' => 'fire-pump', 'svg' => 'hydrant', 'desc' => 'Diesel-driven standby pump for power-failure backup.', 'detail' => 'The diesel engine pump automatically takes over when the electric supply fails, ensuring the fire system always has water pressure during an emergency. A mandatory backup for most commercial and industrial buildings.' ),
				array( 'name' => 'Jockey Pump', 'svg' => 'hydrant', 'desc' => 'Small pump that maintains standby system pressure.', 'detail' => 'The jockey pump keeps the pipeline pressurised and compensates for minor leaks, preventing the main pumps from starting unnecessarily and extending their life.' ),
				array( 'name' => 'Terrace Pump', 'svg' => 'hydrant', 'desc' => 'Terrace-level booster pump for upper floors.', 'detail' => 'Installed on the terrace, this pump boosts water pressure for the top floors and terrace-level hydrant and sprinkler points, ensuring uniform protection across the building height.' ),
			),
		),

		array(
			'slug' => 'sprinkler-system', 'name' => 'Sprinkler System',
			'icon' => 'design', 'svg' => 'sprinkler', 'img' => 'sprinkler',
			'intro' => 'Automatic sprinklers are the most effective way to control a fire the moment it starts — around the clock, with no human action required. We design and install pendent, upright and side-wall sprinkler systems as per NBC and IS 15105.',
			'items' => array(
				array( 'name' => 'Pendent Sprinkler', 'img' => 'sprinkler', 'svg' => 'sprinkler', 'desc' => 'Downward-facing pendent sprinklers for false ceilings.', 'detail' => 'The most common sprinkler type, mounted below the ceiling to spray water downward in a circular pattern when the heat-sensitive glass bulb bursts. Ideal for offices, malls, hotels and residential buildings.' ),
				array( 'name' => 'Upright Sprinkler', 'img' => 'sprinkler', 'svg' => 'sprinkler', 'desc' => 'Upward-facing sprinklers for exposed pipework.', 'detail' => 'Installed on top of the pipe in areas such as basements, car parks and plant rooms, the upright sprinkler sprays water upward and outward, deflecting it evenly over the protected area.' ),
				array( 'name' => 'Side Wall Sprinkler', 'img' => 'sprinkler', 'svg' => 'sprinkler', 'desc' => 'Horizontal side-wall sprinklers for rooms & corridors.', 'detail' => 'Mounted on the wall where ceiling piping is not feasible, the side-wall sprinkler throws water horizontally across the room — a neat solution for corridors, small rooms and finished areas.' ),
			),
		),

		array(
			'slug' => 'public-address-system', 'name' => 'Public Address System (PA)',
			'icon' => 'support', 'svg' => 'alarm_panel', 'img' => 'fire-alarm',
			'intro' => 'A public-address and voice-evacuation system lets you make clear announcements and guide people safely out during an emergency. We supply integrated PA + fire-alarm systems with amplifiers and speakers for zoned, building-wide coverage.',
			'items' => array(
				array( 'name' => 'Fire Alarm Control Panel', 'img' => 'fire-alarm-panel', 'svg' => 'alarm_panel', 'desc' => 'Integrated PA + fire-alarm control panel.', 'detail' => 'The control panel combines fire detection with voice evacuation, allowing zoned announcements and alarms across the building. It coordinates detectors, speakers and manual controls from a single point.' ),
				array( 'name' => 'Amplifier', 'img' => 'amplifier', 'svg' => 'alarm_panel', 'desc' => 'PA amplifiers for voice-evacuation systems.', 'detail' => 'Amplifiers drive the speakers across the premises for emergency announcements and routine paging, available in various wattages selected according to the coverage area.' ),
				array( 'name' => 'Speakers', 'img' => 'speakers', 'svg' => 'alarm_panel', 'desc' => 'Ceiling & wall PA speakers / horns.', 'detail' => 'PA speakers and horns distribute clear voice messages and alarm tones throughout the building for safe, orderly evacuation — available in ceiling, wall and horn types for every environment.' ),
			),
		),
	);
}

/**
 * Accessories & spares (shown under the "Accessories" nav item).
 * keys: name, desc, detail
 */
function maxmi_accessory_items() {
	return array(
		array( 'name' => 'MS Pipe', 'img' => 'ms-pipe', 'svg' => 'pipe', 'desc' => 'Mild-steel pipes for hydrant & sprinkler networks.', 'detail' => 'ERW / seamless MS pipes (ISI-marked) form the backbone of the fire-water piping. Available in a range of diameters and pressure ratings, with fabrication and installation support.' ),
		array( 'name' => 'MS Angle', 'img' => 'ms-angle', 'svg' => 'angle', 'desc' => 'MS angles & supports for pipe and panel mounting.', 'detail' => 'Used to fabricate clamps, supports and stands for fire piping, panels and equipment throughout the installation.' ),
		array( 'name' => 'Foot Valve', 'img' => 'foot-valve', 'svg' => 'valve', 'desc' => 'Suction foot valve with strainer for pump inlet.', 'detail' => 'Fitted at the pump suction, the foot valve retains water to keep the pump primed and its strainer stops debris from entering the pump.' ),
		array( 'name' => 'Air Release Valve', 'img' => 'air-release-valve', 'svg' => 'valve', 'desc' => 'Automatic air-release valve for pipelines.', 'detail' => 'Removes trapped air from the fire piping automatically to maintain proper water flow and steady pressure.' ),
		array( 'name' => 'Ball Valve', 'img' => 'ball-valve', 'svg' => 'ball_valve', 'desc' => 'Quarter-turn ball isolation valves.', 'detail' => 'Provides quick on/off isolation of pipeline sections, gauges and instruments for maintenance.' ),
		array( 'name' => 'Non Return Valve', 'img' => 'non-return-valve', 'svg' => 'valve', 'desc' => 'Check / non-return valve to prevent backflow.', 'detail' => 'Allows water to flow in one direction only, protecting the pumps and system from reverse flow.' ),
		array( 'name' => 'Fire Brigade Connection', 'img' => 'fire-brigade-connection', 'svg' => 'connection', 'desc' => 'External fire-brigade inlet / breeching connection.', 'detail' => 'Lets the fire brigade pump water directly into the building\'s hydrant system during a major fire.' ),
		array( 'name' => 'Hydrant Pressure Gauge', 'img' => 'hydrant-pressure-gauge', 'svg' => 'gauge', 'desc' => 'Glycerine-filled pressure gauge for hydrant lines.', 'detail' => 'Displays live system pressure so operators can monitor pump performance and pipeline health.' ),
		array( 'name' => 'Hydrant Pressure Switch', 'img' => 'hydrant-pressure-switch', 'svg' => 'switch', 'desc' => 'Pressure switch to auto-start the fire pumps.', 'detail' => 'Senses a drop in line pressure and signals the pump control panel to start the fire pump automatically.' ),
		array( 'name' => 'Air Vessel', 'img' => 'air-vessel', 'svg' => 'vessel', 'desc' => 'Pressure air vessel for the pump house.', 'detail' => 'Absorbs pressure surges and helps maintain steady, stable system pressure in the pump room.' ),
		array( 'name' => 'Extinguisher Discharge Pipe', 'svg' => 'hose', 'desc' => 'Discharge hose / pipe for extinguishers.', 'detail' => 'Directs the extinguishing agent from the cylinder onto the fire with better reach and control.' ),
		array( 'name' => 'CO2 Horn with Discharge Pipe', 'svg' => 'horn', 'desc' => 'CO₂ discharge horn assembly.', 'detail' => 'The horn and hose fitted on CO₂ extinguishers to safely direct the gas without freezing the operator\'s hand.' ),
		array( 'name' => 'CO2 Trolley', 'img' => 'co2-trolley', 'svg' => 'trolley', 'desc' => 'Trolley for large CO₂ cylinders.', 'detail' => 'Enables easy movement of heavy CO₂ extinguishers to the fire spot in factories and large premises.' ),
		array( 'name' => 'ABC Clamp', 'img' => 'abc-clamp', 'svg' => 'clamp', 'desc' => 'Wall clamp / bracket for ABC extinguishers.', 'detail' => 'Securely holds ABC extinguishers in their designated wall location for quick access.' ),
		array( 'name' => 'CO2 Clamp', 'img' => 'co2-clamp', 'svg' => 'clamp', 'desc' => 'Wall clamp / bracket for CO₂ extinguishers.', 'detail' => 'Holds CO₂ cylinders firmly on the wall or stand, keeping them ready and organised.' ),
		array( 'name' => 'Fire Bucket Set with 4 Buckets', 'img' => 'fire-bucket-set', 'svg' => 'bucket', 'desc' => 'Fire bucket stand set with four buckets.', 'detail' => 'Sand / water bucket set for first-aid fire fighting at petrol pumps, DG rooms, sites and godowns.' ),
		array( 'name' => 'Fireman Axe', 'img' => 'fireman-axe', 'svg' => 'axe', 'desc' => 'Insulated fireman\'s rescue axe.', 'detail' => 'A rescue and forcible-entry tool for fire fighters, with an electrically insulated handle for safety.' ),
		array( 'name' => 'Fire Beater', 'img' => 'fire-beater', 'svg' => 'beater', 'desc' => 'Fire beater / flapper for surface & grass fires.', 'detail' => 'Used to beat out small ground, grass and surface fires quickly and safely.' ),
		array( 'name' => 'Fire Hook', 'img' => 'fire-hook', 'svg' => 'hook', 'desc' => 'Fire hook / ceiling hook for pulling debris.', 'detail' => 'Helps pull down burning material and clear obstacles during fire-fighting and overhaul.' ),
		array( 'name' => 'Adaptor SS', 'img' => 'adaptor-ss', 'svg' => 'coupling', 'desc' => 'Stainless-steel hose adaptors / couplings.', 'detail' => 'Connect hoses and hydrant fittings of different types and sizes for a leak-free joint.' ),
		array( 'name' => 'Thermoplastic Pipe', 'img' => 'thermoplastic-pipe', 'svg' => 'hose', 'desc' => 'Flexible thermoplastic discharge pipe.', 'detail' => 'Durable, flexible pipe used on extinguishers and small discharge lines.' ),
		array( 'name' => 'ABC Fire Extinguisher Valve', 'img' => 'abc-extinguisher-valve', 'svg' => 'valve', 'desc' => 'Brass valve assembly for ABC extinguishers.', 'detail' => 'The control valve with squeeze lever that releases the dry powder on operation.' ),
		array( 'name' => 'Rosette Plate for Sprinkler (Powder Coated)', 'svg' => 'plate', 'desc' => 'Powder-coated escutcheon / rosette plate.', 'detail' => 'The decorative cover plate around a sprinkler where it passes through the false ceiling, giving a neat finish.' ),
		array( 'name' => 'Coupling Male Female', 'img' => 'coupling-male-female', 'svg' => 'coupling', 'desc' => 'Instantaneous male / female hose couplings.', 'detail' => 'Quick-connect couplings for joining fire hoses and hydrant outlets rapidly and securely.' ),
		array( 'name' => 'Fire Y Connector (Divider)', 'img' => 'fire-y-connector', 'svg' => 'connection', 'desc' => 'Twin-outlet Y-connector for hydrant risers.', 'detail' => 'Splits a single riser outlet into two independently valved 63 mm outlets, letting two hoses be run from one hydrant landing valve at a time.' ),
		array( 'name' => 'CO2 Fire Extinguisher Lock Pin', 'svg' => 'pin', 'desc' => 'Safety lock pin for CO₂ extinguishers.', 'detail' => 'Prevents accidental discharge and keeps the extinguisher sealed until it is intentionally used.' ),
		array( 'name' => 'CO2 Fire Extinguisher Handle', 'svg' => 'handle', 'desc' => 'Operating handle / lever for CO₂ extinguishers.', 'detail' => 'The squeeze handle assembly used to discharge the CO₂ from the cylinder.' ),
		array( 'name' => 'ABC Fire Extinguisher Pressure Gauge', 'svg' => 'gauge', 'desc' => 'Pressure gauge for ABC extinguishers.', 'detail' => 'Shows at a glance whether the extinguisher is charged and ready (needle in the green zone).' ),
		array( 'name' => 'Fire Extinguisher Stand SS', 'svg' => 'stand', 'desc' => 'Stainless-steel floor stand for extinguishers.', 'detail' => 'A neat, corrosion-resistant floor stand to place extinguishers where wall mounting isn\'t possible.' ),
		array( 'name' => 'PVC Conduit Pipe', 'svg' => 'pipe', 'desc' => 'PVC conduit for fire-alarm wiring.', 'detail' => 'Protects and neatly routes the fire-alarm and detector cabling around the building.' ),
		array( 'name' => 'Alarm Panel Battery', 'svg' => 'battery', 'desc' => 'Backup battery for fire-alarm panels.', 'detail' => 'Sealed maintenance-free (SMF) battery that keeps the alarm panel running during power cuts.' ),
		array( 'name' => 'Tank Connection', 'svg' => 'connection', 'desc' => 'Tank suction / connection fittings.', 'detail' => 'Fittings that connect the water-storage tank to the pump suction line for a reliable supply.' ),
	);
}

/** Typical applications per category (used on detail pages for richer content). */
function maxmi_category_apps( $slug ) {
	$map = array(
		'fire-extinguisher'      => array( 'Homes, apartments & society areas', 'Shops, showrooms & offices', 'Factories, warehouses & godowns', 'Petrol pumps & fuel storage', 'Schools, hospitals & hotels', 'Vehicles, buses & DG rooms' ),
		'fire-alarm-system'      => array( 'Commercial & office buildings', 'Hospitals, schools & colleges', 'Hotels, malls & multiplexes', 'Factories & industrial plants', 'Residential high-rises', 'Warehouses & cold storage' ),
		'hydrant-system'         => array( 'High-rise residential & commercial towers', 'Industrial plants & factories', 'Warehouses & logistics parks', 'Hospitals & institutional campuses', 'Shopping malls & hotels', 'Fuel & chemical storage' ),
		'fire-pumps'             => array( 'Building fire-water pump rooms', 'Industrial fire networks', 'Hydrant & sprinkler pressurisation', 'High-rise terrace boosting', 'Warehouse & godown protection', 'Institutional & campus systems' ),
		'sprinkler-system'       => array( 'Offices, malls & showrooms', 'Hotels, hospitals & hostels', 'Basements & car parks', 'Warehouses & storage racks', 'Data centres & server rooms', 'Residential high-rises' ),
		'public-address-system'  => array( 'Malls, multiplexes & retail', 'Hospitals & education campuses', 'Airports, metros & stations', 'Factories & large plants', 'Hotels & convention centres', 'Corporate & IT parks' ),
	);
	return isset( $map[ $slug ] ) ? $map[ $slug ] : array( 'Residential buildings', 'Commercial complexes', 'Industrial plants', 'Hospitals & schools', 'Hotels & malls', 'Warehouses' );
}

/** Return the real photo URL for an accessory slug, else empty string. */
function maxmi_accessory_img_url( $slug ) {
	if ( ! $slug ) {
		return '';
	}
	$dir = get_template_directory() . '/assets/images/accessories/';
	$uri = get_template_directory_uri() . '/assets/images/accessories/';
	foreach ( array( 'jpg', 'jpeg', 'png', 'webp' ) as $ext ) {
		if ( file_exists( $dir . $slug . '.' . $ext ) ) {
			return $uri . $slug . '.' . $ext;
		}
	}
	return '';
}

/* ---------------- finder helpers ---------------- */

/** Find a category by slug. */
function maxmi_find_category( $slug ) {
	foreach ( maxmi_catalog() as $cat ) {
		if ( $cat['slug'] === $slug ) {
			return $cat;
		}
	}
	return null;
}

/** Find a product item (across all categories) by its title slug; returns item + its category. */
function maxmi_find_product( $slug ) {
	foreach ( maxmi_catalog() as $cat ) {
		foreach ( $cat['items'] as $item ) {
			if ( sanitize_title( $item['name'] ) === $slug ) {
				$item['category']      = $cat['name'];
				$item['category_slug'] = $cat['slug'];
				if ( empty( $item['svg'] ) ) {
					$item['svg'] = $cat['svg'];
				}
				return $item;
			}
		}
	}
	return null;
}

/** Find an accessory by its title slug. */
function maxmi_find_accessory( $slug ) {
	foreach ( maxmi_accessory_items() as $item ) {
		if ( sanitize_title( $item['name'] ) === $slug ) {
			return $item;
		}
	}
	return null;
}
