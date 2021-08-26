<?php
/*
Template Name: Шаблон главной
Template Post Type: page
*/
global $post;
global $r_opt;
//file_get_contents('https://a.sofosbuvir-gepamir.ru/daklatasvir/');
get_header();

$terms = get_terms( array(
    'taxonomy' => 'directions',
    'hide_empty' => true,
) );

foreach ($terms as $single_term){
    $block = [];


    $args =[];
    $args['name'] = $single_term->name;
    $args['link'] = get_term_link($single_term->term_id);
    $projects = get_posts([
        'post_type'=>'project',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'directions',
                'field' => 'term_id',
                'terms' => $single_term->term_id,
            ))]);
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
            $args['project'][] = $data;
        }

        get_block('project_list_main',$args);

}



////


get_footer();


