<?php
/**
 * Template part for displaying the content on static pages.
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?><div class=""> 
		<h2 class="section-title"> 
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
		<h2>
	</div>

	<div class="inner-large"> 
		<p><?php the_content(); ?></p>
	</div>
