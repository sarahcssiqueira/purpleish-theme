<?php
/**
 * Theme Supports
 *
 * @package dentist_theme
 *
 */

class Supports {

	function __construct() {

		add_action( 'after_setup_theme', array( $this, 'theme_support' ) );
	}

	function theme_support() {

		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			array(
				'header-text' => array(
					'site-title',
					'site-description',
				),
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		add_theme_support(
			'custom-background',
			array(
				'default-color'  => '3c738c',
				'default-image'  => get_template_directory_uri() . '/assets/src/img/default-bg.jpg',
				'default-repeat' => 'no-repeat',
			)
		);
	}

}
