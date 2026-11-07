<?php
/**
 * Golden Crumb Lite — theme bootstrap.
 *
 * The free edition of Golden Crumb, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package golden-crumb-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'GOLDEN_CRUMB_LITE_VERSION', '1.0.1' );
define( 'GOLDEN_CRUMB_LITE_DIR', get_template_directory() );
define( 'GOLDEN_CRUMB_LITE_URI', get_template_directory_uri() );

require GOLDEN_CRUMB_LITE_DIR . '/inc/setup.php';
require GOLDEN_CRUMB_LITE_DIR . '/inc/media.php';
require GOLDEN_CRUMB_LITE_DIR . '/inc/food.php';
require GOLDEN_CRUMB_LITE_DIR . '/inc/lite.php';
require GOLDEN_CRUMB_LITE_DIR . '/inc/updater.php';
