<?php
/**
 * Title: Menu board
 * Slug: golden-crumb-lite/menu-board
 * Categories: golden-crumb-lite
 * Viewport Width: 1400
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"44rem"},"tagName":"section","align":"full","className":"is-style-menu-board bk-section"} -->
<section class="wp-block-group alignfull is-style-menu-board bk-section">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Baked This Morning', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Breads', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Country Sourdough', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$9', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Seeded Rye', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$10', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Honey Oat Loaf', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$8', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Jalapeño Cheddar Sourdough', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$11', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Focaccia — Rosemary &amp; Sea Salt', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$7 / quarter sheet', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Gluten-Free Sandwich Loaf', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$12', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Gluten-free', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Pastries', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Butter Croissant', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Almond Croissant', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Pain au Chocolat', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Morning Bun', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Seasonal Danish', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.25', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Kouign-Amann', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Cakes &amp; Sweets', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Strawberry Layer Cake (slice)', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$7 / slice', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Lemon Olive Oil Cake (slice)', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$6 / slice', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Brown Butter Blondie', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Cardamom Snickerdoodle', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$2.75', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Seasonal Tart', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$7.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Custom Celebration Cake', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( 'from $65', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Coffee &amp; Drinks', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Drip Coffee', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3 / $3.75', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Espresso', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$3.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Latte', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.25', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Cortado', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.25', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'bestseller', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Matcha Latte', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.50', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Fresh-Squeezed OJ', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- /wp:group -->
<!-- wp:paragraph {"className":"bk-lede bk-allergens"} -->
<p class="bk-lede bk-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, dairy, eggs, tree nuts, soy and sesame, so we cannot promise any item is free of them, even those marked vegan or gluten free. Please ask about allergens before you order.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
