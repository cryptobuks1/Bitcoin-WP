<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basic
 */

get_header();
?>
	<main id="primary" class="page-container mw">
		<?php
		while ( have_posts() ) :
			the_post();
		    $breadcrumbs =
                [
                    [
                       'link'=>get_bloginfo('url'),
                       'name'=>'Главная'
                    ],
                    [
                            'name'=>get_the_title()
                    ]
                    ];
		    get_block('breadcrumbs',$breadcrumbs);
		    ?>
            <h1 class = "mb40"><?php the_title() ?></h1>
            <?php
            the_content();
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
