<?php
/**
 * Template part for displaying archives.
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

	<span class="date">
		<?php the_date(); ?>
	</span>

	<div class="text-content">
			<?php the_excerpt(); ?>
	</div>

	<div class="back-button">
		<a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
	</div>

</div>
