<?php
/**
 * zabor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zabor
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'zabor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zabor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on zabor, use a find and replace
		 * to change 'zabor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zabor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'zabor' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'zabor_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'zabor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zabor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zabor_content_width', 640 );
}
add_action( 'after_setup_theme', 'zabor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zabor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'zabor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'zabor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'zabor_widgets_init' );

	function set_cookies() {
		$visit_time = date('F j, Y g:i a');
		if(!isset($_COOKIE['visit_time'])) {
			add_action( 'wp_footer', 'hook_javascript', 1 );
			function hook_javascript(){echo '<div class="disclaimer agreement"><button type="button" class="close_disclamer" aria-label="Close" onclick="this.parentNode.parentNode.removeChild(this.parentNode); return false;"><span aria-hidden="true">×</span></button><p>Этот сайт использует cookie для хранения данных. Продолжая использовать сайт, Вы даете свое согласие на работу с этими файлами.<br>Подробнее см. в <a href="/privacy-policy/">Политике конфиденциальности</a>.</p></div>';}
		}
		setcookie( 'visit_time', $visit_time, time()+31556926 );	
	}
	add_action( 'init', 'set_cookies' );

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
  if (property_exists($args, 'list_item_class')) {
      $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


/**
 * Enqueue scripts and styles.
 */
function zabor_scripts() {
	wp_enqueue_style( 'zabor-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script( 'zabor-main-js', get_template_directory_uri() . '/js/script.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'zabor_scripts' );

register_meta( 'post', 'price', array(
	'type'              => 'string',
	'description'       => 'price',
	'single'            => true,
	'sanitize_callback' => null,
	'auth_callback'     => null,
	'show_in_rest'      => false,
));
global $wp_meta_keys;

add_action( 'init', 'true_register_post_type_init' ); 
function true_register_post_type_init() {
	$labels = array(
		'name' => 'services',
		'singular_name' => 'Услуги',
		'add_new' => 'Добавить услугу',
		'add_new_item' => 'Добавить новую услугу',
		'edit_item' => 'Редактировать услугу',
		'new_item' => 'Новая услуга',
		'all_items' => 'Все услуги',
		'view_item' => 'Просмотр услуги на сайте',
		'search_items' => 'Искать услуги',
		'not_found' =>  'Услуг не найдено.',
		'not_found_in_trash' => 'В корзине нет услуг.',
		'menu_name' => 'Услуги'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true, 
		'menu_icon' => 'dashicons-cart',
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes','custom-fields'),
		'taxonomies' => array('category')
	);
	register_post_type('services', $args);
}

add_action( 'init', 'true_register_post_type_init_faq' ); 
function true_register_post_type_init_faq() {
	$labels = array(
		'name' => 'FAQ',
		'singular_name' => 'Вопрос-Ответ',
		'add_new' => 'Добавить Вопрос-Ответ',
		'add_new_item' => 'Добавить новый Вопрос-Ответ',
		'edit_item' => 'Редактировать Вопрос-Ответ',
		'new_item' => 'Новый Вопрос-Ответ',
		'all_items' => 'Все Вопросы-Ответы',
		'view_item' => 'Просмотр Вопросы-Ответы на сайте',
		'search_items' => 'Искать Вопросы-Ответы',
		'not_found' =>  'Вопросов-Ответов не найдено.',
		'not_found_in_trash' => 'В корзине нет Вопросов-Ответов.',
		'menu_name' => 'Вопрос-Ответ'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true, 
		'menu_icon' => 'dashicons-info',
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'page-attributes')
	);
	register_post_type('FAQ', $args);
}

add_action( 'init', 'true_register_post_type_init_reviews' ); 
function true_register_post_type_init_reviews() {
	$labels = array(
		'name' => 'Reviews',
		'singular_name' => 'Отзыв',
		'add_new' => 'Добавить Отзыв',
		'add_new_item' => 'Добавить новый Отзыв',
		'edit_item' => 'Редактировать Отзыв',
		'new_item' => 'Новый Отзыв',
		'all_items' => 'Все Отзывы',
		'view_item' => 'Просмотр Отзывов на сайте',
		'search_items' => 'Искать Отзывы',
		'not_found' =>  'Отзывов не найдено.',
		'not_found_in_trash' => 'В корзине нет Отзывов.',
		'menu_name' => 'Отзывы'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true, 
		'menu_icon' => 'dashicons-star-filled',
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'page-attributes')
	);
	register_post_type('Reviews', $args);
}

