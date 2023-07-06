<?php
/**
 * The template for displaying single posts.
 *
 * @package dentist_theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header(); ?>

	<div class="container-light">

			<?php
			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();

					get_template_part( 'template-parts/content', 'post' );

				}
			};
			?>

	</div>

<?php get_footer(); ?>
