<?php
/**
 * Template part for displaying posts.
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<div class="container-light inner-small">

	<div class=""> 
		<h2> 
			<a href="
				<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a> 
		<h2>
	</div>

	<div class=""> 
		<p> <?php the_content(); ?> </p>
	</div>

	<div class="">
		<a href="<?php echo esc_html( get_home_url() ); ?>" class="button-dark">
		Back Home
		</a>
</div>
</div>
