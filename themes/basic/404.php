<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package basic
 */

get_header();
?>
	<main id="primary" class="site-main mw tc">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Страница удалена или перенесена!', 'basic' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content ">
				<p><?php esc_html_e( 'Но не спешите уходить! Мы обязательно вам поможем', 'basic' ); ?></p>
                <a href="/">Вернуться на главную</a>



			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
