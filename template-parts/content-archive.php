<?php
/**
 * Template part for displaying archives.
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>
<div class="inner-medium grid-item">

	<div class="inner-small"> 
		<h2 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h2>
	</div>

	<p class="date"><?php the_date(); ?></p>

	<p class="inner-small"><?php the_excerpt(); ?></p>

	<a href="<?php the_permalink(); ?>"><button class="button-light-small">Read More &rarr;</button></a>


</div>
