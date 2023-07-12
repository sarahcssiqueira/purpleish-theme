<?php
/**
 *
 * The template for displaying a static front page.
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?><?php get_header(); ?>

	<main>

		<?php get_template_part( 'template-parts/section', 'heading' ); ?>

		<?php get_template_part( 'template-parts/section', 'banner' ); ?>

		<?php get_template_part( 'template-parts/section', 'counter' ); ?>

		<?php get_template_part( 'template-parts/section', 'services' ); ?>

		<?php get_template_part( 'template-parts/section', 'contact' ); ?>

</main>

<?php get_footer(); ?>
