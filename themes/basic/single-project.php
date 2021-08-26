<?php
get_header();
$rating1 = get_field('project_rating_1');
$rating2 = get_field('project_rating_2');
$rating3 = get_field('project_rating_3');
$rating4 = get_field('project_rating_4');
$total_rating = number_format(($rating1+$rating2+$rating3+$rating4)/4,2,',','');
get_block('single_project',[
   'profit'=>get_field('project_money'),
   'link'=>get_field('https://bondappetit.io/'),
    'total_rating'=>$total_rating,
    'rating1'=>$rating1,
    'rating2'=>$rating2,
    'rating3'=>$rating3,
    'rating4'=>$rating4,
    'qr_code'=>get_template_directory_uri().'/inc/images/qrcode.png',
    'tabs'=>
    [
        [
            'name'=>get_field('project_sub_1')
        ],
        [
            'name'=>get_field('project_sub_2')
        ],
        [
            'name'=>get_field('project_sub_3')
        ],
    ]

]);

get_footer();