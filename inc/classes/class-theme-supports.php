<?php
/**
 * Theme Supports
 *
 * @package purpleish_theme
 */

class Supports {

	public function __construct() {

		add_action( 'after_setup_theme', [ $this, 'theme_support' ] );
	}

	public function theme_support() {

		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 200,
				'flex-height' => true,
				'flex-width'  => true,
			]
		);

		add_theme_support( 'post-thumbnails' );
	}

}
