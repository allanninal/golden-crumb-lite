<?php
/**
 * Title: Full menu
 * Slug: golden-crumb-lite/menu-full
 * Categories: golden-crumb-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
 * Viewport Width: 1400
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"className":"bk-section"} -->
<div class="wp-block-group bk-section">
<!-- wp:group {"layout":{"type":"constrained"},"tagName":"section","className":"bk-menu-section"} -->
<section class="wp-block-group bk-menu-section">
<!-- wp:heading {"className":"bk-menu-cat"} -->
<h2 class="wp-block-heading bk-menu-cat"><?php echo esc_html__( 'Breads', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-lede"} -->
<p class="bk-lede"><?php echo esc_html__( 'Stone-milled flours. Long cold ferments. Baked in our deck oven every morning by 6 AM.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Seeded Rye', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$10', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Dense, dark, earthy. Caraway, sesame, and sunflower seeds folded through 80% rye flour. Exceptional toasted with butter.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Gluten-Free Sandwich Loaf', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$12', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Rice flour and tapioca base. Soft crumb, great structure. Baked on Tuesday and Friday mornings.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Gluten-free', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"bk-item__note"} -->
<p class="bk-item__note"><?php echo esc_html__( 'Tue &amp; Fri only — call ahead to reserve', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"tagName":"section","className":"bk-menu-section"} -->
<section class="wp-block-group bk-menu-section">
<!-- wp:heading {"className":"bk-menu-cat"} -->
<h2 class="wp-block-heading bk-menu-cat"><?php echo esc_html__( 'Pastries', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-lede"} -->
<p class="bk-lede"><?php echo esc_html__( 'All-butter laminated pastry. Hand-shaped. Nothing from a box, ever.', 'golden-crumb-lite' ); ?></p>
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
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Pain au Chocolat', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$4.75', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Two batons of 64% dark chocolate enclosed in buttery laminated dough.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Seasonal Danish', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$5.25', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Cream cheese or pastry-cream base with rotating seasonal fruit. Ask at the counter for today\'s flavour.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
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
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Morning Bun', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$4.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Laminated dough rolled in cinnamon-orange sugar, coiled, and baked in muffin tins. Crisp edge, pillowy center.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Kouign-Amann', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$5.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Caramelised Breton pastry — buttery, crisp, with a candied sugar crust. Made in limited quantities on weekends.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-item__note"} -->
<p class="bk-item__note"><?php echo esc_html__( 'Weekend only — limited 12 per day', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"tagName":"section","className":"bk-menu-section"} -->
<section class="wp-block-group bk-menu-section">
<!-- wp:heading {"className":"bk-menu-cat"} -->
<h2 class="wp-block-heading bk-menu-cat"><?php echo esc_html__( 'Cakes &amp; Sweets', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-lede"} -->
<p class="bk-lede"><?php echo esc_html__( 'From daily slices to full celebration cakes. Custom orders welcome with 48-hour notice.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Strawberry Layer Cake (slice)', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$7 / slice', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Vanilla chiffon layers, strawberry compote, mascarpone whipped cream, fresh strawberries. Our most requested cake.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Brown Butter Blondie', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$3.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Chewy, fudgy centre, crisp top, toasted walnuts and dark chocolate chips throughout.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Seasonal Tart', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$7.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Buttery pâte sucrée shell with pastry cream and rotating seasonal topping. Ask the counter for today\'s.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Lemon Olive Oil Cake (slice)', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$6 / slice', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Moist, not-too-sweet, bright with Meyer lemon zest. Dusted with powdered sugar.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Cardamom Snickerdoodle', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$2.75', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Soft, pillowy, rolled in cinnamon-cardamom sugar. A hint of Scandinavian warmth.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Custom Celebration Cake', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( 'from $65', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Whole cakes for birthdays, weddings, and events. Choose your flavour, size, and design. 48-hour notice required.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-item__note"} -->
<p class="bk-item__note"><?php echo esc_html__( 'Order via form or call us', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"tagName":"section","className":"bk-menu-section"} -->
<section class="wp-block-group bk-menu-section">
<!-- wp:heading {"className":"bk-menu-cat"} -->
<h2 class="wp-block-heading bk-menu-cat"><?php echo esc_html__( 'Coffee &amp; Drinks', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-lede"} -->
<p class="bk-lede"><?php echo esc_html__( 'Single-origin drip and espresso. Simple drinks done right.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Drip Coffee', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$3 / $3.75', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Single-origin, house-roasted blend. Changed daily. We keep it strong and honest.', 'golden-crumb-lite' ); ?></p>
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
<!-- wp:paragraph {"className":"bk-item__note"} -->
<p class="bk-item__note"><?php echo esc_html__( '12 oz / 16 oz', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Latte', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$5.25', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Double espresso, steamed whole milk, light microfoam. Oat, almond, or soy available.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"bk-item"} -->
<div class="wp-block-group bk-item">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"bk-item__head"} -->
<div class="wp-block-group bk-item__head">
<!-- wp:heading {"level":3,"className":"bk-item__name"} -->
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Matcha Latte', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$5.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Ceremonial-grade matcha whisked with steamed oat milk. Earthy, slightly sweet.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Espresso', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$3.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Double shot of our house espresso blend. Bright acidity, stone fruit finish.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Cortado', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$4.25', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Equal parts espresso and warm milk. The bakery staff\'s drink of choice.', 'golden-crumb-lite' ); ?></p>
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
<h3 class="wp-block-heading bk-item__name"><?php echo esc_html__( 'Fresh-Squeezed OJ', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"bk-item__price","textColor":"accent-dark"} -->
<p class="has-accent-dark-color has-text-color bk-item__price"><?php echo esc_html__( '$4', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-item__desc"} -->
<p class="bk-item__desc"><?php echo esc_html__( 'Valencia oranges, squeezed to order each morning. Classic.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips bk-item__tags"} -->
<ul class="wp-block-list is-style-chips bk-item__tags">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Gluten-free', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-lede bk-allergens"} -->
<p class="bk-lede bk-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, dairy, eggs, tree nuts, soy and sesame, so we cannot promise any item is free of them, even those marked vegan or gluten free. Please ask about allergens before you order.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
