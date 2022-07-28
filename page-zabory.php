<?php
get_header();
?>
      <div class="page-head">
        <div class="overlay"></div>
        <div class="container">
          <a href="../" class="back-link">Назад</a>
          <h1 class="page-head__title">Заборы</h1>
        </div>
      </div>
      <main role="main">
        <div class="page-content">
          <div class="container">
            <h2>Надежный забор — залог безопасности</h2>
            <p class="lead-text">Мы возводим заборы разнообразной конфигурации — от декоративных до глухих двухметровых. Поможем определиться с выбором, учитывая место расположения, ваши предпочтения и бюджет. Устанавливаем заборы:</p>
            <div class="product-catalog">
<?php 
$query = new WP_Query( 'taxonomy=category&post_type=services&category__in=2&nopaging=1&orderby=title&order=ASC' ); 
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
            <h4>Дополнительно монтируем калитки, распашные, гаражные и откатные ворота, ленточный фундамент, столбы из кирпича.</h4>
            <p>Один из самых распространённых видов забора - конечно же профнастил. На сегодняшний день, мы в компании "СтройМонтаж" замечаем что тренд здорово меняется - заказчикам подавай что-то интересное, европейское. Но всё же профлист пока сохраняет за собой позиции. Популярность эта обусловлена его практичностью и ценой, забор из профнастила с установкой обходится довольно таки недорого и служит верой и правдой долгие годы, при этом имеет приличный внешний вид.</p>
            <p>Это его основные преимущества, а также следует отметить и то, что подтянуться по такому забору на руках довольно сложно - можно их просто порезать - запишем это в плюс. Из весомых недостатков такого забора - плохая вентиляция участка, выцветание краски у некоторых производителей и, если вдруг его помяли в процессе эксплуатации, то заменить лист в один цвет - практически невозможно!</p>
            <h4>ЦЕНЫ НА ЗАБОРЫ ПОД КЛЮЧ</h4>
            <table class="table">
              <thead class="table__header">
                <tr>
                  <th>Вид забора</th>
                  <th>Цена 1 м.п. работа + материалы</th>
                </tr>
              </thead>
              <tbody class="table__body">
<?php 
$query = new WP_Query( 'taxonomy=category&post_type=services&category__in=2&nopaging=1&orderby=title&order=ASC' ); 
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

<?php get_template_part( 'template-parts/content', 'feedback' ); ?>
<?php get_template_part( 'template-parts/content', 'contacts' ); ?>
<?php
get_sidebar();
get_footer();
