<?php
get_header();
?>
      <main role="main">
      <div class="offer">

        <div class="offer__top">

					<div class="offer__sliders slider-bg _swiper">
					<?
						$pict = carbon_get_theme_option('slider_index');
							if ($pict) {
						$pictIndex = 0;
							foreach ($pict as $item) {
					?>
						<div class="offer__sliders-slide slider__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
          		<div class="overlay"></div>
          		<div class="container">
            		<div class="offer__inner"> 
								<? if (!empty($item['slider_title'])) { ?>
              		<h1 class="offer__title"><? echo $item['slider_title']; ?></h1>
								<? } ?>
								<? if (!empty($item['slider_subtitle'])) { ?>
									<div class="offer__text"><? echo $item['slider_subtitle']; ?></div>
								<? } ?>
								<? if (!empty($item['slider_link_text'])) { ?>
              		<a href="#callback" rel="modal:open" class="btn btn--main"><? echo $item['slider_link_text']; ?></a> 
								<? } ?>
            		</div>
          		</div>
						</div>
					<?
					$pictIndex++;
				}
			}
			?> 
				</div>
        	<div class="slider-main__swiper-paggination swiper-paggination"></div>
        </div>

        <div class="offer__bottom" id="advantages">
          <div class="container">
            <h2 class="section__title">Наши преимущества</h2>
            <div class="row offer__list">
              <div class="offer__item">
                <h3 class="offer__item-title">Широкий диапазон работ</h3>
                <div class="offer__item-text">Мы строим коттеджи, летние дачные домики, бани и беседки разных конфигураций, монтируем крыши, делаем облицовки фасадов, а также возводим заборы и многое другое. <span>Есть задача? Мы решим!</span></div>
              </div>
              <div class="offer__item">
                <h3 class="offer__item-title">Индивидуальный подход</h3>
                <div class="offer__item-text">У нас нет типовых проектов, поскольку мы <span>строим объекты с учетом пожеланий каждого заказчика</span>, и помогаем выбрать лучшее решение исходя из назначения, бюджета, особенностей ландшафта и других нюансов.</div>
              </div>
              <div class="offer__item">
                <h3 class="offer__item-title">Высокое качество</h3>
                <div class="offer__item-text">Опытные рабочие + современные технологии + качественные материалы = <span>отличный результат</span>. Мы построили более 30 различных объектов по всему Сургуту и в других городах.</div>
              </div>
              <div class="offer__item">
                <div class="offer__item-title">Человеческое отношение</div>
                <div class="offer__item-text">Мы <span>идем навстречу клиентам</span> и готовы обсудить с ними любые пожелания и новые идеи, даже если они не были изначально заложены в проект.</div>
              </div>
              <div class="offer__item">
                <h3 class="offer__item-title">Доступные цены</h3>
                <div class="offer__item-text">Мы не создаем искусственных накруток цен и <span>точно определяем стоимость работ</span>. А обращаясь к нам через сайт, вы получаете скидку 10%.</div>
              </div>
              <div class="offer__item">
                <h3 class="offer__item-title">Ответственность и точность сроков</h3>
                <div class="offer__item-text">Мы <span>заботимся о времени клиентов</span>, и делаем все от нас зависящее, чтобы работа была сдана в срок.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
		<div class="section">
		<div class="container">
		<h2 class="section__title">Наши услуги</h2>
		<div class="services row" id="services">
		  <div class="services__item">
			<a href="/zabory" class="s-card" style="background-image: url(/wp-content/themes/zabor/img/zabory.jpg);">
			  <div class="s-card__name">Заборы <i class="fas fa-chevron-right"></i></div>
			</a>
		  </div>
		  <div class="services__item">
			<a href="/vorota" class="s-card" style="background-image: url(/wp-content/themes/zabor/img/vorota.jpg);">
			  <div class="s-card__name">Ворота <i class="fas fa-chevron-right"></i></div>
			</a>
		  </div>
		  <div class="services__item">
			<a href="/metallokontrukcii" class="s-card" style="background-image: url(/wp-content/themes/zabor/img/metallokontrukcii.jpg);">
			  <div class="s-card__name">Металлоконтрукции <i class="fas fa-chevron-right"></i></div>
			</a>
		  </div>
		  <div class="services__item">
			<a href="/krovlya" class="s-card" style="background-image: url(/wp-content/themes/zabor/img/krovlya.jpg);">
			  <div class="s-card__name">Кровля <i class="fas fa-chevron-right"></i></div>
			</a>
		  </div>
		</div>
		</div>
		</div>
		<div class="section how-we-work">
		<div class="container">
		<div class="row">
		  <h2 class="section__title">Как мы работаем</h2>
			<div class="container">
				<div class="how-list">
				<div class="how-item">
				  <div class="how-item__num how1"></div>
				  <div class="how-item__text">Приезжаем на замер</div>
				</div><div class="triangle-right"></div>
				<div class="how-item">
				  <div class="how-item__num how2"></div>
				  <div class="how-item__text">Строим 3D-проект</div>
				</div><div class="triangle-right"></div>
				<div class="how-item">
				  <div class="how-item__num how3"></div>
				  <div class="how-item__text">Изготавливаем изделие</div>
				</div><div class="triangle-right"></div>
				<div class="how-item">
				  <div class="how-item__num how4"></div>
				  <div class="how-item__text">Устанавливаем и монтируем изделие</div>
				</div><div class="triangle-right"></div>
				<div class="how-item">
				  <div class="how-item__num how5"></div>
				  <div class="how-item__text">Вы принимаете работу и оплачиваете результат</div>
				</div>
			</div>		
		</div></div>
		</div>
		</div>
		<div class="section adv">
			<div class="adv__top" style="background-image: url(/wp-content/themes/zabor/img/zabor.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="num-list">
					<div class="num-item">
					  <div class="num-item__num">7</div>
					  <div class="num-item__text">Лет опыта на рынке</div>
					</div>
					<div class="num-item">
					  <div class="num-item__num">280</div>
					  <div class="num-item__text">Установок в год</div>
					</div>
					<div class="num-item">
					  <div class="num-item__num">>2000</div>
					  <div class="num-item__text">Довольных клиентов</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section reviews">
		  <div class="container">
		  <div class="row"><h2 class="section__title">Отзывы</h2></div>
			<div class="owl-carousel reviews-carousel">
