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

        add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			]
            );
    }

}
