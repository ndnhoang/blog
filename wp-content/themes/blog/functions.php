<?php
/**
 * @link http://www.hoangblogger.com/
 * @package blog
 * @author hoangblogger
 */

if ( ! function_exists( 'blog_setup' ) ) :
	function blog_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'blog' ),
			'iconic-vintage' => esc_html__( 'Iconic Vintage', 'blog' ),
			'client-services' => esc_html__( 'Client Services', 'blog' ),
			'contact-us' => esc_html__( 'Contact Us', 'blog' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'blog_setup' );
/**
 * Register widget area
 */
function blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Iconic Vintage', 'blog' ),
		'id'            => 'iconic_vintage',
		'description'   => esc_html__( 'Add widgets here.', 'blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'blog_widgets_init' );
//enqueue scripts
function blog_scripts() {		
	wp_enqueue_style( 'blog-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'main.css', get_template_directory_uri().'/css/main.css' );
	wp_enqueue_style( 'responsive.css', get_template_directory_uri().'/css/responsive.css' );

	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'), '3.8', true );
	wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'), '3.8', true );
	wp_enqueue_script( 'jquery.lazyload.min.js', get_template_directory_uri().'/js/jquery.lazyload.min.js',array('jquery'), '3.8', true );
	wp_enqueue_script( 'main.js', get_template_directory_uri().'/js/main.js',array('jquery'), '3.8', true );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );
/**
 * Theme option
 */
require get_template_directory() . '/inc/theme-option.php';
/**
 * BFI_Thumb
 */
require get_template_directory() . '/BFI_Thumb.php';
/**
 * Shortcode
 */
require_once get_template_directory() . '/inc/shortcode.php';
//hide adminbar
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}
//filter logout
add_action( 'wp_logout', 'auto_redirect_external_after_logout');
function auto_redirect_external_after_logout(){
  wp_redirect(home_url());
  exit();
}
//filter wp mail html
add_filter('wp_mail_content_type','wpdocs_set_html_mail_content_type');
function wpdocs_set_html_mail_content_type($content_type){
	return 'text/html';
}
//funtion crop_img
function crop_img($w, $h, $url_img){
 $params = array( 'width' => $w, 'height' => $h, 'crop' => true);
 return bfi_thumb($url_img, $params );
}
//funtion crop_img
function get_favicon(){
    global $blog_option;
    $favicon  = $blog_option['favicon'];
    echo '<link rel="icon" type="image/png" href="'.$favicon['url'].'" sizes="32x32"/>';
}
//update version acf
function my_acf_init() {	
	acf_update_setting('select2_version', 4);	
	acf_update_setting('google_api_key', 'AIzaSyD9pVsP-Sh5vKDOU_6mGP3weZYs9qsX2wE');
}
add_action('acf/init', 'my_acf_init');
// fix woocommerce lastest
function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );