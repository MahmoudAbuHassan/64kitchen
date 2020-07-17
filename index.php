<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 64Kitchen
 */

get_header();
?>
		<div class="content-area">
			<main>
				<section class="sixty4kitchen-blog">
					<div class="container">
						<div class="row">
							<?php
								// Load posts loop
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content' );
								endwhile;
								the_posts_pagination( array(
									'prev_text'		=>	'Previous',
									'next_text'		=>	'Next'
								) );	
							?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>