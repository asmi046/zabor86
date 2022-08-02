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
 * @package zabor
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			  }
		?> 
			<?php
			while ( have_posts() ) :
				the_post();
			endwhile; // End of the loop.
		?>
	</main><!-- #main --> 

<?php
get_sidebar();
get_footer();
