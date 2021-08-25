<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package basic
 */
global $post;
global $r_opt;
get_header();
?>
	<main id="primary" class="info-page mw">

		<?php
        $breadcrumbs = [
                [
                'name'=>'Главная',
                'link'=>get_bloginfo('url'),
                 ],
                [
                        'name'=>get_the_title()
                ]
        ];
        get_block('breadcrumbs',$breadcrumbs);

        $args = array();
        $author = get_field('blog_additional_author')[0];

        $args['blog_additional_short'] = get_field('blog_additional_short');

        $articles = get_posts(array(
            'post__not_in' => [get_the_ID()],
            'posts_per_page'	=> 4,
            'post_type'			=> 'post',
            'orderby' => 'publish_date',
            'order'   => 'DESC',
            'meta_query' => [
                [
                    'key' => 'blog_additional_author',
                    'value' => '"'.$author -> ID.'"',
                    'compare'=> 'LIKE',
                ]]

        ));
        foreach ($articles as $item){
            $args['articles'][] = array(
                    'name' => $item->post_title,
                    'link' => get_permalink($item -> ID),
            );
        }
        $args['title'] = get_the_title();
        get_block('blog_additional_block_short',$args);

        $args= array();
        $author = get_field('blog_additional_author')[0];
        $author_links = [
            'author_info_site'=>'site',
            'author_info_vk'=>'vk',
            'author_info_facebook'=>'fb',
            'author_info_twitter'=>'twitter',
        ];
        $socials = [];
        foreach ($author_links as $field=>$name)
        {
            if (get_field($field, $author->ID)!='')
                $socials[]=[
                        'name'=>$name,
                        'link'=>get_field($field, $author->ID)
                ];
        };

        $args = array (
            'author_info_position' => get_field('author_info_position',$author -> ID),
            'author_thumbnail' => get_the_post_thumbnail_url($author -> ID),
            'author_info_blog_title' =>  get_field('author_info_blog_title',$author -> ID),
            'author_info_title' => get_the_title($author->ID),
            'author_link'=>get_permalink($author->ID),
            'socials'=>$socials
        );
        get_block('blog_additional_block_author',$args);
        ?>
        <div class = "post-content mb60">
            <?php
        the_content();
        ?>
        </div>

	</main><!-- #main -->

<?php

get_footer();
