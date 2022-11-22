<?php
/**
 * Resume theme functions and definitions
 * Functions prefix => rt
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */
?><?php

/* Register custom style */

function dt_register_styles() {
        
        $version = wp_get_theme()->get( 'Version' );
    
        wp_enqueue_style('dtheme_sytle' , get_template_directory_uri() . "/style.css" , array( 'dtheme_sytle_jquery' ), $version,'all');
        wp_enqueue_style('dtheme_sytle_font-awesome' , "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css", array(), '6.2.0','all');
        wp_enqueue_style('dtheme_sytle_jquery' , "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '6.2.0','all');
    
    }
    
add_action( 'wp_enqueue_scripts' , 'dt_register_styles' );

/* Register custom scripts */

function dt_register_scripts() {

    wp_enqueue_script( 'dtheme_script_js' , get_template_directory_uri()."/js/script.js", array(), '1.0',true);
    wp_enqueue_script( 'dttheme_script_jquery' , "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1',true);
    
}

add_action( 'wp_enqueue_scripts' , 'dt_register_scripts' );


/* Add theme suppports */

function dt_theme_support () {
    add_theme_support ( 'title-tag' );
    
}

add_action ( 'after_setup_theme' , 'dt_theme_support' );

/*Register menus */

function dt_menus () {
    
    $locations = array(
           'primary'=>"Primary Menu" ,
           'footer'=>"Footer Menu"
    );

    register_nav_menus($locations);
}

add_action ( 'init' , 'dt_menus' );


/* Register Custom Post Type */


function dt_new_post_type_services() {
    $supports = array(
        'title',
        'editor',
        'author', 
        'thumbnail', 
        'excerpt', 
        'revisions', 
        'post-formats', 
        );

    $labels = array(
        'name' => _x('Services', 'plural'),
        'singular_name' => _x('Services', 'singular'),
        'menu_name' => _x('Services', 'admin menu'),
        'name_admin_bar' => _x('Services', 'admin bar'),
        'add_new' => _x('Add Service', 'add new service'),
        'add_new_item' => __('Add New Service'),
        'new_item' => __('New service', 'New Service'),
        'edit_item' => __( 'Edit service' ),
        'view_item' => __( 'View services' ),
        'all_items' => __('All services'),
        'search_items' => __('Search services'),
        'not_found' => __('No services found.'),
        );
        
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'hierarchical' => false,
        );

        
    register_post_type('services', $args);
    };


add_action( 'init' , 'dt_new_post_type_services' );