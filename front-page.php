<?php
/**
 *
 * The template for displaying a static front page.
 *
 * @package dentist_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?><?php get_header(); ?>

	<div class="content">

		<?php get_template_part( 'template-parts/section', 'heading' ); ?>

		<?php get_template_part( 'template-parts/section', 'banner' ); ?>

		<?php get_template_part( 'template-parts/section', 'services' ); ?>

		<?php get_template_part( 'template-parts/section', 'blog' ); ?>

		<?php get_template_part( 'template-parts/section', 'contact' ); ?>

		</div>

<?php get_footer(); ?>
