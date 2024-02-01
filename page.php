<?php get_header(); ?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<?php 
							if( have_posts() ):
								while( have_posts() ): the_post();
									?>
										<article class="col">
											<h1><?php the_title(); ?></h1>
											<div>
												<?php
													wp_link_pages(
														array(
															'before' => '<p class="inner-pagination">' . 'Pages',
															'after'  => '</p>',
														)
													);
												?>
												<?php the_content(); ?>
											</div>
											<?php 
											if( comments_open() || get_comments_number() ):
												comments_template();
											endif;
											?>
										</article>
									<?php
								endwhile;
							else:
						?>
							<p>Nothing to display.</p>
						<?php endif; ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>