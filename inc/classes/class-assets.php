<?php
/**
 * Enqueue Styles and Scripts
 *
 * @package Dentist
 */


class Assets
{
    function __construct()
    {
        
        add_action('wp_enqueue_scripts', [$this, 'dentist_enqueues']);
    }

    function dentist_enqueues()
    {
        $version = wp_get_theme()->get('Version');
    
        wp_register_style(
            'main-css', 
            DENTIST_DIR_URI . '/assets/build/css/main.css', 
            array(),
            $version,
            'all'
        );

        wp_register_script(
            'main-js', 
            DENTIST_DIR_URI ."/assets/build/js/main.js", 
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

}
