<?php
/**
 * Template part for displaying the content on static pages.
 *
 * @package dentist_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>
<div class="inner-section-large">

	<div class="title-content"> 
		<h2> 
			<a href="
				<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a> 
		<h2>
</div>

	<div class="text-content"> 
		<p> <?php the_content(); ?> </p>
	</div>

	<div class="back-button">
		<a href="<?php echo esc_html( get_home_url() ); ?>">
		Back Home
		</a>
	</div>
</div>
