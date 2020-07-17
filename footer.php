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
						<div class="row">
							<?php if( is_active_sidebar( 'sixty4kitchen-sidebar-footer1' ) ): ?>
								<div class="col-md-4 col-12">
									<?php dynamic_sidebar( 'sixty4kitchen-sidebar-footer1' ); ?>
								</div>
							<?php endif; ?>
								<div class="col-md-4 col-12">
							<?php if( is_active_sidebar( 'sixty4kitchen-sidebar-footer2' ) ): ?>
									<?php dynamic_sidebar( 'sixty4kitchen-sidebar-footer2' ); ?>
								</div>
							<?php endif; ?>
								<div class="col-md-4 col-12">
							<?php if( is_active_sidebar( 'sixty4kitchen-sidebar-footer3' ) ): ?>
									<?php dynamic_sidebar( 'sixty4kitchen-sidebar-footer3' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">
							<p><?php echo get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ); ?></p>
						</div>
						<nav class="footer-menu col-12 col-md-6 text-left text-md-right">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'sixty4kitchen_footer_menu'
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