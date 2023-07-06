<?php
/**
 * Template part for displaying custom post types
 *
 * @package dentist_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<div class="">

	<div class=""> 
		<h2> 
			<?php the_title(); ?>
		<h2>
	</div>

	<div class=""> 
		<p><?php the_content(); ?></p>
	</div>

	<div class="">
		<a href="<?php echo esc_html( get_home_url() ); ?>">
		Back
		</a>
	</div>

</div>
