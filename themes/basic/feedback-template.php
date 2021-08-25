<?php
/*
Template Name: Отзывы
Template Post Type: page
*/
/*
$cats = get_terms('product_cat');
foreach ($cats as $c)
{
    delete_field('meta_title','product_cat_'.$c->term_id);
    delete_field('meta_description','product_cat_'.$c->term_id);
    delete_field('description','product_cat_'.$c->term_id);
    delete_field('header2','product_cat_'.$c->term_id);
}

$args     = array( 'post_type' => 'product', 'posts_per_page' => -1 );
$products = get_posts( $args );
foreach ($products as $p)
{
    delete_field('meta_title',$p->ID);
    delete_field('meta_description',$p->ID);
    wp_update_post( array('ID' => $p->ID, 'post_content' => '') );
}*/

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
    'link' => get_bloginfo('url'),
    'name' => get_the_title($frontpage_id));
$args[] = array(
    'name' => get_the_title(),
);
echo '<div class="mw">';
get_block('breadcrumbs',$args);
echo '</div>';
$args = array();
$args = array();
$args['feedback_page_subtitle'] = get_field('feedback_page_subtitle');
$args['feedback_page_content'] = get_the_content();
$args['feedback_page_button_text'] = get_field('feedback_page_button_text');
get_block('feedback_page',$args);




$args = array();
/* $articles = get_posts(array(
    'posts_per_page'	=> -1,
    'post_type'			=> 'feedback',
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'order' => 'ASC',
)); */


$paged = ($wp_query->query_vars['paged'])?($wp_query->query_vars['paged']):1;



//$paged =1;
$args = array(
    'posts_per_page' =>20,
    'paged' =>$paged,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'feedback',
    'suppress_filters' => true,
    'post_status' => 'publish',
    'fields' => 'ids',

);

//print_r($args);


$query = new WP_Query($args);


$articles = $query -> posts;



$check =  $query->max_num_pages;

$args =array();
foreach ($articles as $item){
    $blocks = array();
    $images = acf_photo_gallery('feedback_items',$item);
    $i = 0;

    foreach ($images as $single_image) {
        $i++;
        $content = array();
        $img = wp_get_attachment_image_src($single_image['id'],'full');
        $content['full_image_url'] = $img[0];
        $content['img_url'] = wp_get_attachment_image_url($single_image['id'],'medium');
        $content['width'] = $img[1];
        $content['height'] = $img[2];
        $content['title'] = $single_image['title'];
        $content['url'] = $single_image['url'];
        $blocks[] = $content;
    };


    $course_link = '';
    $course = '';
    if (get_field('feedback_course',$item)!='') {
        $course_link = get_permalink(get_field('feedback_course', $item)[0]->ID);
        $course =get_field('feedback_course',$item)[0]->post_title;
    }



    $args[] = array(
        'id' => $item,
        'feedback_track' => get_field('feedback_track',$item),
        'feedback_name' => get_field('feedback_name',$item),
        'feedback_date' => date_format(get_post_datetime($item),'d-m-Y'),
        'feedback_city' => get_field('feedback_city',$item),
        'feedback_diagnosis' => get_field('feedback_diagnosis',$item),
        'feedback_course_link' => $course_link,
        'feedback_course' =>  str_replace( 'Курс ', '', $course),
        'feedback_content' => get_post_field('post_content', $item),
        'feedback_items' => $blocks,

    );
}
//print_r($args);

get_block("feedback_list",$args);

$big = 999999999; // need an unlikely integer
echo "<div class='pagination-list mw'>";
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'add_fragment' => '#feedback-list',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $query->max_num_pages,
    'prev_next' => false,
) );

wp_reset_postdata();
echo "</div>";
?>
</div>
    <?php
get_block('contact_form',
    [
        'code'=>'[contact-form-7 id="130"]',
        'title'=>'Нам важно ваше мнение!',
        'form_type'=>'Форма отзыва',
        'placeholder'=>'Ваш отзыв',
        'form_class'=>'bigform margin-form',
        'btn_text'=>'Отправить',
        'id'=>'review-form'
    ]);

get_block('contact_form_2_block');
get_footer();
