<?php
/**
 * Title: Gallery
 * Slug: golden-crumb-lite/gallery
 * Categories: golden-crumb-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
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
<section class="wp-block-group alignfull bk-section" id="gallery">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Photo Gallery', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'From Our Kitchen', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"bk-lede"} -->
<p class="has-text-align-center bk-lede"><?php echo esc_html__( 'A peek behind the counter — the bread, the pastries, the space.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"bk-gallery"} -->
<div class="wp-block-group bk-gallery">
<!-- wp:image {"id":"__ID_sourdough__","sizeSlug":"large","linkDestination":"none","className":"bk-photo"} -->
<figure class="wp-block-image size-large bk-photo"><img src="__SRC_sourdough__" alt="<?php echo esc_attr__( 'A rustic sourdough country loaf with scored wheat pattern, golden crust, on a wooden board', 'golden-crumb-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_sourdough__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Country Sourdough', 'golden-crumb-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_croissants__","sizeSlug":"large","linkDestination":"none","className":"bk-photo"} -->
<figure class="wp-block-image size-large bk-photo"><img src="__SRC_croissants__" alt="<?php echo esc_attr__( 'Fresh butter croissants stacked on a white marble slab, shatteringly flaky', 'golden-crumb-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_croissants__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Butter Croissants', 'golden-crumb-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_cake__","sizeSlug":"large","linkDestination":"none","className":"bk-photo"} -->
<figure class="wp-block-image size-large bk-photo"><img src="__SRC_cake__" alt="<?php echo esc_attr__( 'Strawberry layer cake with mascarpone cream and fresh berries on a cake stand', 'golden-crumb-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_cake__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Strawberry Layer Cake', 'golden-crumb-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_pastry-case__","sizeSlug":"large","linkDestination":"none","className":"bk-photo"} -->
<figure class="wp-block-image size-large bk-photo"><img src="__SRC_pastry-case__" alt="<?php echo esc_attr__( 'Morning pastry case with croissants, Danishes, and morning buns in warm light', 'golden-crumb-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_pastry-case__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Pastry Case', 'golden-crumb-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_focaccia__","sizeSlug":"large","linkDestination":"none","className":"bk-photo"} -->
<figure class="wp-block-image size-large bk-photo"><img src="__SRC_focaccia__" alt="<?php echo esc_attr__( 'Rows of focaccia with rosemary and sea salt, golden on a sheet pan', 'golden-crumb-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_focaccia__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Rosemary Focaccia', 'golden-crumb-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_interior__","sizeSlug":"large","linkDestination":"none","className":"bk-photo"} -->
<figure class="wp-block-image size-large bk-photo"><img src="__SRC_interior__" alt="<?php echo esc_attr__( 'Interior of The Golden Crumb bakery — warm wood tones, chalkboard menu, morning light through the window', 'golden-crumb-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_interior__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The Bakery', 'golden-crumb-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
