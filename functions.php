<?php

/**
 * 64 Kitchen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 64 Kitchen
 */

/**
 * Register Custom Navigation Walker and customizer.php
 */
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    require_once get_template_directory() . '/inc/customizer.php';

/**
* Enqueue scripts and styles.
*/ 
function sixty4kitchen_scripts(){ 
    //Bootstrap JS and CSS files   
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.0', 'all');

    // Theme's main stylesheet (change before deployment)
    wp_enqueue_style( 'sixty4kitchen-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' ); //change before deployment

    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Seaweed+Script&display=swap' );

    // Flexslider Javascript and CSS files
    wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all');
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
    
    
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
    add_theme_support( 'custom-logo', array(
        'height'        => 85,
        'width'         => 160,
        'flex_height'   => true,
        'flex_width'    => true
    ) );

    add_image_size( 'sixty4kitchen-slider', 1920, 800, array( 'center', 'center' ) );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }	
}

add_action( 'after_setup_theme', 'sixty4kitchen_config', 0 );



// WooCommerce Modifications (if plug exists)
if( class_exists( 'WooCommerce' )){
    require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'sixty4kitchen_woocommerce_header_add_to_cart_fragment' );

function sixty4kitchen_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}