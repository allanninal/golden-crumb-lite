<?php
/**
 * Title: Hero
 * Slug: golden-crumb-lite/hero
 * Categories: golden-crumb-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:cover {"url":"__SRC_hero__","id":"__ID_hero__","alt":"Fresh loaves filling the bakery","dimRatio":80,"overlayColor":"cocoa-bg","isUserOverlayColor":true,"minHeight":640,"minHeightUnit":"px","sizeSlug":"full","align":"full","className":"bk-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull bk-hero" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-cocoa-bg-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-__ID_hero__ size-full" alt="<?php echo esc_attr__( 'Fresh loaves filling the bakery', 'golden-crumb-lite' ); ?>" src="__SRC_hero__" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"constrained","contentSize":"42rem"},"className":"bk-hero__inner"} -->
<div class="wp-block-group bk-hero__inner">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"wheat"} -->
<p class="has-wheat-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Neighborhood Bakery · Portland, OR', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textColor":"wheat-light","fontSize":"huge"} -->
<h1 class="wp-block-heading has-wheat-light-color has-text-color has-huge-font-size"><?php echo esc_html__( 'Baked fresh daily. Gone by noon.', 'golden-crumb-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"wheat-dark","fontSize":"large"} -->
<p class="has-wheat-dark-color has-text-color has-large-font-size"><?php echo esc_html__( 'Artisan breads, all-butter croissants, layer cakes, and specialty coffee — made from scratch every morning before the sun\'s up. We close early when we sell out.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See Today\'s Menu', 'golden-crumb-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#order"><?php echo esc_html__( 'Order a Custom Cake', 'golden-crumb-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:columns {"className":"bk-stats"} -->
<div class="wp-block-columns bk-stats">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"wheat-light"} -->
<p class="has-wheat-light-color has-text-color bk-stat__value"><?php echo esc_html__( '2014', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label","textColor":"wheat-dark"} -->
<p class="has-wheat-dark-color has-text-color bk-stat__label"><?php echo esc_html__( 'Open Since', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"wheat-light"} -->
<p class="has-wheat-light-color has-text-color bk-stat__value"><?php echo esc_html__( '~400 loaves', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label","textColor":"wheat-dark"} -->
<p class="has-wheat-dark-color has-text-color bk-stat__label"><?php echo esc_html__( 'Baked Daily', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"wheat-light"} -->
<p class="has-wheat-light-color has-text-color bk-stat__value"><?php echo esc_html__( '6:30 AM', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label","textColor":"wheat-dark"} -->
<p class="has-wheat-dark-color has-text-color bk-stat__label"><?php echo esc_html__( 'Opens at', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"wheat-light"} -->
<p class="has-wheat-light-color has-text-color bk-stat__value"><?php echo esc_html__( 'sold out', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label","textColor":"wheat-dark"} -->
<p class="has-wheat-dark-color has-text-color bk-stat__label"><?php echo esc_html__( 'Fresh Until', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
