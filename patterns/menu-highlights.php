<?php
/**
 * Title: Menu highlights
 * Slug: golden-crumb-lite/menu-highlights
 * Categories: golden-crumb-lite
 * Description: A short selection from the menu with prices, and a link to the full menu.
 * Keywords: menu, prices, products, bestsellers
 * Viewport Width: 1400
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"bk-section"} -->
<section class="wp-block-group alignfull bk-section" id="menu">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Daily Fresh Menu', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Baked This Morning', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"bk-lede"} -->
<p class="has-text-align-center bk-lede"><?php echo esc_html__( 'Everything below was made on-site before 6 AM. Availability changes hourly — when we\'re sold out, we\'re done for the day.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:columns {"className":"bk-menu-grid"} -->
<div class="wp-block-columns bk-menu-grid">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Country Sourdough', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$9', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Open crumb, chewy crust, mild tang. Our signature 48-hour cold-ferment loaf using local whole wheat and hard white wheat.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Focaccia — Rosemary &amp; Sea Salt', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$7 / quarter sheet', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Light, airy, dimpled slab focaccia finished with fresh rosemary, fleur de sel, and a generous pour of olive oil.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Honey Oat Loaf', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$8', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Soft crumb, lightly sweet, oat-topped crust. Perfect for sandwiches or morning toast.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Butter Croissant', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$4.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Classic French laminate — 27 layers, three-day process, shatteringly flaky. Served warm from the oven.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Jalapeño Cheddar Sourdough', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$11', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Sharp cheddar pockets and sliced jalapeños throughout our sourdough base. Weekend special — sells out early.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"bk-item__note"} -->
<p class="bk-item__note"><?php echo esc_html__( 'Sat &amp; Sun only', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Almond Croissant', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$5', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Yesterday\'s croissants syrup-soaked, filled with almond frangipane, and finished with toasted sliced almonds.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:buttons {"className":"bk-center"} -->
<div class="wp-block-buttons bk-center">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the full menu', 'golden-crumb-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
