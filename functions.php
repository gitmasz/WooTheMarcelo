<?php

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/inc/customizer.php';

function woothe_marcelo_scripts(){
  wp_enqueue_script( 'bootstrap-4', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
  wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );
  wp_enqueue_style( 'woothe-marcelo', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

  wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
  wp_enqueue_script( 'flexslider-config', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'woothe_marcelo_scripts' );

function woothe_marcelo_config(){
  $textdomain = 'woothe-marcelo';
  load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
  load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

  register_nav_menus(
    array(
      'woothe_marcelo_main_menu'   => __('Main Menu', 'woothe-marcelo'),
      'woothe_marcelo_footer_menu' => __('Footer Menu', 'woothe-marcelo')
    )
  );

  add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid'          => array(
      'default_rows'        => 10,
      'min_rows'            => 5,
      'max_rows'            => 10,
      'default_columns'     => 1,
      'min_columns'         => 1,
      'max_columns'         => 1,        
    )
  ) );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  add_theme_support( 'custom-logo', array(
    'height'      => 46,
    'width'       => 160,
    'flex-height' => true,
    'flex-width'  => true,
  ) );

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'woothe-marcelo-slider', 1920, 800, array( 'center', 'center' ) );
  add_image_size( 'woothe-marcelo-blog', 960, 640, array( 'center', 'center' ) );

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'woothe_marcelo_config', 0 );

if( class_exists( 'WooCommerce' )){
  require get_template_directory() . '/inc/woocommerce-modifications.php';
}

add_action( 'widgets_init', 'woothe_marcelo_sidebars' );
function woothe_marcelo_sidebars(){
  register_sidebar( array(
    'name'          => __('WooThe Marcelo Main Sidebar', 'woothe-marcelo'),
    'id'            => 'woothe-marcelo-sidebar-1',
    'description'   => __('Drag and drop your widgets here', 'woothe-marcelo'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => __('Sidebar Shop', 'woothe-marcelo'),
    'id'            => 'woothe-marcelo-sidebar-shop',
    'description'   => __('Drag and drop your WooCommerce widgets here', 'woothe-marcelo'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => __('Footer Sidebar 1', 'woothe-marcelo'),
    'id'            => 'woothe-marcelo-sidebar-footer1',
    'description'   => __('Drag and drop your widgets here', 'woothe-marcelo'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => __('Footer Sidebar 2', 'woothe-marcelo'),
    'id'            => 'woothe-marcelo-sidebar-footer2',
    'description'   => __('Drag and drop your widgets here', 'woothe-marcelo'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => __('Footer Sidebar 3', 'woothe-marcelo'),
    'id'            => 'woothe-marcelo-sidebar-footer3',
    'description'   => __('Drag and drop your widgets here', 'woothe-marcelo'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );  
}