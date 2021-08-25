<?php
/*
Template Name: Шаблон партнеры(список городов)
Template Post Type: page
*/
get_header();
$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'fp-template.php',
));
?>
    <div class="page-container mw">
        <h1 class="mb40 mw"><?php the_title() ?></h1>
        <ul class = "partners-city-list">
            <?php
            foreach ($pages as $page)
            {
                ?>
                <li>
                    <a href = "<?php echo get_permalink($page->ID) ?>">
                        <?php echo $page->post_title ?>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
<?php
get_block('contact_form_2_block');
get_footer();