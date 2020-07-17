<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_error_404_Page
 *
 * @package 64 Kitchen
 */

get_header();
?>
<div class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h1>Page Not Found</h1>
                    <p>Unfortunately, the page you tried to reach does not exist on this site.</p>
                    <?php the_widget( 'WP_Widget_Recent_Posts', array(
                        'title'     => 'Take a look at Our Latest Posts',
                        'number'    =>  '3',
                    ) ); ?>
                </header>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>