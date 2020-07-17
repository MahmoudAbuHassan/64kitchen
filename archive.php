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
					<div class="container">
						<div class="row">
                            <?php
                            
                                the_archive_title( '<h1 class="article-title">', '</h1>' );

								if( have_posts() ):
									// Load posts loop
									while( have_posts() ): the_post();
                                		get_template_part( 'template-parts/content', 'archive' );
									endwhile;
									the_posts_pagination( array(
										'prev_text'		=>	__('Previous', '64kitchen'),
										'next_text'		=>	__('Next', '64kitchen'),
									) );
								else:						
							?>
						<?php _e( 'Nothing to display.', '64kitchen' ) ?>
					<?php endif; ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</main>
		</div>
<?php get_footer(); ?>