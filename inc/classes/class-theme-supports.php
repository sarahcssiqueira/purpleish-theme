<?php
/**
 * Theme Supports
 *
 * @package purpleish_theme
 */

class Supports {

	function __construct() {

		add_action( 'after_setup_theme', [ $this, 'theme_support' ] );
	}

	function theme_support() {

		add_theme_support( 'title-tag' );

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

		add_theme_support(
			'custom-background',
			[
				'default-color'  => '3c738c',
				'default-image'  => get_template_directory_uri() . '/assets/src/img/default-bg.jpg',
				'default-repeat' => 'no-repeat',
			]
		);
	}

}
