<?php
/**
 * The header
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package dentist_theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<title><?php echo esc_html( get_bloginfo( 'name' ) ); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body> 
<header class="container-light inner-small flex">

		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
		?>

	<?php

	wp_nav_menu(
		[
			'menu'            => 'primary',
			'menu_id'         => 'nav', // %1$s
			'menu_class'      => 'nav flex', // %2$s ... %3$s the list itemns
			'container'       => 'nav',
			'container_class' => 'nav flex',
			'theme_location'  => 'primary',
			'items_wrap'      => '<ul class="%2$s" id="%1$s">%3$s</ul>',
			'walker'          => new nav_walker(),

		]
	)

	?>

	<div>
		<button class="button-dark">Book an appointment</button>
	</div>
			   
	<div class="header-menu-mobile">
	</div>
</header>
