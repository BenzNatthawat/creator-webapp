<?php
/**
 * creator-webapp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'creator_webapp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function creator_webapp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on creator-webapp, use a find and replace
		 * to change 'creator-webapp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'creator-webapp', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'creator-webapp' ),
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
				'creator_webapp_custom_background_args',
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
add_action( 'after_setup_theme', 'creator_webapp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creator_webapp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creator_webapp_content_width', 640 );
}
add_action( 'after_setup_theme', 'creator_webapp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creator_webapp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'creator-webapp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'creator-webapp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'creator_webapp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function creator_webapp_scripts() {
	wp_enqueue_style( 'bootstrapcdn-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), _S_VERSION, false );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, false );
  wp_enqueue_style( 'mdb', get_template_directory_uri() . '/css/mdb.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'twabc-1', get_template_directory_uri() . '/css/twabc-advanced.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'twabc-3', get_template_directory_uri() . '/css/twabc-advanced-3.css', array(), _S_VERSION, false );
	wp_enqueue_style( 'twabc-4', get_template_directory_uri() . '/css/twabc-advanced-4.css', array(), _S_VERSION, false );
	wp_style_add_data( 'creator-webapp-style', 'rtl', 'replace' );

  wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, false );
  wp_enqueue_script( 'script-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'code-jquery-script', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'jsdelivr-script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'bootstrapcdn-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'bootstrapcdn-script', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), _S_VERSION, false );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creator_webapp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* ************************************* */ 
define( 'CAROUSEL_BASENAME', get_template_directory().'/functions.php' );
// Advanced Bootstrap Carousel custom post type
add_action( 'init', 'twabc_post_type');
function twabc_post_type() {

	$labels = array(
		'name'                => 'Advanced Bootstrap Carousel',
		'singular_name'       => 'Advanced Bootstrap Carousel',
		'menu_name'           => 'ABC Slider',
		'parent_item_colon'   => 'Parent:',
		'all_items'           => 'All Carousels',
		'view_item'           => 'View Carousel',
		'add_new_item'        => 'Add New Carousel',
		'add_new'             => 'Add New Carousel',
		'edit_item'           => 'Edit Carousel',
		'update_item'         => 'Update Carousel',
		'search_items'        => 'Search Carousels',
		'not_found'           => 'Carousel Not found',
		'not_found_in_trash'  => 'Carousel Not found in Trash',
	);
	$args = array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'exclude_from_search' 	=> true,
		'publicly_queryable' 	=> false,
		'show_ui' 				=> true, 
		'show_in_menu' 			=> true, 
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'page',
		'has_archive' 			=> true, 
		'hierarchical'			=> false,
		'menu_position' 		=> 20,
        'menu_icon'           	=> 'dashicons-slides',
		'supports' 				=> array('title', 'excerpt', 'thumbnail', 'page-attributes')
	);
	register_post_type( 'twabc', $args );
}
// Create a taxonomy for the carousel post type
function twabc_taxonomies () {
	$args = array('hierarchical' => true);
	register_taxonomy( 'twabc_category', 'twabc', $args );
}

add_action( 'init', 'twabc_taxonomies', 0 );

function twabc_addImageSupport() {
	$supportedTypes = get_theme_support( 'post-thumbnails' );
	if( $supportedTypes === false ) {
		add_theme_support( 'post-thumbnails', array( 'twabc' ) );	  
		add_image_size('featured_preview', 100, 55, true);
	} elseif( is_array( $supportedTypes ) ) {
		$supportedTypes[0][] = 'twabc';
		add_theme_support( 'post-thumbnails', $supportedTypes[0] );
		add_image_size('featured_preview', 100, 55, true);
	}
}
add_action( 'after_setup_theme', 'twabc_addImageSupport');


require_once('carousel/twabc-admin-view.php');
require_once('carousel/twabc-front-view.php');
require_once('carousel/twabc-admin-settings.php');

function roots_title() {
  $path = 'phuketwebsite';
  $lenPath = strlen($path);
  $strpos = strpos($_SERVER['REQUEST_URI'], $path);
	$text = urldecode(substr($_SERVER['REQUEST_URI'], $strpos + $lenPath + 1));
	if($text === '') {
		$text = 'รับเขียนเว็บไซต์ภูเก็ต';
	}
  if ($strpos) {
    $pagename = get_page_by_path($path);
    $args = array(
      'p'         => $pagename->ID, // ID of a page, post, or custom type
      'post_type' => 'any'
    );
    $GLOBALS['wp_the_query'] = new WP_Query($args);
    $GLOBALS['wp_query'] = $GLOBALS['wp_the_query'];
    $GLOBALS['wp_query']->post->post_content = str_replace('{province}', $text, $GLOBALS['wp_query']->post->post_content);
    include get_template_directory().'/page.php';
    exit;
  }
}
add_action( 'init', 'roots_title');

function contact_form() {
  if ( !empty($_POST['form']) ) {
    $data = require __DIR__."/send.php";
    wp_redirect(home_url($_SERVER['REQUEST_URI']."?data=".$data));
    exit();
  }
}
add_action( 'init', 'contact_form');
