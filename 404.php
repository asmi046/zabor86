<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zabor
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				<h1>404</h1>
				<p>Что то пошло не так!</p>
			</div>
		</section><!-- .error-404 -->

		<?php get_template_part('template-parts/uslugu-blk');?> 

	</main><!-- #main -->

<?php
get_footer();
