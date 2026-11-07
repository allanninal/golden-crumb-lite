<?php
/**
 * Title: Hours and location
 * Slug: golden-crumb-lite/hours-location
 * Categories: golden-crumb-lite
 * Description: Opening hours and how to find the business.
 * Keywords: hours, opening times, location, address, contact
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
<section class="wp-block-group alignfull bk-section" id="hours">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Hours', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Come Early', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'We bake before dawn and open as soon as the first loaves are ready. We close early when we sell out — which happens most days.', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"bk-hours"} -->
<figure class="wp-block-table bk-hours"><table class="has-fixed-layout"><tbody><tr><td>Monday</td><td>Closed</td></tr><tr><td>Tuesday</td><td>6:30 AM – 2:00 PM</td></tr><tr><td>Wednesday</td><td>6:30 AM – 2:00 PM</td></tr><tr><td>Thursday</td><td>6:30 AM – 2:00 PM</td></tr><tr><td>Friday</td><td>6:30 AM – 3:00 PM</td></tr><tr><td>Saturday</td><td>7:00 AM – 3:00 PM · Specialty pastry drops at 8 AM</td></tr><tr><td>Sunday</td><td>7:00 AM – 1:00 PM · Brunch loaves available</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"bk-card"} -->
<div class="wp-block-column bk-card">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Location', 'golden-crumb-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Find Us', 'golden-crumb-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '418 Maple Street, Portland, OR 97201<br>+1 (503) 555-0174<br><a href="mailto:hello@thegoldencrumb.example">hello@thegoldencrumb.example</a>', 'golden-crumb-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://www.google.com/maps/search/?api=1&amp;query=418%20Maple%20Street%2C%20Portland%2C%20OR%2097201"><?php echo esc_html__( 'Open in Google Maps', 'golden-crumb-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo golden_crumb_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
