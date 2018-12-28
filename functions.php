<?php
/**
 * Education Hub functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Education_Hub
 */

if ( ! function_exists( 'education_hub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function education_hub_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'education-hub' );

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
		add_image_size( 'education-hub-thumb', 360, 270 );

		// This theme uses wp_nav_menu() in four location.
		register_nav_menus( array(
			'primary'     => esc_html__( 'Primary Menu', 'education-hub' ),
			'footer'      => esc_html__( 'Footer Menu', 'education-hub' ),
			'social'      => esc_html__( 'Social Menu', 'education-hub' ),
			'quick-links' => esc_html__( 'Quick Links Menu', 'education-hub' ),
			'notfound'    => esc_html__( '404 Menu', 'education-hub' ),
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
		add_theme_support( 'custom-background', apply_filters( 'education_hub_custom_background_args', array(
			'default-color' => 'dfdfd0',
			'default-image' => '',
		) ) );

		/*
		 * Enable support for custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'flex-height' => true,
			'flex-width'  => true,
		) );

		/*
		 * Enable support for selective refresh of widgets in Customizer.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Editor style.
		add_editor_style( 'css/editor-style' . $min . '.css' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Load Supports.
		require get_template_directory() . '/inc/support.php';

		global $education_hub_default_options;
		$education_hub_default_options = education_hub_get_default_theme_options();

	}
endif;

add_action( 'after_setup_theme', 'education_hub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function education_hub_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'education_hub_content_width', 640 );
}
add_action( 'after_setup_theme', 'education_hub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function education_hub_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'education-hub' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'education-hub' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'education-hub' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'education-hub' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'education_hub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function education_hub_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/third-party/font-awesome/css/font-awesome' . $min . '.css', '', '4.7.0' );
	wp_enqueue_style( 'education-hub-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:600,400,400italic,300,100,700|Merriweather+Sans:400,700' );

	wp_enqueue_style( 'education-hub-style', get_stylesheet_uri(), array(), '1.9.7' );

	if ( has_header_image() ) {
		$custom_css = '#masthead{ background-image: url("' . esc_url( get_header_image() ) . '"); background-repeat: no-repeat; background-position: center center; }';
		wp_add_inline_style( 'education-hub-style', $custom_css );
	}

	wp_enqueue_script( 'education-hub-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix' . $min . '.js', array(), '20130115', true );

	wp_enqueue_script( 'cycle2', get_template_directory_uri() . '/third-party/cycle2/js/jquery.cycle2' . $min . '.js', array( 'jquery' ), '2.1.6', true );

	wp_enqueue_script( 'education-hub-custom', get_template_directory_uri() . '/js/custom' . $min . '.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'education-hub-custom2', get_template_directory_uri() . '/js/custom2.js', array( 'jquery' ), '1.0', true );

	wp_register_script( 'education-hub-navigation', get_template_directory_uri() . '/js/navigation' . $min . '.js', array(), '20120206', true );
	wp_localize_script( 'education-hub-navigation', 'EducationHubScreenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'education-hub' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'education-hub' ) . '</span>',
	) );
	wp_enqueue_script( 'education-hub-navigation' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'education_hub_scripts' );

/**
 * Load init.
 */
require get_template_directory() . '/inc/init.php';

// ===== START Services CUSTOM TYPE POST=======//
add_action('init', 'add_service');

function add_service()
{
    $labels = [
        'name' => 'service',
        'singular_name' => 'service',
        'add_new' => 'Add services',
        'add_new_item' =>'Add new service',
        'edit_item' => 'Edit service',
        'new_item' =>'New Service',
        'all_items' => 'All services',
        'view_item' => 'View services on the site',
        'search_items' => 'Search service',
        'not_found' =>'No service found',
        'not_found_in_trash' => 'There are no service in the Trash.',
        'menu_name' =>'Послуга' ,
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'taxonomies'  => ['service_tax'],
        'menu_position' => 20,
        'supports' => ['title', 'editor', 'author', 'thumbnail']
    ];

    register_post_type('service', $args);
}

function service_tax()
{
    $labels = [
        'name' => 'service categories',
        'singular_name' => 'service Category',
        'menu_name' => 'Categories',
        'all_items' => 'Categories',
        'parent_item' => 'Parent category of service',
        'parent_item_colon' => 'Parent category of service:',
        'new_item_name' => 'New category',
        'add_new_item' => 'Add a new category',
        'edit_item' => 'Edit category',
        'update_item' => 'Update category',
        'search_items' => 'To find',
        'add_or_remove_items' => 'Add or remove category',
        'choose_from_most_used' => 'Search among popular',
        'not_found' => 'Not found',
    ];

    $args = [
        'labels' => $labels,
        'hierarchical' => false,
        'public' => true,
    ];

    register_taxonomy('service_tax', ['service'], $args);
}

add_action('init', 'service_tax', 0);
// ===== END services CUSTOM TYPE POST =======//