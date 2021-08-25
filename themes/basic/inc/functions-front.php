<?php
if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.1' );
}
function basic_scripts() {
wp_enqueue_style( 'basic-style', get_stylesheet_uri(), array(), _S_VERSION );

wp_enqueue_style( 'main-style', get_template_directory_uri().'/inc/css/style.min.css', array(), _S_VERSION );
wp_enqueue_script( 'main-script',get_template_directory_uri().'/inc/js/script.js', array('jquery'), _S_VERSION,true );

    
//wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/inc/css/slick.css');
//wp_enqueue_script( 'slick-script',get_template_directory_uri().'/inc/js/slick.min.js', array(), _S_VERSION,true );

    //wp_dequeue_style( 'wp-block-library' );
    //wp_dequeue_style( 'wc-block-style' );
}
add_action( 'wp_enqueue_scripts', 'basic_scripts' );

/*
function my_stylesheet1(){
    wp_enqueue_style("style-admin",get_template_directory_uri() . '/inc/css/admin_clear.css');
}
add_action('admin_head', 'my_stylesheet1');*/

if(!is_admin()) {
    function add_asyncdefer_attribute($tag, $handle) {
        // if the unique handle/name of the registered script has 'async' in it
        if ((strpos($handle, 'async') !== false)||(strpos($handle, 'photoswipe') !== false)) {
            // return the tag with the async attribute
            return str_replace( '<script ', '<script async ', $tag );
        }
        // if the unique handle/name of the registered script has 'defer' in it
        else if (strpos($handle, 'defer') !== false) {
            // return the tag with the defer attribute
            return str_replace( '<script ', '<script defer ', $tag );
        }
        // otherwise skip
        else {
            return $tag;
        }
    }
    add_filter('script_loader_tag', 'add_asyncdefer_attribute', 10, 2);
}


