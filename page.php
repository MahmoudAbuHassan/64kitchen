<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 64 Kitchen
 */
get_header();
?>
		<div class="content-area">
			<main>
				<section class="lab-blog">
					<div class="container">
						<div class="row">
							<?php
								// If there are any posts 
								if( have_posts() ):

									// Load posts loop
									while( have_posts() ): the_post();
										?>
											<article class="col">
												<h1><?php the_title(); ?></h1>
												<div><?php the_content(); ?></div>
											</article>
										<?php
									endwhile;
								else:	
							?>
								<p>Nothing to display.</p>
							<?php endif; ?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>