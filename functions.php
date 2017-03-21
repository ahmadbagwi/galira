<?php


/**
 * galira 1.0 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package galira_1.0
 */
/*penambahan fungsi titan framework untuk membuat theme option */
require_once( 'titan-framework-checker.php' );


add_action( 'tf_create_options', 'mytheme_create_options' );
function mytheme_create_options() {
    // We create all our options here
    $titan = TitanFramework::getInstance( 'mytheme' );
//slider gambar lebar
    $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Slider 1', 'mytheme' ),
    'panel' => 'Slider',
) );

    $section->createOption( array(
    'name' => __( 'Slider image 1', 'mytheme' ),
    'id' => 'slider1',
    'type' => 'upload',
    'size' => 'full',
    
) );

    $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Slider 2', 'mytheme' ),
    'panel' => 'Slider',
) );

    $section->createOption( array(
    'name' => __( 'Slider image 2', 'mytheme' ),
    'id' => 'slider2',
    'type' => 'upload',
    'size' => 'full',
    
) );

    $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Slider 3', 'mytheme' ),
    'panel' => 'Slider',
) );

    $section->createOption( array(
    'name' => __( 'Slider image 3', 'mytheme' ),
    'id' => 'slider3',
    'type' => 'upload',
    'size' => 'full',
    
) );

  $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Jasa 1', 'mytheme' ),
    'panel' => 'Gambar depan',
) );

    $section->createOption( array(
    'name' => __( 'Jasa image 1', 'mytheme' ),
    'id' => 'jasa1',
    'type' => 'upload',
    'size' => 'full',
    
) );

    $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Jasa 2', 'mytheme' ),
    'panel' => 'Gambar depan',
) );

    $section->createOption( array(
    'name' => __( 'Jasa image 2', 'mytheme' ),
    'id' => 'jasa2',
    'type' => 'upload',
    'size' => 'full',
    
) );
 
 $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Jasa 3', 'mytheme' ),
    'panel' => 'Gambar depan',
) );

    $section->createOption( array(
    'name' => __( 'Jasa image 3', 'mytheme' ),
    'id' => 'jasa3',
    'type' => 'upload',
    'size' => 'full',
    
) );

    $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Jasa 4', 'mytheme' ),
    'panel' => 'Gambar depan',
) );

    $section->createOption( array(
    'name' => __( 'Jasa image 4', 'mytheme' ),
    'id' => 'jasa4',
    'type' => 'upload',
    'size' => 'full',
    
) );

    $section = $titan->createThemeCustomizerSection( array(
    'name' => __( 'Jasa 5', 'mytheme' ),
    'panel' => 'Gambar depan',
) );

    $section->createOption( array(
    'name' => __( 'Jasa image 5', 'mytheme' ),
    'id' => 'jasa5',
    'type' => 'upload',
    'size' => 'full',
    
) );

}

if ( ! function_exists( 'galira_web_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function galira_web_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on galira 1.0, use a find and replace
	 * to change 'galira-web' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'galira-web', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'galira-web' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'galira_web_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'galira_web_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function galira_web_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'galira_web_content_width', 640 );
}
add_action( 'after_setup_theme', 'galira_web_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function galira_web_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'galira-web' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Bawah', 'galira-web' ),
		'id'            => 'sidebar-bawah',
		'description'   => 'posisi sidebar dibagian bawah',
		'before_widget' => '<section id="%1$s" class="widget-bawah %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'galira_web_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function galira_web_scripts() {
	wp_enqueue_style( 'galira-web-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'galira-web-style', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6', 'all' );
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	
	wp_enqueue_style( 'galira-web-style', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '3.3.6', 'all' );
	
	wp_enqueue_style( 'galira-web-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(),'3.3.6', 'all' );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.5.0', 'all' );
	
	wp_enqueue_script( 'topbutton-js', get_template_directory_uri() . '/js/topbutton.js', array('jquery'));

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.3.6', true );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	
	wp_enqueue_script( 'respond-js', get_template_directory_uri() . '/js/respond.min.js', array('jquery'), '1.4.2', true );

	wp_enqueue_script( 'galira-web-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'galira-web-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'galira_web_scripts' );
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
 * Load Bootstrap Menu. Menambahkan menu bootstrap
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

