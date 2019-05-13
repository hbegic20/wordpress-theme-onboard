<?php
require 'function-admin.php';
require get_template_directory() . '/inc/footer-Widget.php';
require get_template_directory() . '/inc/create-meta-box-for-custom-post-type.php';
require get_template_directory() . '/inc/register-custom-post-type.php';
require get_template_directory() . '/inc/register-widget-area.php';
require get_template_directory() . '/inc/create-meta-boxes.php';

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');
    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Localisation Support
    load_theme_textdomain('guardsman', get_template_directory() . '/languages');
}
function guardsman_enqueue_style() {
	wp_enqueue_style( 'guardsman-global-style', get_theme_file_uri('style.css'));
    wp_enqueue_script( 'vendor',get_theme_file_uri('js/vendorBundle.js'));
    wp_enqueue_script( 'main',get_theme_file_uri('js/bundle.js'), NULL, '1.0.0',true);
}
function admin_enqueue_scripts() {
	wp_enqueue_media();
    wp_enqueue_script( 'vendor',get_theme_file_uri('js/upload-Admin.js'));
}
function guardsman_init(){
    add_theme_support( 'post-thumbnail' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}
add_action('init','guardsman_custom_post_type_faq');
add_action( 'widgets_init', 'jpen_register_footer_widget' );
add_action( 'wp_enqueue_scripts', 'guardsman_enqueue_style' );
add_action( 'admin_enqueue_scripts', 'admin_enqueue_scripts' );
add_action( 'after_setup_theme', 'guardsman_init' );
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
		'Header' => 'OnBoard Header Navigation Menu',
	) );
}

function IsNullOrEmptyString($str){
    return (!isset($str) || trim($str) === '');
}

