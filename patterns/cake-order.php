<?php
/**
 * Title: Custom cake orders
 * Slug: golden-crumb-lite/cake-order
 * Categories: golden-crumb-lite
 * Description: How to order a custom cake: sizes, prices, flavours and contact buttons.
 * Keywords: order, cakes, sizes, prices, contact
 * Viewport Width: 1400
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-3","className":"bk-section is-style-edge-wave"} -->
<section class="wp-block-group has-surface-3-background-color has-background alignfull bk-section is-style-edge-wave" id="order">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Custom Orders', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Custom Celebration Cakes', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Planning a birthday, wedding, shower, or office event? We craft custom layer cakes, sheet cakes, and pastry platters to order. All custom cakes are made with the same quality ingredients as our daily bakes — no artificial flavors, no shortening, no shortcuts.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"bk-note"} -->
<p class="bk-note"><?php echo esc_html__( '48 hours minimum notice. Weekend orders by Thursday noon.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Call us at +1 (503) 555-0174 or email hello@thegoldencrumb.example. We confirm every order.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:+15035550174"><?php echo esc_html__( 'Call +1 (503) 555-0174', 'golden-crumb-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:hello@thegoldencrumb.example?subject=Custom%20cake%20order"><?php echo esc_html__( 'Email us', 'golden-crumb-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"bk-card"} -->
<div class="wp-block-column bk-card">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Sizes &amp; Pricing', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:table {"className":"bk-prices"} -->
<figure class="wp-block-table bk-prices"><table class="has-fixed-layout"><tbody><tr><td>6-inch (serves 8–10)</td><td>from $65</td></tr><tr><td>8-inch (serves 16–20)</td><td>from $95</td></tr><tr><td>10-inch (serves 24–30)</td><td>from $135</td></tr><tr><td>Sheet cake (serves 24–30)</td><td>from $110</td></tr><tr><td>Pastry platter (20 pieces)</td><td>from $85</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Available Flavours', 'golden-crumb-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"bk-chips"} -->
<ul class="wp-block-list bk-chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Vanilla Bean', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Lemon Mascarpone', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Chocolate Fudge', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Carrot Spice', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Strawberry &amp; Cream', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Earl Grey Honey', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Funfetti', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Brown Butter Hazelnut', 'golden-crumb-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
