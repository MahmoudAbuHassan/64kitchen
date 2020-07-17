<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 64 Kitchen
 */

get_header();
?>
		<div class="content-area">
			<main>
				<section class="sixty4kitchen-blog">
					<div class="container">
						<div class="row">
                            <?php
                            
                                the_archive_title( '<h1 class="article-title">', '</h1>' );

								// Load posts loop
								while( have_posts() ): the_post();
                                get_template_part( 'template-parts/content', 'archive' );
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