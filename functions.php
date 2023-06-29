<?php
/**
 * Theme Functions.
 *
 * @category Functions
 * @package  Dentist_Theme
 * @author   Sarah
 * @license  https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GPL
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( 'DENTIST_DIR_PATH' ) ) {
	define( 'DENTIST_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DENTIST_DIR_URI' ) ) {
	define( 'DENTIST_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

/*
 * Enqueue Styles and Scripts
 */
require DENTIST_DIR_PATH . '/inc/classes/class-assets.php';

$assets = new Assets();

/*
 * Add theme suppports
 */

require DENTIST_DIR_PATH . '/inc/classes/class-theme-supports.php';

$supports = new Supports();


/*
 * Register menus
 */

require DENTIST_DIR_PATH . '/inc/classes/class-menus.php';

$menus = new Menus();
