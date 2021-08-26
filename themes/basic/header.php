<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basic
 */
global $r_opt;
require get_template_directory() . '/inc/block-manager.php';;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open();
?>

<div id="page">
    <header>
        <?php
        function check_acf_photo_gallery($name){
            global $post;
            $homeID = get_option('page_on_front');
            return !empty(acf_photo_gallery($name,$post->ID))?acf_photo_gallery($name,$post->ID):acf_photo_gallery($name,$homeID);
        }
        $args = [];
        get_block('test',$args);

        $args = [
            [
                'title'=>'Trusted platform<br>of the future',
                'description'=>'We Make it Easy to Buy, Sell, Store, Use and Accept Bitcoin Best Exchange venue & of bitcoin CC.',
                'img'=> get_template_directory_uri().'/inc/images/slider-rimg.png',
                'bg'=> get_template_directory_uri().'/inc/images/slider-bg.jpg',
                'btn_text'=>'Open account',
                'btn_link'=>'',
                'position'=>'left',
            ],
            [
                'title'=>'Trusted platform<br>of the future',
                'description'=>'We Make it Easy to Buy, Sell, Store, Use and Accept Bitcoin Best Exchange venue & of bitcoin CC.',
                'img'=> get_template_directory_uri().'/inc/images/slider-rimg.png',
                'bg'=> get_template_directory_uri().'/inc/images/slider-bg.jpg',
                'btn_text'=>'Open account',
                'btn_link'=>'',
                'position'=>'center',
            ],
            [
                'title'=>'Trusted platform<br>of the future',
                'description'=>'We Make it Easy to Buy, Sell, Store, Use and Accept Bitcoin Best Exchange venue & of bitcoin CC.',
                'img'=> get_template_directory_uri().'/inc/images/slider-rimg.png',
                'bg'=> get_template_directory_uri().'/inc/images/slider-bg.jpg',
                'btn_text'=>'Open account',
                'btn_link'=>'',
                'position'=>'right',
            ],
        ];

        get_block('main_slider',$args);
        ?>
	</header>

