<?php

/**
 * 64 Kitchen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 64 Kitchen
 */

/**
* Enqueue scripts and styles.
*/ 
function sixty4kitchen_scripts(){ 
    //Bootstrap JS and CSS files   
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.0', 'all');

    // Theme's main stylesheet (change before deployment)
    wp_enqueue_style( 'sixty4kitchen-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' ); //change before deployment
}
add_action( 'wp_enqueue_scripts', 'sixty4kitchen_scripts' );

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/
function sixty4kitchen_config(){
	register_nav_menus(
		array(
            'sixty4kitchen_main_menu' 	=> '64 Kitchen Main Menu',
            'sixty4kitchen_footer_menu' => '64 Kitchen Footer Menu',
		)
    );
    
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width'	=> 255,
        'product_grid' 			=> array(
            'default_rows'    => 10,
            'min_rows'        => 5,
            'max_rows'        => 10,
            'default_columns' => 1,
            'min_columns'     => 1,
            'max_columns'     => 1,				
        )
    ) );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }	
}

add_action( 'after_setup_theme', 'sixty4kitchen_config', 0 );

add_action( 'woocommerce_before_main_content', 'sixty4kitchen_open_container_row', 5);
function sixty4kitchen_open_container_row(){
    echo '<div class="container shop-content"><div class="row">';
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

add_action( 'woocommerce_before_main_content', 'sixty4kitchen_add_sidebar_tags', 6 );
function sixty4kitchen_add_sidebar_tags(){
    echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

add_action( 'woocommerce_before_main_content', 'sixty4kitchen_close_sidebar_tags', 8 );
function sixty4kitchen_close_sidebar_tags(){
    echo '</div>';
}

add_action( 'woocommerce_before_main_content', 'sixty4kitchen_add_shop_tags', 9 );
function sixty4kitchen_add_shop_tags(){
    echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action( 'woocommerce_after_main_content', 'sixty4kitchen_close_shop_tags', 4 );
function sixty4kitchen_close_shop_tags(){
    echo '</div>';
}

add_action( 'woocommerce_after_main_content', 'sixty4kitchen_close_container_row', 5);
function sixty4kitchen_close_container_row(){
    echo '</div></div>';
}