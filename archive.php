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
								?>
									<article <?php post_class(); ?> >
										<h2>
										<a href="<?php the_permalink();  ?>"> <?php the_title(); ?>
											</h2>
											</a>
											<div class="post-thumbnail">
												<?php 
												if( has_post_thumbnail() ):
													the_post_thumbnail( 'sixty4kitchen-blog', array( 'class' => 'img-fluid') );
												endif;
												?>
											</div>
											<div class="meta">
												<p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?> 
												<br />
												<?php if( has_category() ): ?>
													Categories: <span><?php the_category( ' ' ); ?></span>
												<?php endif; ?>
												<?php if( has_tag() ): ?>
													Tags: <span><?php the_tags( '', ', ' ); ?></span>
												<?php endif; ?>
												</p>
											</div>
											<div><?php the_excerpt(); ?></div>
										</article>
									<?php
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