<?php
/*
Template Name: Контент страница
Template Post Type: page
*/
global $post;
global $r_opt;
get_header();
?>
<main id="primary" class="page-container mw">
    <?php
$args = array();
$frontpage_id = get_option( 'page_on_front' );
$args[] = array(
    'link' => get_bloginfo('url'),
    'name' => get_the_title($frontpage_id));
$args[] = array(
    'name' => get_the_title(),
);
echo '<div class="mw">';
get_block('breadcrumbs',$args);
echo '</div>';
echo '        <h1 class="mb40 mw">'.get_the_title().'</h1>';
$args = array();
the_content();
?>
</main><!-- #main -->
<?php


get_block('contact_form_2_block');
get_footer();

