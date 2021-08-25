<?php
/*
Template Name: exel
Template Post Type: page
*/
wp_head();

$work_data='error';

if ( $xlsx = SimpleXLSX::parse($_SERVER['DOCUMENT_ROOT'].'/test1.xlsx') ) {
$work_data = $xlsx -> rows();
}



array_shift($work_data);
$i=0;
echo '<pre>';
print_r($work_data);
echo '</pre>';

//foreach ($work_data as $single_item) {
foreach ($work_data as $single_item) {
//$single_item = $work_data[0];

$date_string = $single_item[12];
$date_stamp = strtotime($date_string);
// returns: int(1000166400)

    $postdate = date("Y-m-d H:i:s", $date_stamp);
// returns: string(19) "2001-09-11 00:00:00"
    print_r($postdate);
    $my_post = array(
        'post_title' => $single_item[3],
        'post_type' => 'feedback',
        'post_status' => 'publish',
        'post_content' => $single_item[1],
        'post_date' => $postdate,
    );
    $id_post = wp_insert_post($my_post);


    update_field('feedback_name', $single_item[3], $id_post);

    update_field('feedback_city', $single_item[9], $id_post);
    update_field('feedback_track', $single_item[4], $id_post);
    update_field('feedback_diagnosis ', 'Гепатит C', $id_post);
    print_r($id_post);
    echo('<br>');
    $i++;
    echo $i.'<br>';

}









//echo ($object->have_posts())?'<div>NETY</div>':'<div>'.$object.'</div>';
