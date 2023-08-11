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


function my_excerpt_length( $length ) {
	return 10;
}

add_filter( 'excerpt_length', 'my_excerpt_length', 999 );

set_post_thumbnail_size( 400, 200 );

// Image size for single posts
add_image_size( 'single-post-thumbnail', 590, 180 );
