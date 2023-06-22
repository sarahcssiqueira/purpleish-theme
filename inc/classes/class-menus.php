<?php
/**
 * Register Menus
 *
 * @package Dentist
 */

class Menus
{
    function __construct()
    {
        add_action('init', [$this,'dentist_register_menus']);
    }

    function dentist_register_menus()
    {
        $locations = array(
            'primary'=>"Primary Menu" ,
            'footer'=>"Footer Menu"
        );
 
        register_nav_menus($locations);
    }
}
