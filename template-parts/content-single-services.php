<?php
/**
 * Template part for displaying custom post types: Skills.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>

<div class="postContent">

    <div class="titleContent"> 
        <h2> 
			<?php the_title(); ?>
		<h2>
    </div>
    
    <div class="textContent"> 
        <p><?php the_content();?></p>
    </div>

    <div class="backButton">
        <a href="<?php echo get_home_url(); ?>">
              Back
        </a>
    </div>

</div>