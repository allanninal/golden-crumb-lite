<?php
/**
 * Title: Our story
 * Slug: golden-crumb-lite/story
 * Categories: golden-crumb-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
 * Viewport Width: 1400
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-2","className":"bk-section"} -->
<section class="wp-block-group has-surface-2-background-color has-background alignfull bk-section" id="story">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Our Story', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Baked with intention since 2014.', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The Golden Crumb started in Mei Chen\'s home kitchen — a 20-quart mixer, a temperamental oven, and a farmers\' market stall that sold out every Saturday by 9 AM. Neighbors kept asking where they could buy the bread during the week. The answer, in 2014, was: Maple Street.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'We still use the same sourdough starter Mei fed on day one. It lives in the walk-in, gets fed every morning at 4:30, and has shaped tens of thousands of loaves. That\'s the thing about fermentation: patience compounds. You can\'t rush it. The bread knows.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Everything here is baked on-site, every single morning, before the doors open. When we sell out — and we do, most days — we close early rather than compromise on anything that came out earlier in the day. Fresh means fresh.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"40%","className":"bk-story-stats"} -->
<div class="wp-block-column bk-story-stats" style="flex-basis:40%">
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-card"} -->
<div class="wp-block-group bk-card">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color bk-stat__value"><?php echo esc_html__( '2014', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label"} -->
<p class="bk-stat__label"><?php echo esc_html__( 'Founded', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-card"} -->
<div class="wp-block-group bk-card">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color bk-stat__value"><?php echo esc_html__( '10+ years', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label"} -->
<p class="bk-stat__label"><?php echo esc_html__( 'Starter Age', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-card"} -->
<div class="wp-block-group bk-card">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color bk-stat__value"><?php echo esc_html__( '~400', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label"} -->
<p class="bk-stat__label"><?php echo esc_html__( 'Loaves / Week', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-card"} -->
<div class="wp-block-group bk-card">
<!-- wp:paragraph {"className":"bk-stat__value","textColor":"accent"} -->
<p class="has-accent-color has-text-color bk-stat__value"><?php echo esc_html__( 'Countless', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-stat__label"} -->
<p class="bk-stat__label"><?php echo esc_html__( 'Regulars', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
