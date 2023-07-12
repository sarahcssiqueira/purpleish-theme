<?php
/**
 * Template part for displaying services section
 *
 * @package purpleish_theme
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<div class="container-light inner-medium">
	<div class="">

		<h2>Custom Post Types</h2>
	   
		<div class="">
			<ul class="">

			<?php
				$args = [
					'post_type'      => 'cpt',
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
