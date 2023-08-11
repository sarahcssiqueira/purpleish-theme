<?php
/**
 * Template part for displaying services section.
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>
<div class="container-light inner-large">

<h2 class="section-title">Latest Posts</h2>

	<div class="grid">

		<?php
			$args = [
				'post_type'      => 'post',
				'posts_per_page' => 3,
			];

			$post_data = new WP_Query( $args );

			if ( $post_data->have_posts() ) {
				while ( $post_data->have_posts() ) {

						$post_data->the_post();
					?>

			<div class="grid-item inner-small">
					<?php the_post_thumbnail(); ?>
				<h2 class="inner-small"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>"><button class="button-light-small">Read More</button></a>
			</div>

					<?php
				}
			};
			?>

		</div>
</div>
