<?php 
/**
 * Template Overrides for WooCommerce pages
 *
 * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
 *
 * @package 64 Kitchen
 */
function sixty4kitchen_wc_modify(){

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

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