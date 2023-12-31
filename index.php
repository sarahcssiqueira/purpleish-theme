<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<?php get_header(); ?>

	<div class="container-light">

		<?php
		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', 'archive' );

			}
		};
		?>
		<div class="inner-medium">

<? require_once PURPLEISH_DIR_PATH . '/inc/classes/class-features.php'; ?>

	<?php
	$pagination = new Features();
	$pagination->numeric_pagination();
	?>

	</div>
</div>

<?php get_footer(); ?>
