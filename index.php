<?php get_header(); ?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<?php 
							if( have_posts() ):
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content' );
								endwhile;
								the_posts_pagination( array(
									'prev_text'		=> 'Previous',
									'next_text'		=> 'Next',
								));
							else:
						?>
							<p>Nothing to display.</p>
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>