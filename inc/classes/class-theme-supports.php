<?php
/**
 * Theme Supports
 *
 * @package purpleish_theme
 */

class Supports {

	public function __construct() {

		add_action( 'after_setup_theme', [ $this, 'theme_support' ] );
		add_action( 'after_setup_theme', [ $this, 'thumbnail_custom_size' ] );
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

	public function thumbnail_custom_size() {
		add_image_size( 'blog-grid', 400, 200, true );
	}


}
