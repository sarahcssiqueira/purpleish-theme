<?php
/**
 * Template part for displaying custom post types: Skills.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<div class="inner-section-large">

	<div class="title-content"> 
		<h2> 
			<?php the_title(); ?>
		<h2>
	</div>

	<div class="text-content"> 
		<p><?php the_content(); ?></p>
	</div>

	<div class="button-dark">
		<a href="<?php echo get_home_url(); ?>">
		Back
		</a>
	</div>

</div>
