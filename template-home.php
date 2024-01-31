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
								$slider_page[$i]        = get_theme_mod( 'set_slider_page' . $i );
								$slider_button_text[$i] = get_theme_mod( 'set_slider_button_text' . $i ); 
								$slider_button_url[$i]  = get_theme_mod( 'set_slider_button_url' . $i );
							endfor;

							$args = array(
								'post_type'      => 'page',
								'posts_per_page' => 3,
								'post__in'       => $slider_page,
								'orderby'        => 'post__in',
							);
	
							$slider_loop = new WP_Query( $args );
							$j = 1;
							if( $slider_loop->have_posts() ):
								while( $slider_loop->have_posts() ):
									$slider_loop->the_post();
						?>
					    <li>
								<?php the_post_thumbnail( 'woothe-marcelo-slider', array( 'class' => 'img-fluid' ) ); ?>
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
				<?php 
					$popular_limit = get_theme_mod( 'set_popular_max_num', 4 );
					$popular_col = get_theme_mod( 'set_popular_max_col', 4 );
				?>
				<section class="popular-products">
					<div class="container">
						<h2>Popular Products</h2>
						<?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]' ); ?>
					</div>
				</section>
				<?php 
					$arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 4 );
					$arrivals_col = get_theme_mod( 'set_new_arrivals_max_col', 4 );
				?>
				<section class="new-arrivals">
					<div class="container">
						<h2>New Arrivals</h2>
						<?php echo do_shortcode( '[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]' ); ?>
					</div>
				</section>
				<section class="deal-of-the-week">
					<div class="container">
						<div class="row">Deal of the Week</div>
					</div>
				</section>
				<section class="blog">
					<div class="container">
						<div class="row">
							<?php 
								if( have_posts() ):
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