<?php
/**
 * Food shop extras: section edges and textures, a menu board, diet chips and
 * a live "Open now" line.
 *
 * Shipped only in themes with "food" in themes.config.json. Block styles
 * only, no custom blocks: every one is a class on a core block, so content
 * stays plain core blocks if the theme is ever switched off. The one script,
 * assets/js/open-status.js, loads only on a page that has an open-status
 * paragraph.
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'golden_crumb_lite_food_block_styles' );

/**
 * The block styles, so the owner can apply them in the editor too.
 */
function golden_crumb_lite_food_block_styles() {
	$styles = array(
		'core/group'     => array(
			'edge-wave'         => __( 'Wavy bottom edge', 'golden-crumb-lite' ),
			'edge-scallop'      => __( 'Scalloped bottom edge', 'golden-crumb-lite' ),
			'edge-zigzag'       => __( 'Zigzag bottom edge', 'golden-crumb-lite' ),
			'texture-dots'      => __( 'Dotted background', 'golden-crumb-lite' ),
			'texture-sprinkles' => __( 'Sprinkles background', 'golden-crumb-lite' ),
			'menu-board'        => __( 'Menu board', 'golden-crumb-lite' ),
		),
		'core/list'      => array(
			'chips' => __( 'Chips', 'golden-crumb-lite' ),
		),
		'core/paragraph' => array(
			'open-status' => __( 'Open now status', 'golden-crumb-lite' ),
		),
	);
	foreach ( $styles as $block => $list ) {
		foreach ( $list as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}

add_action( 'init', 'golden_crumb_lite_food_register_script' );

/**
 * Register the open-status script; it is enqueued by the paragraph that needs it.
 * On init, not wp_enqueue_scripts: a block theme renders its template before
 * wp_head, so on that hook the paragraph found no script to attach to, and the
 * line stayed empty on every page (caught by the gate, 2026-11-07).
 */
function golden_crumb_lite_food_register_script() {
	wp_register_script(
		'golden-crumb-open-status',
		GOLDEN_CRUMB_LITE_URI . '/assets/js/open-status.js',
		array(),
		GOLDEN_CRUMB_LITE_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}

add_filter( 'render_block_core/paragraph', 'golden_crumb_lite_food_open_status', 10, 2 );

/**
 * An open-status paragraph: load the script, once, with the shop's time zone
 * and the sentences it writes. The paragraph stays empty (and hidden) if the
 * script cannot read the hours above it.
 *
 * @param string              $html  Rendered paragraph.
 * @param array<string,mixed> $block The block.
 * @return string
 */
function golden_crumb_lite_food_open_status( $html, $block ) {
	if ( ! str_contains( (string) ( $block['attrs']['className'] ?? '' ), 'is-style-open-status' ) ) {
		return $html;
	}
	if ( ! wp_script_is( 'golden-crumb-open-status', 'enqueued' ) ) {
		$tz = wp_timezone();
		wp_add_inline_script(
			'golden-crumb-open-status',
			'window.golden_crumbOpenStatus = ' . wp_json_encode(
				array(
					// An IANA name when the site has one, else a fixed offset in minutes.
					'tz'       => str_contains( $tz->getName(), '/' ) ? $tz->getName() : '',
					'offset'   => (int) round( $tz->getOffset( new DateTimeImmutable( 'now', $tz ) ) / 60 ),
					/* translators: %s: closing time, as written in the hours. */
					'until'    => __( 'Open now until %s', 'golden-crumb-lite' ),
					/* translators: %s: opening time, as written in the hours. */
					'today'    => __( 'Closed now. Opens today at %s', 'golden-crumb-lite' ),
					/* translators: %s: opening time, as written in the hours. */
					'tomorrow' => __( 'Closed now. Opens tomorrow at %s', 'golden-crumb-lite' ),
					/* translators: 1: day of the week, 2: opening time, as written in the hours. */
					'day'      => __( 'Closed now. Opens %1$s at %2$s', 'golden-crumb-lite' ),
				)
			) . ';',
			'before'
		);
		wp_enqueue_script( 'golden-crumb-open-status' );
	}
	return $html;
}
