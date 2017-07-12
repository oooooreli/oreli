<?php
/**
 * o_oreli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package o_oreli
 */

if ( ! function_exists( 'o_oreli_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function o_oreli_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on o_oreli, use a find and replace
	 * to change 'o_oreli' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'o_oreli', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'o_oreli' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'o_oreli_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'o_oreli_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function o_oreli_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'o_oreli_content_width', 640 );
}
add_action( 'after_setup_theme', 'o_oreli_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function o_oreli_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'o_oreli' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'o_oreli' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'o_oreli_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function o_oreli_scripts() {


// wp_enqueue_script( 'o_cdn_trianglify', 'https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.0.1/trianglify.min.js', null, null, true );
// wp_enqueue_script( 'o_cdn_TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js', null, null, true );
wp_enqueue_script( 'o_cdn_cash', 'https://cdnjs.cloudflare.com/ajax/libs/cash/1.3.5/cash.min.js', null, null, true );


// wp_enqueue_script( 'o_card', get_template_directory_uri(). '/src/js/Card.js', null, null, true );
// wp_enqueue_script( 'o_circle', get_template_directory_uri(). '/src/js/Card-circle.js', null, null, true );


wp_enqueue_script( 'o_cdn_aos-js', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', null, null, true );
wp_enqueue_script( 'o_imagesloaded', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.2/imagesloaded.pkgd.min.js', null, null, true );
wp_enqueue_script( 'o_anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', null, null, true );
wp_enqueue_script( 'o_tilt', get_template_directory_uri(). '/src/js/tilt.js', null, null, true );
wp_enqueue_script( 'o_scrollify', 'https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.14/jquery.scrollify.min.js', array(), null, true );
wp_enqueue_script( 'scripts-global', get_template_directory_uri() . '/src/js/customizer.js', array('customize-preview'), null, true );

wp_enqueue_style( 'o_cdn_aos-css', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false  );
wp_enqueue_style( 'o_oreli-style-dep', get_template_directory_uri(). '/dist/css/depandancies.min.css', false  );
wp_enqueue_style( 'fontawesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false  );
wp_enqueue_style( 'o_oreli-style-min', get_template_directory_uri(). '/dist/css/style.css', false  );
wp_enqueue_style( 'o_oreli-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'o_oreli_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Orèli
 */
require get_template_directory() . '/inc/o_theme.php';
require get_template_directory() . '/inc/o_global.php';
// require get_template_directory() . '/inc/o_cpt.php';
require get_template_directory() . '/inc/o_wp_customize.php';
