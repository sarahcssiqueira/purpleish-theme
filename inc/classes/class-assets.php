<?php
/**
 * Enqueue Styles and Scripts
 *
 * @package purpleish_theme
 */

class Assets {

	function __construct() {

		add_action( 'wp_enqueue_scripts', [ $this, 'purpleish_enqueues' ] );

	}

	function purpleish_enqueues() {
		$version = wp_get_theme()->get( 'Version' );

		wp_register_style(
			'main-css',
			PURPLEISH_DIR_URI . '/dist/css/main.css',
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
			PURPLEISH_DIR_URI . '/dist/js/main.js',
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

		wp_register_style(
			'google-fonts',
			'href="https://fonts.googleapis.com/css2?family=Fasthand&family=Oswald:wght@400;500;600;700&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;500;700;900&display=swap',
			[],
			$version,
			'all'
		);

		wp_enqueue_style(
			'google-fonts',
			get_stylesheet_uri()
		);
	}

}
