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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>

<body> 
  <header class="header">

          <div class="header-title">
          <?php
    if (function_exists('the_custom_logo') ) {
        the_custom_logo();
    }
    ?>
              <a href="<?php echo get_home_url(); ?>">
                  <?php echo get_bloginfo('name'); ?>
              </a>
          </div>

          <div class="header-menu">
              <div class="header-menu-links">
                <?php wp_nav_menu(
                    array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                            'items_wrap'=>'<li>%3$s</li>'
                              )
                ); 
?>
              </div>
          </div>
              
          <div class="header-menu-mobile">
              <i class="fa-solid fa-bars"></i>
          </div>
  </header>
