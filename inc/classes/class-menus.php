<?php
/**
 * Register Menus
 *
 * @package purpleish_theme
 */

class Menus {

	public function __construct() {
		add_action( 'init', [ $this, 'purpleish_register_menus' ] );
		add_action( 'after_setup_theme', [ $this, 'register_navwalker' ] );
	}

	public function purpleish_register_menus() {
		$locations = [
			'primary' => 'Primary Menu',
			'footer'  => 'Footer Menu',
			'mobile'  => 'Mobile Menu',
		];

		register_nav_menus( $locations );
	}


	public function register_navwalker() {
		include PURPLEISH_DIR_PATH . '/inc/utils/nav-walker.php';
	}
}
