<?php
/**
 * The template for the sidebar containing the shop widget area
 *
 * @package 64 Kitchen
 */
?>

<?php if( is_active_sidebar( 'sixty4kitchen-sidebar-shop' ) ): ?>
        <?php dynamic_sidebar( 'sixty4kitchen-sidebar-shop' ); ?>
<?php endif; 