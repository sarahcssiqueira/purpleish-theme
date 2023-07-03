<?php
/**
 * Template part for displaying services section.
 *
 * @package dentist_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>
<div class="container-light">
		<div class="inner-section-large">  

			<h2>Blog</h2>

			<div class="services-list">
				<ul class="services">

				<?php
					$args = [
						'post_type'      => 'post',
						'posts_per_page' => -1,
					];

					$post_data = new WP_Query( $args );


					if ( $post_data->have_posts() ) {
						while ( $post_data->have_posts() ) {

							$post_data->the_post();
							?>

					<li> 
						<a href="<?php the_permalink(); ?>">
											<?php echo esc_html( get_the_title() ); ?>
						</a>
					</li>

										<?php
						}
					};
					?>

				</ul>
			</div>

		</div>
	</div>
