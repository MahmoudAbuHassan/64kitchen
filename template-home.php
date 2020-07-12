<?php 
/*
Template Name: Home Page
*/ 

get_header();
?>
		<div class="content-area">
			<main>
				<section class="slider">
					<div class="container">
						<div class="row">Slider</div>
					</div>
				</section>
				<section class="popular-products">
					<div class="container">
						<div class="row">Popular Products</div>
					</div>
				</section>
				<section class="new-arrivals">
					<div class="container">
						<div class="row">New Arrivals</div>
					</div>
				</section>
				<section class="deal-of-the-week">
					<div class="container">
						<div class="row">Deal of the Week</div>
					</div>
				</section>
				<section class="lab-blog">
					<div class="container">
						<div class="row">
							<?php
								// If there are any posts 
								if( have_posts() ):

									// Load posts loop
									while( have_posts() ): the_post();
										?>
											<article>
												<h2><?php the_title(); ?></h2>
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