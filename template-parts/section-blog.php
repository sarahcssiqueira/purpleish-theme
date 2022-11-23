<?php
/**
 * Template part for displaying services section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>
<div class="containerLight">
        <div class="innerSectionLarge">

          <div class="divider">
              <hr class="">    
          </div>    

            <h2>Blog</h2>

              <div class="servicesList">
                <ul class="services">
                
                  <?php $args = array(
                    'post_type' =>'post',
                    'posts_per_page'=>-1, );

                    $post_data = new WP_Query ( $args );


                  if ( $post_data-> have_posts () ) {
                      while ( $post_data-> have_posts () ) {

                      $post_data->the_post (); ?>

                      <li> 
                        <a href="<?php the_permalink();?>">
                        <?php echo get_the_title();?>
                        </a>
                      </li>

                    <?php
                    }
                  }; ?>
    
                </ul>
              </div>

        </div>
      </div>