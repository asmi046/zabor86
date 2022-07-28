<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zabor
 */

get_header();
?>
<div class="page-head">
<div class="overlay serviceBg" style="background-image: url('<?php echo get_the_post_thumbnail_url( $id, 'full') ?>');"></div>
<div class="container">
  <a href="javascript:history.back();" class="back-link">Назад</a>
  <h1 class="page-head__title"><?php the_title(); ?></h1>
</div>
</div>
<main id="primary" class="site-main">
<div class="page-content">
<div class="container">
	<div class="row">
<?php the_content(); ?>
<div class="sale_btn"><a href="#callback" rel="modal:open" class="btn btn--main">Заказать консультацию</a></div>
</div></div></div>
</main>
<?php get_template_part( 'template-parts/content', 'contacts' ); ?>
<?php get_template_part( 'template-parts/content', 'feedback' ); ?>
<?php
get_sidebar();
get_footer();
