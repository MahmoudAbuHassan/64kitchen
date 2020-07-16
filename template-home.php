<?php 
/*
Template Name: Home Page
*/ 

get_header(); ?>
		<div class="content-area">
			<main>
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
						<?php 
						for ($i=1; $i < 4; $i++) : 
							$slider_page[$i] 		= get_theme_mod( 'set_slider_page' . $i );
							$slider_button_text[$i] = get_theme_mod( 'set_slider_button_text' . $i );
							$slider_button_url[$i] 	= get_theme_mod( 'set_slider_button_url' . $i );
						endfor;
						$args = array(
							'post_type'			=> 'page',
							'posts_per_page'	=> 3,
							'post__in'			=> $slider_page,
							'orderby'			=> 'post__in',
						);
						$slider_loop = new WP_Query( $args );
						$j = 1;
						if( $slider_loop->have_posts() ):
							while( $slider_loop->have_posts() ):
								$slider_loop->the_post();
						?>
						<li>
							<?php the_post_thumbnail( 'sixty4kitchen-slider', array( 'class' => 'img-fluid' ) ); ?>
							<div class="container">
								<div class="slider-details-container">
									<div class="slider-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="slider-description">
										<div class="subtitle"><?php the_content(); ?></div>
										<a class="link" href="<?php echo $slider_button_url[$j]; ?>"><?php echo $slider_button_text[$j]; ?></a>
									</div>
								</div>
							</div>
						</li>
						<?php 
						$j++;
						endwhile;
						wp_reset_postdata();
						endif;
						?>
						</ul>
					</div>
				</section>
				<section class="popular-products">
					<?php 
					 $popular_limit = get_theme_mod( 'set_popular_max_num', 4 );
					 $popular_col = get_theme_mod( 'set_popular_max_col', 4 );
					 $arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 4 );
					 $arrivals_col = get_theme_mod( 'set_new_arrivals_max_col', 4 );
					?>
					<div class="container">
						<div class="section-title">
						<h2><?php echo get_theme_mod( 'set_popular_text', 'Popular Products' ); ?></h2>
						</div>
						<?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]') ?>
					</div>
				</section>
				<section class="new-arrivals">
					<div class="container">
						<div class="section-title">
						<h2><?php echo get_theme_mod( 'set_new_arrivals_text', 'New Arrivals' ); ?></h2>
						</div>
						<?php echo do_shortcode( '[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]' ); ?>
					</div>
					<?php if ( class_exists( 'WooCommerce' ) ): ?>
				</section>
				<?php 		
				$showdeal			= get_theme_mod( 'set_deal_show', 0 );
				$deal				= get_theme_mod( 'set_deal' );
				$currency			= get_woocommerce_currency_symbol();
				$regular			= get_post_meta( $deal, '_regular_price', true );
				$sale				= get_post_meta( $deal, '_sale_price', true );	

				if( $showdeal == 1 && !empty( $deal ) && $sale != 0 ): 
				?>
					<section class="deal-of-the-week">
						<div class="container">
							<div class="section-title">
							<h2><?php echo get_theme_mod( 'set_deal_text', 'Deal of the Week' ), $discount_percentage ?></h2>
							</div>
							<div class="row d-flex align-items-center">
								<div class="deal-img col-md-6 col-12 ml-auto text-center">
									<?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
								</div>
								<div class="deal-desc col-md-4 col-12 mr-auto text-center">
									<span class="discount">
									<?php if ( $showdeal == 1 &&  !empty( $deal ) && $sale != 0 ): 
										$discount_percentage = absint( 100-( ( $sale/$regular ) * 100 ) );
										echo $discount_percentage . '% OFF' ?>
									</span>
									<?php endif; ?>
									<h3>
										<a href="<?php echo get_permalink( $deal ) ; ?>"><?php echo get_the_title( $deal ); ?></a>
									</h3>
										<p><?php echo get_the_excerpt( $deal ); ?></p>
										<div class="prices">
											<span class="regular">
												<?php 
												echo $currency;
												echo $regular
												?>
											</span>
											<?php if( $showdeal == 1 && !empty( $deal ) && $sale != 0 ): ?>
												<span class="sale">
												<?php 
													echo $currency;
													echo $sale
												?>
												</span>
											<?php endif; ?>
										</div>
									<a href="<?php echo esc_url( '?add-to-cart=' .$deal ); ?>" class="add-to-cart">Add to Cart</a>
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php endif; ?>
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

