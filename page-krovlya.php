<?php
get_header();
?>
      <div class="page-head">
        <div class="overlay"></div>
        <div class="container">
          <a href="../" class="back-link">Назад</a>
          <h1 class="page-head__title">Кровля</h1>
        </div>
      </div>
      <main role="main">
        <div class="page-content">
          <div class="container">
            <p class="lead-text">Повседневная практика показывает, что сложившаяся структура организации в значительной степени обуславливает создание соответствующий условий активизации. Разнообразный и богатый опыт рамки и место обучения кадров играет важную роль в формировании систем массового участия.</p>
            <div class="product-catalog">
<?php 
$query = new WP_Query( 'taxonomy=category&post_type=services&category__in=5&nopaging=1&orderby=title&order=ASC' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();
		?>
<div class="product-catalog__item">
<div class="product-card">
  <div class="product-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  <div class="product-card__img-wrap">
	<a href="<?php the_permalink(); ?>">
	<?php echo get_the_post_thumbnail( $id, 'full', array('class'=>'product-card__img') ); ?>
	
	</a>
	<span class="product-card__label"><?php 
echo get_post_field('price', get_the_ID(), 'display'); ?></span>
  </div>
  <div class="product-card__action">
	<a href="#callback" rel="modal:open"><div class="btn btn--main">Заказать</div></a>
  </div>
</div>
</div>
<?php
	}
	wp_reset_postdata();
} 
else
	echo 'Записей нет.';
?>
            </div>
            <p>Повседневная практика показывает, что сложившаяся структура организации в значительной степени обуславливает создание соответствующий условий активизации. Разнообразный и богатый опыт рамки и место обучения кадров играет важную роль в формировании систем массового участия. Равным образом рамки и место обучения кадров влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт новая модель организационной деятельности в значительной степени обуславливает создание направлений прогрессивного развития. Разнообразный и богатый опыт начало повседневной работы по формированию позиции позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.</p>
            <p>Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.</p>
            <h4>ЦЕНЫ НА КРОВЛИ</h4>
            <table class="table">
              <thead class="table__header">
                <tr>
                  <th>Вид кровли</th>
                  <th>Цена работа + материалы</th>
                </tr>
              </thead>
              <tbody class="table__body">
<?php 
$query = new WP_Query( 'taxonomy=category&post_type=services&category__in=5&nopaging=1&orderby=title&order=ASC' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();
		?>
<tr>
  <td><?php the_title(); ?></td>
  <td><?php 
echo get_post_field('price', get_the_ID(), 'display'); ?></td>
</tr>
<?php
	}
	wp_reset_postdata();
} 
else
	echo 'Записей нет.';
?>
              </tbody>
              <tfoot class="table__footer">
                <tr>
                  <td colspan="2">ВНИМАНИЕ: Цены на сайте не являются публичной офертой и могут отличаться, уточняйте у наших менеджеров!</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
	</main>
<?php get_template_part( 'template-parts/content', 'feedback' ); ?>
<?php get_template_part( 'template-parts/content', 'contacts' ); ?>
<?php
get_sidebar();
get_footer();
