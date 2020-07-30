<?php 
/**
 * Template Overrides for WooCommerce pages
 *
 * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
 *
 * @package 64 Kitchen
 */
function sixty4kitchen_wc_modify(){
    add_action( 'woocommerce_before_main_content', 'sixty4kitchen_open_container_row', 5);
    function sixty4kitchen_open_container_row(){
        echo '<div class="container shop-content"><div class="row">';
    }

    if( is_shop() ){    
        add_action( 'woocommerce_before_main_content', 'sixty4kitchen_close_sidebar_tags', 8 );
        function sixty4kitchen_close_sidebar_tags(){
            echo '</div>';
        }
    }

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
    
    add_action( 'woocommerce_before_main_content', 'sixty4kitchen_add_shop_tags', 9 );
    function sixty4kitchen_add_shop_tags(){
        if( is_shop() ){
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        }else{
            echo '<div class="col">';
        }
    }

    add_action( 'woocommerce_after_main_content', 'sixty4kitchen_close_shop_tags', 4 );
    function sixty4kitchen_close_shop_tags(){
        echo '</div>';
    }

    add_action( 'woocommerce_after_main_content', 'sixty4kitchen_close_container_row', 5);
    function sixty4kitchen_close_container_row(){
        echo '</div></div>';
    }

    add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
}
add_action( 'wp', 'sixty4kitchen_wc_modify' );


//Removing postal codes
add_filter( 'woocommerce_checkout_fields' , 'sixty4kitchen_remove_billing_fields_checkout' );
 
function sixty4kitchen_remove_billing_fields_checkout( $fields ) {
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_state']);
  return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'sixty4kitchen_remove_shipping_fields_checkout' );
function sixty4kitchen_remove_shipping_fields_checkout( $fields ) {
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_state']);
    return $fields;
  }

// filtering subtotals
add_filter( 'woocommerce_get_order_item_totals', 'remove_subtotal_from_orders_total_lines', 100, 1 );

function remove_subtotal_from_orders_total_lines( $totals ) {
    unset($totals['cart_subtotal']  );
    return $totals;
}

add_filter( 'woocommerce_min_password_strength', 'reduce_min_strength_password_requirement' );
function reduce_min_strength_password_requirement( $strength ) {
    // 3 => Strong (default) | 2 => Medium | 1 => Weak | 0 => Very Weak (anything).
    return 0; 
}

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );