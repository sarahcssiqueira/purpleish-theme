<?php
/**
 * The template for displaying search results pages.
 *
 * @package dentist_theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

		<div class="post-content">

			<?php
			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();

					get_template_part( 'template-parts/content', 'archive' );
				}
			};

			?>

		</div>

<?php get_footer(); ?>
