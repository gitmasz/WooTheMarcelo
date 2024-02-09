<?php get_header(); ?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-8 col-12">
						<?php 
							if( have_posts() ):
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content' );
								endwhile;
								the_posts_pagination( array(
									'prev_text' => __( 'Previous', 'woothe-marcelo' ),
									'next_text' => __( 'Next', 'woothe-marcelo' ),
								));
							else:
						?>
							<p><?php _e( 'Nothing to display.', 'woothe-marcelo' ); ?></p>
						<?php endif; ?>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>