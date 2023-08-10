<?php

class nav_walker extends Walker_Nav_menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$tmp_class = 'child-' . $depth;

		$output .= "<ul class='' . $tmp_class . ''>";
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		// var_dump($item);

		$output .= "<li class='nav_list_item'>" . "<a href='$item->url'> $item->title </a>";
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}

}

class nav_walker_mobile extends Walker_Nav_menu {


	function start_lvl( &$output, $depth = 0, $args = null ) {
		$tmp_class = 'child-' . $depth;

		$output .= "<ul class='' . $tmp_class . ''>";
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		// var_dump($item);

		$output .= "<li class='nav-mobile_list'>" . "<a class='nav-mobile_list_item' href='$item->url'> $item->title </a>";
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}

}


