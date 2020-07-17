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
							?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>