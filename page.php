<?php
/**
 * The template for displaying static pages
 *
 * This is the template that displays all pages by default.
 *
 * @package dentist_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<?php get_header(); ?>

<main class="container-light">

		<?php
		if ( have_posts() ) {

			while ( have_posts() ) {

				the_post();

				get_template_part( 'template-parts/content', 'page' );

			}
		};
		?>

</main>

<?php get_footer(); ?>
