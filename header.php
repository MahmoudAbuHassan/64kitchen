<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 64 Kitchen
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<section class="search">
				<div class="container">
					Search
				</div>
			</section>
			<section class="top-bar">
				<div class="container">
					<div class="row">
						<div class="brand col-12 col-md-3  col-lg-2 text-center text-md-left">Logo</div>
						<div class="second-column col-12 col-md-9 col-12 col-lg-10">
							<div class="row">
								<div class="account col-12">Account</div>
								<div class="col-12">
									<nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
											<!-- Brand and toggle get grouped for better mobile display -->
											<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" 	aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
												<span class="navbar-toggler-icon"></span>
											</button>
											<?php
												wp_nav_menu( array(
													'theme_location'    => 'sixty4kitchen_main_menu',
													'depth'             => 3,
													'container'         => 'div',
													'container_class'   => 'collapse navbar-collapse',
													'container_id'      => 'bs-example-navbar-collapse-1',
													'menu_class'        => 'nav navbar-nav',
													'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
													'walker'            => new WP_Bootstrap_Navwalker(),
												) );
											?>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>