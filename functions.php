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
}

add_action( 'after_setup_theme', 'woothe_marcelo_config', 0 );