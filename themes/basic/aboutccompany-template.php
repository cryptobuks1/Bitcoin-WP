<?php
/*
Template Name: Шаблон о компании
Template Post Type: page
*/
global $post;
global $r_opt;

get_header();
?>
<div class = "page-container">
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

$images = acf_photo_gallery('about_company_block_partners_items',$post->ID);

$i = 0;
$partners = array();
foreach ($images as $item) {
    $i++;
    $content = array();
    $content['full_image_url'] = $item['full_image_url'];
    $content['caption'] =  $item['caption'];
    $content['title'] = $item['title'];
    $content['url'] = $item['url'];
    $partners[] = $content;
};


$images = acf_photo_gallery('about_company_block_partners_items',$post->ID);
$i = 0;
$partners = array();
foreach ($images as $item) {
    $i++;
    $content = array();
    $content['full_image_url'] = $item['full_image_url'];
    $content['caption'] =  $item['caption'];
    $content['title'] = $item['title'];
    $content['url'] = $item['url'];
    $partners[] = $content;
};
$images = acf_photo_gallery('about_company_block_assortment_items',$post->ID);
$i = 0;
$items = array();
foreach ($images as $item) {
    $i++;
    $content = array();
    $content['full_image_url'] = $item['full_image_url'];
    $content['caption'] =  $item['caption'];
    $content['title'] = $item['title'];
    $content['url'] = $item['url'];
    $items[] = $content;
};

$args = array(
    'about_company_block_title' => get_field('about_company_block_title',$post->ID),
    'about_company_block_logo' => get_field('about_company_block_logo',$post->ID),
    'about_company_block_content' => get_field('about_company_block_content',$post->ID),
    'about_company_block_partners_title' => get_field('about_company_block_partners_title',$post->ID),
    'about_company_block_partners_items' => $partners,
    'about_company_block_assortment' => get_field('about_company_block_assortment',$post->ID),
    'about_company_block_assortment_items' => $items,
    'about_company_block_bottom_content' => get_the_content(),


);


get_block('about_company_block',$args);
?>
</div>
<?php
get_block('contact_form_2_block');

get_footer();