<?php 
$query = new WP_Query( 'post_type=Reviews&nopaging=1&orderby=modified&order=DESC' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();
?>
<div class="reviews-card">
<div class="reviews-card__text">
  <p><?php the_content(); ?></p>
  <div class="reviews-card__name"><?php the_title(); ?></div>
  <div class="reviews-card__social"></div>
  <div class="reviews-card__user-pic"></div>
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
		  </div>
		</div>
		<div class="section" id="faq">
		  <div class="container">
			<h2 class="section__title">Часто задаваемые вопросы</h2>
			<div class="accordion-group">
<?php 
$query = new WP_Query( 'post_type=FAQ&nopaging=1&orderby=modified&order=DESC' ); 
if( $query->have_posts() ){
	while( $query->have_posts() ){
		$query->the_post();
		?>
			  <section class="accordion-group__accordion">
				<header class="accordion-group__accordion-head">
				  <h3 class="accordion-group__accordion-heading">
					<button type="button" class="accordion-group__accordion-btn"><?php the_title(); ?></button>
				  </h3>
				</header>
				<div class="accordion-group__accordion-panel">
				  <div class="accordion-group__accordion-content">
					<p><?php the_content(); ?></p>
				  </div>
				</div>
			  </section>
<?php
	}
	wp_reset_postdata();
} 
else
	echo 'Записей нет.';
?>
			</div>
		  </div>
		</div>
	</main>
<?php get_template_part( 'template-parts/content', 'contacts' ); ?>
<?php get_template_part( 'template-parts/content', 'feedback' ); ?>
<?php
get_sidebar();
get_footer();
