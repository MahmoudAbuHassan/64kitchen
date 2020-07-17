<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package 64 Kitchen
 */
?>

<?php if( is_active_sidebar( 'sixty4kitchen-sidebar-1' ) ): ?>
    <aside class="col-lg-3 col-md-4 col-12 h-100">
        <?php dynamic_sidebar( 'sixty4kitchen-sidebar-1' ); ?>
    </aside>
<?php endif; 