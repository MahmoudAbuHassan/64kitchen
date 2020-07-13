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

if( class_exists( 'WooCommerce' )){
    require get_template_directory() . '/inc/wc-modifications.php';
}

add_filter( 'woocommerce_checkout_fields' , 'sixty4kitchen_remove_billing_postcode_checkout' );
 
function sixty4kitchen_remove_billing_postcode_checkout( $fields ) {
  unset($fields['billing']['billing_postcode']);
  return $fields;
}

add_filter( 'woocommerce_get_order_item_totals', 'remove_subtotal_from_orders_total_lines', 100, 1 );

function remove_subtotal_from_orders_total_lines( $totals ) {
    unset($totals['cart_subtotal']  );
    return $totals;
}