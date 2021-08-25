<?php
/*
Template Name: Шаблон главной
Template Post Type: page
*/
global $post;
global $r_opt;
//file_get_contents('https://a.sofosbuvir-gepamir.ru/daklatasvir/');
get_header();
function check_get_field($name){
$homeID = get_option('page_on_front');
return (get_field($name)!='')?get_field($name):get_field($name,$homeID);
}

function check_acf_photo_gallery($name){
    global $post;
    $homeID = get_option('page_on_front');
    return !empty(acf_photo_gallery($name,$post->ID))?acf_photo_gallery($name,$post->ID):acf_photo_gallery($name,$homeID);
}
$args = [];
get_block('test',$args);
