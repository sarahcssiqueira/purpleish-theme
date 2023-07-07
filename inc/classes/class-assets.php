<?php
/**
 * Enqueue Styles and Scripts
 *
 * @package dentist_theme
 */

class Assets {

	function __construct() {

		add_action( 'wp_enqueue_scripts', [ $this, 'dentist_enqueues' ] );
	}

	function dentist_enqueues() {
		$version = wp_get_theme()->get( 'Version' );

		wp_register_style(
			'main-css',
			DENTIST_DIR_URI . '/assets/build/css/main.css',
			[],
			$version,
			'all'
		);

		wp_register_style(
			'font-awesome',
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
			[],
			$version,
			'all'
		);

		wp_register_script(
			'main-js',
			DENTIST_DIR_URI . '/assets/build/js/main.js',
			[],
			$version,
			true
		);

		wp_enqueue_style(
			'main-css',
			get_stylesheet_uri()
		);

		wp_enqueue_style(
			'font-awesome',
			get_stylesheet_uri()
		);

		wp_enqueue_script(
			'main-js'
		);
	}

}
