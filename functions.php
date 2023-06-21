<?php
/**
 * Theme Functions.
 *
 * @package Dentist_Theme
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */


/* 
* Register styles
*/
function dentist_enqueue_scripts()
{
        $version = wp_get_theme()->get('Version');
    
        wp_enqueue_style(
            'main-css', 
            get_template_directory_uri() . '/assets/build/css/main.css', 
            array('stylesheet'),
            $version,
            'all'
        );
        wp_enqueue_style(
            'stylesheet', 
            get_stylesheet_uri() 
        );
}

add_action('wp_enqueue_scripts', 'dentist_enqueue_scripts');

/* 
* Register custom scripts 
*/

function dentist_register_scripts()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script(
        'scripts', 
        get_template_directory_uri()."/assets/build/js/main.js", 
        array(), 
        $version, 
        true
    );
    
}

add_action('wp_enqueue_scripts', 'dentist_register_scripts');


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
