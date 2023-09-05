<?php
/**
 * Theme Functions.
 *
 * @category Functions
 * @package purpleish_theme
 * @author   sarahcssiqueira
 * @license  https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GPL
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( 'PURPLEISH_DIR_PATH' ) ) {
	define( 'PURPLEISH_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'PURPLEISH_DIR_URI' ) ) {
	define( 'PURPLEISH_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

/*
 * Enqueue Styles and Scripts
 */
require PURPLEISH_DIR_PATH . '/inc/classes/class-assets.php';

$assets = new Assets();

/*
 * Add theme suppports
 */
require PURPLEISH_DIR_PATH . '/inc/classes/class-theme-supports.php';

$supports = new Supports();

/*
 * Register menus
 */
require PURPLEISH_DIR_PATH . '/inc/classes/class-menus.php';

$menus = new Menus();

/*
 * Theme Features
 */
require PURPLEISH_DIR_PATH . '/inc/classes/class-features.php';

$menus = new Features();
