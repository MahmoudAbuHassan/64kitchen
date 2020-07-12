<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 64 Kitchen
 */

?>
		<footer>
			<section class="footer-widgets">
					<div class="container">
						<div class="row">Footer Widgets</div>
					</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">CopyRight</div>
						<nav class="footer-menu col-12 col-md-6 text-left text-md-right">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'sixty4kitchen_main_menu'
								)
							);
						?>
						</nav>
					</div>
				</div>
			</section>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>