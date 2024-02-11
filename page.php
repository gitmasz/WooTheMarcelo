<?php get_header(); ?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<?php 
							if( have_posts() ):
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'page' );
								endwhile;
							else:
						?>
							<p><?php _e( 'Nothing to display.', 'woothe-marcelo' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>