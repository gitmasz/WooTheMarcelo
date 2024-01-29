<?php

function woothe_marcelo_scripts(){
  wp_enqueue_script( 'bootstrap-4', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
  wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );
  wp_enqueue_style( 'woothe-marcelo', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'woothe_marcelo_scripts' );

function woothe_marcelo_config(){
	register_nav_menus(
		array(
			'woothe_marcelo_main_menu' 	=> __('Main Menu', 'woothe-marcelo'),
      'woothe_marcelo_footer_menu' 	=> __('Footer Menu', 'woothe-marcelo')
		)
	);

	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width'	=> 255,
		'product_grid' 			=> array(
						'default_rows'    => 10,
						'min_rows'        => 5,
						'max_rows'        => 10,
						'default_columns' => 1,
						'min_columns'     => 1,
						'max_columns'     => 1,				
		)
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}		
}
add_action( 'after_setup_theme', 'woothe_marcelo_config', 0 );

add_action( 'woocommerce_before_main_content', 'woothe_marcelo_open_container_row', 5 );
function woothe_marcelo_open_container_row(){
	echo '<div class="container shop-content"><div class="row">';
}

add_action( 'woocommerce_after_main_content', 'woothe_marcelo_close_container_row', 5 );
function woothe_marcelo_close_container_row(){
	echo '</div></div>';
}

add_action( 'woocommerce_before_main_content', 'woothe_marcelo_add_sidebar_tags', 6 );
function woothe_marcelo_add_sidebar_tags(){
	echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

add_action( 'woocommerce_before_main_content', 'woothe_marcelo_close_sidebar_tags', 8 );
function woothe_marcelo_close_sidebar_tags(){
	echo '</div>';
}

add_action( 'woocommerce_before_main_content', 'woothe_marcelo_add_shop_tags', 9 );
function woothe_marcelo_add_shop_tags(){
	echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action( 'woocommerce_after_main_content', 'woothe_marcelo_close_shop_tags', 4 );
function woothe_marcelo_close_shop_tags(){
	echo '</div>';
}