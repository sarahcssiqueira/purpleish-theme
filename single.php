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

			<?php get_template_part( 'template-parts/content', 'post' ); ?>

</nav>

</main>

<?php get_footer(); ?>
