<?php 
/*
Template Name: Home Page
*/ 

get_header(); ?>
		<div class="content-area">
			<main>
				<!-- Slider -->
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
							<?php the_post_thumbnail( 'sixty4kitchen-slider', array( 'class' => '' ) ); ?>
							<div class="row justify-content-center">
								<div class="slider-details-container d-inline">
									<div class="slider-title">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="subtitle"><?php the_content(); ?></div>
									<div class="slider-description">
										<a class="link" href="<?php echo esc_url( $slider_button_url[$j] ); ?>"><?php echo esc_html( $slider_button_text[$j] ); ?></a>
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
				</section><!-- End of Slider -->

				<!-- Popular Products -->
				<section class="popular-products">
					<?php 
					 $popular_limit = get_theme_mod( 'set_popular_max_num', 4 );
					 $popular_col = get_theme_mod( 'set_popular_max_col', 4 );
					 $arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 4 );
					 $arrivals_col = get_theme_mod( 'set_new_arrivals_max_col', 4 );
					?>
					<div class="container">
						<div class="section-title">
						<h2><?php echo esc_html( get_theme_mod( 'set_popular_text' ) ); ?></h2>
						</div>
						<?php echo do_shortcode( '[products limit=" ' . esc_attr( $popular_limit ) . ' " columns=" ' . esc_attr( $popular_col ) . ' " orderby="popularity"]') ?>
					</div>
				</section><!-- End of popular products -->

				<!-- New Arrivals -->
				<section class="new-arrivals">
					<div class="container">
						<div class="section-title">
						<h2><?php echo esc_html( get_theme_mod( 'set_new_arrivals_text', __( 'New Arrivals','64kitchen' )  ) ); ?></h2>
						</div>
						<?php echo do_shortcode( '[products limit=" ' . esc_attr( $arrivals_limit ) . ' " columns=" ' . esc_attr( $arrivals_col ) . ' " orderby="date"]' ); ?>
					</div>
					<?php if ( class_exists( 'WooCommerce' ) ): ?>
				</section><!-- End of New Arrivals -->

				<!-- Deal of the week -->
				<section class="deal-of-the-week">
					<?php 		
					$showdeal			= get_theme_mod( 'set_deal_show', 0 );
					$deal				= get_theme_mod( 'set_deal' );
					$currency			= get_woocommerce_currency_symbol();
					$regular			= get_post_meta( $deal, '_regular_price', true );
					$sale				= get_post_meta( $deal, '_sale_price', true );	

					if( $showdeal == 1 && !empty( $deal ) && $sale != 0 ): 
					?>
					<div class="container">
						<div class="section-title">
						<h2><?php echo esc_html( get_theme_mod( 'set_deal_text', __( 'Deal of the Week','64kitchen' )  ), $discount_percentage ); ?></h2>
						</div>
						<div class="row deal-of-the-week-img-desc">
							<div class="deal-img col-md-6 col-12 text-center">
							<a href="<?php echo esc_url( get_permalink( $deal ) ); ?>">
								<?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?></a>
							</div>
							<div class="deal-desc col-md-4 col-12 text-center">
								<span class="discount">
								<?php if ( $showdeal == 1 &&  !empty( $deal ) && $sale != 0 ): 
									$discount_percentage = absint( 100-( ( $sale/$regular ) * 100 ) );
									echo esc_html( $discount_percentage . esc_html__('% OFF', '64kitchen') ); ?>
								</span>
								<?php endif; ?>
								<h3>
									<a href="<?php echo esc_url( get_permalink( $deal ) ); ?>"><?php echo esc_html( get_the_title( $deal ) ) ; ?></a>
								</h3>
									<p><?php echo esc_html( get_the_excerpt( $deal ) ); ?></p>
									<div class="prices">
										<span class="regular">
											<?php 
											echo esc_html( $currency );
											echo esc_html( $regular );
											?>
										</span>
										<?php if( $showdeal == 1 && !empty( $deal ) && $sale != 0 ): ?>
											<span class="sale">
											<?php 
												echo esc_html( $currency );
												echo esc_html( $sale );
											?>
											</span>
										<?php endif; ?>
									</div>
								<a href="<?php echo esc_url( '?add-to-cart=' .$deal ); ?>" class="add-to-cart"><?php esc_html_e( 'Add to Cart','64kitchen' )  ?></a>
							</div>
						</div>
					</div>
				</section>
				<?php endif; ?>
				<?php endif; ?><!-- End of Deal of the Week -->
				
				<!-- Blog -->
				<section class="sixty4kitchen-blog">
					<div class="container">
					<div class="section-title">
							<h2><?php echo esc_html( get_theme_mod( 'set_blog_text', __('News From Our Blog', '64kitchen') ) ); ?></h2>
						</div>
						<div class="row">
							<?php

							$args = array(
								'post_type'			=> 'post',
								'posts_per_page'	=>	'2'
							);

							$blog_posts = new WP_Query( $args );

								// If there are any posts 
								if( $blog_posts->have_posts() ):

									// Load posts loop
									while( $blog_posts->have_posts() ): $blog_posts->the_post();
										?>
											<article class="col-12 col-md-6">
												<a href="<?php the_permalink(); ?>">
													<?php 
														if( has_post_thumbnail() ):
															the_post_thumbnail( 'sixty4kitchen-blog', array( 'class' => 'img-fluid' ) );
														endif;
													?>
												</a>
												<h3>
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h3>
												<div class="excerpt"><?php the_excerpt(); ?></div>
											</article>
										<?php
									endwhile;
									wp_reset_postdata();
								else:	
							?>
								<p><?php esc_html_e( 'Nothing to display.','64kitchen' )  ?></p>
							<?php endif; ?>
						</div>
					</div>
				</section><!-- End of Blog -->
			</main>
		</div>
<?php get_footer(); ?>