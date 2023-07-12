<?php
/**
 * The template for displaying search results pages.
 *
 * @package purpleish_theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

		<main class="post-content">

			<?php
			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();

					get_template_part( 'template-parts/content', 'archive' );
				}
			};

			?>

		</main>

<?php get_footer(); ?>
