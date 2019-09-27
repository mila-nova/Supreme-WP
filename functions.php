<?php
/**
* Mila Theme functions and definitions
*/

function mila_scripts() {
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fontawesome-free-5.8.1-web/css/all.css' );
	wp_enqueue_style('font-roboto', get_template_directory_uri() . '/font/fonts.css' );
	wp_enqueue_style( 'mila-style', get_stylesheet_uri() );

	// add print JS only to Posts 
	//https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	if ( is_single() ) {
        wp_enqueue_script('my-script', get_template_directory_uri() . '/js/print.js', array(), 'null', true );
    } 

}
//hooks
add_action( 'wp_enqueue_scripts', 'mila_scripts' );
// https://developer.wordpress.org/reference/functions/add_action/
		

if ( ! function_exists( 'mila_setup' ) ) :
	// *
	//  * Sets up theme defaults and registers support for various WordPress features.
	//  *
	//  * Note that this function is hooked into the after_setup_theme hook, which
	//  * runs before the init hook. The init hook is too late for some features, such
	//  * as indicating support for post thumbnails.
	 
	function mila_setup() {

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mila_custom_background_args', array(
			'default-color' => '#392E73',
		) ) );

// https://developer.wordpress.org/themes/customize-api/customizer-objects/
add_action( "customize_register", "mila_customize_register" );
function mila_customize_register( $wp_customize ) {


 // Remove Background image   
 $wp_customize->remove_section("background_image");
 // Remove widget panel from site set up panel (widgets are still available in the administration panel)
 $wp_customize->remove_panel("widgets");

 }

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'mila_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mila_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mila' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mila' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Footer Bar', 'mila' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'mila' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Copyright', 'mila' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add Copyright name here.', 'mila' ),
		'before_widget' => '<section id="copyright-text" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


register_sidebar( array(
		'name'          => esc_html__( 'Orange Sidebar Content', 'mila' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add Content here.', 'mila' ),
		'before_widget' => '<section id="orange-sidebar" class="orange-sidebar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Blue Sidebar Content', 'mila' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add Content here.', 'mila' ),
		'before_widget' => '<section id="blue-sidebar" class="blue-sidebar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Yellow Sidebar Content', 'mila' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add Content here.', 'mila' ),
		'before_widget' => '<section id="yellow-sidebar" class="yellow-sidebar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Purple Sidebar Content', 'mila' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Add Content here.', 'mila' ),
		'before_widget' => '<section id="purple-sidebar" class="purple-sidebar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => esc_html__( 'Category Menu for Article', 'mila' ),
		'id'            => 'sidebar-8',
		'description'   => esc_html__( 'Add menu widget here.', 'mila' ),
		'before_widget' => '<section id="cat-menu-bar" class="cat-menu-bar">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'mila_widgets_init' );


// Navigation: position and description as value
		register_nav_menus( array(
			'primary' => 'Main Menu',
			'social' => 'Social Icons Menu',
			'Footer' => 'Footer Main Menu',
			'footer_social' => 'Footer Social Menu'
		) );

// Dynamic Date for Copyright https://firstsiteguide.com/wordpress-copyright-notice/
function dynamic_date() {
$all_posts = get_posts( 'post_status=publish&order=ASC' );
$first_post = $all_posts[0];
$first_date = $first_post->post_date_gmt;
if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
echo date( 'Y' );
} else {
echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
}
}

// add more link to excerpt
   function mila_custom_excerpt_more($more) {
      global $post;
      return '&nbsp;<div class="more-link"><a href="'. get_permalink($post->ID) . '">'. __('<i title="Läs mer" class="fa fa-arrow-circle-right"></i>', 'mila') .'</a></div>';
   }
   add_filter('excerpt_more', 'mila_custom_excerpt_more');


// picture size, hard crop mode
add_image_size( 'post-pic-size', 1024, 570, true ); 

// pic banner size, hard crop mode
add_image_size( 'post-banner-size', 1024, 300, true ); 


// custom excerpt length
function mila_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'mila_custom_excerpt_length', 999 );


// post number on home page
function wpdocs_four_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 4 );
    }
}
add_action( 'pre_get_posts', 'wpdocs_four_posts_on_homepage' );

// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);

