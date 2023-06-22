<?php
/**
 * Theme Supports
 *
 * @package Dentist
 */


class Supports
{
    function __construct()
    {
        
        add_action('after_setup_theme', [$this, 'theme_support' ]);
    }

    function theme_support()
    {
        
        add_theme_support('title-tag');
    }

}
