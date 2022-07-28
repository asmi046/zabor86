<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zabor
 */

?>
      </main>
    </div>
	<div class="page__footer-wrapper">
	  <footer class="page-footer" role="contentinfo">
		<div class="container">
		  <div class="page-footer__copyright">2021 © Все права защищены. Сайт «забор86.рф» является исключительно информационным ресурсом и не является публичной офертой, определяемой положениями Статьи 437.2 ГК РФ. Для получения любой интересующей информации обращайтесь к нашим менеджерам с помощью формы обратной связи или по телефону. Копирование любых материалов только с разрешения администратора сайта. <a href="/privacy-policy" rel="nofollow">Политика конфиденциальности</a></div>
		</div>
	  </footer>
	</div>
</div>
<div id="callback" class="modal">
  <?php echo do_shortcode('[contact-form-7 id="31" title="Обратная связь"]'); ?>
</div>
<?php wp_footer(); ?>
<div class="disclaimer callback"><a class="btn" href="tel:+79227766255><span>Позвонить сейчас</span></a></div>
</body>
</html>