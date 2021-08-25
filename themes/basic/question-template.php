<?php
/*
Template Name: Вопросы
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
    'link' => get_bloginfo('url'),
    'name' => get_the_title($frontpage_id));
$args[] = array(
    'name' => get_the_title(),
);
echo '<div class="mw">';
get_block('breadcrumbs',$args);
echo '</div>';
$args = array();

$args['question_page_title'] = get_the_title();
$args['question_page_image'] = get_the_post_thumbnail_url();
$args['question_page_button_text'] = get_field('question_page_button_text');
$args['question_page_button_link'] = get_field('question_page_button_link');
$args['question_page_additional_text'] = get_field('question_page_additional_text');
$args['question_page_content'] = get_the_content();

get_block('question_page',$args);




$args = array();
/*$articles = get_posts(array(
    'posts_per_page'	=> -1,
    'post_type'			=> 'question',
    'post_status' => 'publish',
    'orderby' => 'publish_date',
    'order' => 'ASC',
));*/
$paged = ($wp_query->query_vars['paged'])?($wp_query->query_vars['paged']):1;



//$paged =1;
$args = array(
    'posts_per_page' =>20,
    'paged' =>$paged,
    'orderby' => 'publish_date',
    'order' => 'DESC',
    'post_type' => 'question',
    'suppress_filters' => true,
    'post_status' => 'publish',
    'fields' => 'ids',

);
//print_r($args);


$query = new WP_Query($args);


$articles = $query -> posts;



$check =  $query->max_num_pages;

$args = array ();
foreach ($articles as $item){
    $args[] = array(
        'question_item_answer' => get_field('question_item_answer',$item),
        'question_item_title_question' => 'Вопрос:',
        'question_item_title_answer' => 'Ответ:',
        'question_item_name' => get_field('question_item_name',$item),
        'question_date' => date_format(get_post_datetime($item),'d-m-Y'),
        'question_content' => get_post_field('post_content', $item),


    );



}
get_block("question_list",$args);
$big = 999999999; // need an unlikely integer
echo "<div class='pagination-list mw'>";
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'add_fragment' => '#questions',
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
        'title'=>'Ваш вопрос врачу',
        'placeholder'=>'Ваш вопрос',
        'form_type'=>'Вопрос врачу',
        'form_class'=>'bigform margin-form',
        'btn_text'=>'Отправить',
        'id'=>'question-form'
    ]);
get_block('contact_form_2_block');

get_footer();