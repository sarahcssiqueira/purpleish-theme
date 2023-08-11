<?php
/**
 * Template part for displaying posts.
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?><div class="inner-medium"> 
		<h2 class="section-title"> 
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
		</h2>

	<p class="date inner-small"><?php echo get_the_date(); ?></p>

	<div class="inner-small"><p><?php the_content(); ?></p>
	</div>

</div>

