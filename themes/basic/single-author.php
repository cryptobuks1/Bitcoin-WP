<?php
get_header();
?>

<main id="primary" class="page-container mw">
    <div class = "mw">
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
        <h1 class = "mb40">
            <?php
                the_title();
            ?>
        </h1>
        <div class = "post-content mb60">
            <?php the_content() ?>
        </div>
    </div>
</div>

<?php
get_footer();