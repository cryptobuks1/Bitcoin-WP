<?php





//file_get_contents('https://a.sofosbuvir-gepamir.ru/daklatasvir/');
get_header();

get_block('category_header_block',[
    'category_title'=>get_queried_object()->name,
    'category_description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took '
]);

$projects = get_posts([
    'post_type'=>'project',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'directions',
            'field' => 'term_id',
            'terms' => get_queried_object()->term_id,
))]);
$args = [];
foreach ($projects as $p)
{
    $data = [];
    $data['name'] = $p->post_title;
    $data['description'] = get_field('project_short_description',$p->ID);
    $data['external_link'] = get_field('project_ref_link',$p->ID);
    $data['link'] = get_post_permalink($p->ID);
    $data['profit'] = get_field('project_money',$p->ID);
    $data['rating1'] = get_field('project_rating_1',$p->ID);
    $data['rating2'] = get_field('project_rating_2',$p->ID);
    $data['rating3'] = get_field('project_rating_3',$p->ID);
    $data['rating4'] = get_field('project_rating_4',$p->ID);
    $data['total_rating'] = number_format(($data['rating1']+$data['rating2']+$data['rating3']+$data['rating4'])/4,2,'.','');
    $args[] = $data;
}
get_block('project_detail_panel',$args);
get_footer();

