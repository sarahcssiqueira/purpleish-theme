<?php
/**
 * Theme Functions.
 *
 * @package Dentist_Theme
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */


/* 
* Register and enqueue styles and scripts
*/
function dentist_enqueues()
{
    $version = wp_get_theme()->get('Version');
    
    wp_register_style(
        'main-css', 
        get_template_directory_uri() . '/assets/build/css/main.css', 
        array(),
        $version,
        'all'
    );

    wp_register_script(
        'main-js', 
        get_template_directory_uri()."/assets/build/js/main.js", 
        array(), 
        $version, 
        true
    );

    wp_enqueue_style(
        'main-css', 
        get_stylesheet_uri() 
    );

    wp_enqueue_script(
        'main-js'
    );
}

add_action('wp_enqueue_scripts', 'dentist_enqueues');



/* Add theme suppports */

function dt_theme_support()
{
    add_theme_support('title-tag');
    
}

add_action('after_setup_theme', 'dt_theme_support');

/*Register menus */

function dt_menus()
{
    
    $locations = array(
           'primary'=>"Primary Menu" ,
           'footer'=>"Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'dt_menus');
