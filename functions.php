<?php

/**
 * 64 Kitchen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 64 Kitchen
 */

function sixty4kitchen_scripts(){
    wp_enqueue_style( 'sixty4kitchen-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'sixty4kitchen_scripts' );