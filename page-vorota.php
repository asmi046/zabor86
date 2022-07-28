<?php
get_header();
?>
      <div class="page-head">
        <div class="overlay"></div>
        <div class="container">
          <a href="../" class="back-link">Назад</a>
          <h1 class="page-head__title">Ворота</h1>
        </div>
      </div>
      <main role="main">
        <div class="page-content">
          <div class="container">
            <h2>ВОРОТА ПОД КЛЮЧ</h2>
            <p class="lead-text">Заказать установку ворот в Сургуте по цене от 8159 руб. Монтаж всех видов (откатные, гаражные, распашные, Dorhan, более 21 видов) ворот под ключ. Вызвать замерщика по тел. +7 (922) 776-62-55 Новые ворота со скидкой в Июле до 11% Гарантия 2 г.</p>
            <div class="product-catalog">
<?php 
$query = new WP_Query( 'taxonomy=category&post_type=services&category__in=3&nopaging=1&orderby=title&order=ASC' ); 
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
            <h4>МОНТАЖ ВОРОТ "ПОД КЛЮЧ"</h4>
            <p>Обращайтесь в нашу компанию Забор-ворота 86, чтобы заказать установку ворот "под ключ". Мы поможем вам с выбором заграждения, оперативно рассчитаем стоимость его монтажа. Подберем ворота, которые будут выполнять защитную и декоративную функцию, рассчитанные на многолетнюю эксплуатацию. Наши специалисты знают все нюансы монтажа заграждений и выполняют эту работу не только быстро, но и качественно.</p>
            <h4>ЦЕНЫ НА ВОРОТА ПОД КЛЮЧ</h4>
            <table class="table">
              <thead class="table__header">
                <tr>
                  <th>Наименование</th>
                  <th>Цена руб. от</th>
                </tr>
              </thead>
              <tbody class="table__body">
<?php 
$query = new WP_Query( 'taxonomy=category&post_type=services&category__in=3&nopaging=1&orderby=title&order=ASC' ); 
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
