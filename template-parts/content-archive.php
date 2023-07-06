<?php
/**
 * Template part for displaying archives.
 *
 * @package dentist_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>
<div class="">

	<div class=""> 
		<h2> 
			<a href="
				<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a> 
		<h2>
	</div>

	<span class="">
		<?php the_date(); ?>
	</span>

	<div class="">
			<?php the_excerpt(); ?>
	</div>

	<div class="">
		<a class="" href="<?php the_permalink(); ?>">Read more &rarr;</a>
	</div>

</div>
