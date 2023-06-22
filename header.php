<?php
/**
 * The header for Resume Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body> 
  <header class="header">

        <div class="header-title">
          
            <a href="<?php echo get_home_url(); ?>">
            <?php if (function_exists('the_custom_logo') ) {
                    the_custom_logo();
            }
            ?>
            </a>
        </div>

        <div class="header-menu">
            <?php wp_nav_menu(
                array(
                    'menu'=>'primary',
                    'container'=>'',
                    'theme_location'=>'primary',
                    'items_wrap'=>'<li>%3$s</li>'
                    )
            );?>
        </div>
              
        <div class="header-menu-mobile">
            <i class="fa-solid fa-bars"></i>
        </div>
  </header>
