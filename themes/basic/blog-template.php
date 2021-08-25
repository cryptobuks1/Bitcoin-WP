<?php
/*
Template Name: Архив инфо страниц
Template Post Type: page
*/
get_header();
?>
<main id="primary" class="page-container mw">
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
    ?>
    <h2 class = "page-title mb40"><?php the_title() ?></h2>
    <?php
    $posts = get_posts(['numberofposts'=>-1]);
    ?>
    <div class = "mw mb60">
        <?php
    foreach ($posts as $p)
    {
        ?>
        <div class = "mb20 fs18">
            <a href = "<?php echo get_permalink($p->ID) ?>"><?php echo $p->post_title ?></a>
        </div>
        <?php
    }
    ?>
    </div>
</main>
<?php
get_footer();