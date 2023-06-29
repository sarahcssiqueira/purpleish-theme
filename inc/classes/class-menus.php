<?php
/**
 * Register Menus
 *
 * @package dentist_theme
 */

class Menus {

	function __construct() {
		add_action( 'init', array( $this, 'dentist_register_menus' ) );
	}

	function dentist_register_menus() {
		$locations = array(
			'primary' => 'Primary Menu',
			'footer'  => 'Footer Menu',
		);

		register_nav_menus( $locations );
	}
}
