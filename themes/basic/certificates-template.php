<?php
/*
Template Name: Сертификаты
Template Post Type: page
*/
global $post;
global $r_opt;
global $wp_query;

get_header();
?>
<div class = "page-container">
<?php
$args = array();
$frontpage_id = get_option( 'page_on_front' );
$args[] = array(
    // 'link' => get_post_permalink($frontpage_id),
    'link' => get_bloginfo('url'),
    'name' => get_the_title($frontpage_id));
$args[] = array(
    'name' => get_the_title(),
);
echo '<div class="mw">';
get_block('breadcrumbs',$args);
echo '</div>';


$images = acf_photo_gallery('certificates_page_items',$post->ID);
$i = 0;

foreach ($images as $single_image) {
    $i++;
    $content = array();
    $img_url = wp_get_attachment_image_url($single_image['id'],'medium');
    $content['img_url'] = $img_url;
    $img = wp_get_attachment_image_src($single_image['id'],'full');
    $content['full_image_url'] = $img[0];
    $content['width'] = $img[1];
    $content['height'] = $img[2];
    $content['title'] = $single_image['title'];
    $content['caption'] = $single_image['caption'];
    $content['url'] = $single_image['url'];

    if (strpos($img_url, '/partners_')) {
        $blocks2[] = $content;
    }else{
        $blocks[] = $content;        
    }
};

// echo "<pre>".print_r($content,true).'</pre>';

$args = array (
    'certificates_page_title' => get_the_title(),
    'certificates_page_content' => get_the_content(),
    'certificates_page_items' => $blocks,
    'certificates_page_items2' => $blocks2,


);

get_block('certificates_page',$args);
?>
</div>



<div class="mw">
    <div class="sertificates_parttners">
        <div class = "pswp-gallery d-flex" >
            <a href="">
                <img src="" alt="">
            </a>
        </div>
    </div>
</div>





<?php
get_block('contact_form_2_block');



get_footer();