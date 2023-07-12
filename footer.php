<?php
/**
 *
 * The template for displaying the footer.
 *
 * @package purpleish_theme
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?><footer class="container-dark inner-medium flex-column">
<span>
	PurpleIsh Theme by
	<a href="https://sarahjobs.com/">Sarah Siqueira</a>
</span>
<span class="">© 2021 - <?php echo esc_html( gmdate( 'Y' ) ); ?> All rights reserved.
</span>
</footer>
<?php wp_footer(); ?>
</body>
