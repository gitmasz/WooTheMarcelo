		<footer>
			<section class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php if( is_active_sidebar( 'woothe-marcelo-sidebar-footer1' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'woothe-marcelo-sidebar-footer1' ); ?>
							</div>
						<?php endif; ?>
						<?php if( is_active_sidebar( 'woothe-marcelo-sidebar-footer2' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'woothe-marcelo-sidebar-footer2' ); ?>
							</div>
						<?php endif; ?>	
						<?php if( is_active_sidebar( 'woothe-marcelo-sidebar-footer3' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'woothe-marcelo-sidebar-footer3' ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">
							<p><?php echo esc_html(get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved', 'woothe-marcelo' )); ?></p>
						</div>
						<nav class="footer-menu col-12 col-md-6 text-left text-md-right">
							<?php 
								wp_nav_menu( 
									array(
										'theme_location' => 'woothe_marcelo_footer_menu',
										'depth'          => 1,
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