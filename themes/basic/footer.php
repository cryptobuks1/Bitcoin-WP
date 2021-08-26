<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basic
 */
$args = [];
get_block('footer_block',$args);
?>
</div>

<?php wp_footer(); ?>

</body>
</html>
