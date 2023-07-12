<?php
/**
 * The template for displaying single posts.
 *
 * @package purpleish_theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header(); ?>

	<main class="container-light">

			<?php
			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();

					get_template_part( 'template-parts/content', 'post' );

				}
			};
			?>

</main>

<?php get_footer(); ?>
