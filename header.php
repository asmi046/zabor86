<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zabor
 */

?>
<!doctype html>
<html class="no-js page" lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="description" content>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffffff">
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/mstile-310x310.png">
	<meta name="msapplication-config" content="/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<script src="https://kit.fontawesome.com/9cc6578c9d.js" crossorigin="anonymous"></script>
	<script>
	// Маркер работающего javascript
	document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
	document.addEventListener('DOMContentLoaded', function(){
	  if (window.isMobile !== undefined) {
		// console.log(isMobile);
		if(isMobile.any) {
		  var rootClasses = ' is-mobile';
		  for (key in isMobile) {
			if(typeof isMobile[key] === 'boolean' && isMobile[key] && key !== 'any') rootClasses += ' is-mobile--'+key;
			if(typeof isMobile[key] === 'object' && key !== 'other') {
			  for (type in isMobile[key]) {
				if(isMobile[key][type]) rootClasses += ' is-mobile--'+key+'-'+type;
			  }
			}
		  }
		  document.documentElement.className += rootClasses;
		}
	  }
	  else {
		console.log('Классы для мобильных не добавлены: в сборке отсутствует isMobile.js');
	  }
	});
	</script>
	<?php wp_head(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(83057701, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/83057701" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="page__inner">
    <div class="page__content">
      <div class="header-line">
        <div class="container">
          <div class="header-line__list">
            <div class="header-line__item">
              <span><i class="fas fa-clock"></i> Пн-вс 9:00-23:00</span>
            </div>
            <div class="header-line__item">
              <span><i class="fas fa-map-marker-alt"></i> Ханты-Мансийский автономный округ, ул. Маяковского, 57, Сургут</span>
            </div>
            <div class="header-line__item">
              <i class="fas fa-envelope"></i><span class="dino">not needed text</span>za<span class="dino">another not needed text</span>bor.86<span class="dino">delete me</span>@<span class="dino">delete me</span>inter<span class="dino">delete me</span>net.ru
			</div>
          </div>
        </div>
      </div>
      <header class="page-header" role="banner">
        <div class="page-header__inner">
          <a class="logo" href="/">
            <img src="/logo.svg" alt>
          </a>
          <nav id="main-nav" class="main-nav" role="navigation">
		  <?php wp_nav_menu( [
'theme_location'  => 'primary',
'container' => 'NULL',
'menu'            => 'Menu 1',
'menu_class'      => 'main-nav__list',
'echo'            => true,
'depth'           => 0,
'list_item_class'  => 'main-nav__link',
'link_class'   => 'main-nav__link scrollLink'

] ); ?>
            <div class="main-nav__info">
              <a href="tel:+79227766255">+7 (922) 776-62-55</a><a href="whatsapp://send?phone=+79227766255">&nbsp;<img src="/whatsapp.svg" style="width:20px;height:20px;"></a><br>
			  <a href="#callback" rel="modal:open"><span>Заказать звонок</span></a>
            </div>
            <button id="main-nav-toggler" class="main-nav__toggler burger"><span></span></button>
          </nav>
        </div>
      </header>