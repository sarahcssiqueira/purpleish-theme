<?php
/**
 * Register Menus
 *
 * @package dentist_theme
 *
 */

class Menus {

	function __construct() {
		add_action( 'init', [ $this, 'dentist_register_menus' ] );
		add_action( 'after_setup_theme', [ $this, 'register_navwalker' ] );
	}

	function dentist_register_menus() {
		$locations = [
			'primary' => 'Primary Menu',
			'footer'  => 'Footer Menu',
            'mobile' => 'Mobile Menu'
		];

		register_nav_menus( $locations );
	}


	function register_navwalker() {
		include DENTIST_DIR_PATH . '/inc/nav-walker.php';
	}
}
