<?php

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function woothe_marcelo_scripts(){
	wp_enqueue_script( 'bootstrap-4', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
  wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_script( 'woothe-marcelo', get_template_directory_uri() . '/inc/woocommerce-cart.js', array( 'jquery' ), filemtime( get_template_directory() . '/inc/woocommerce-cart.js' ), true );
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

if( class_exists( 'WooCommerce' )){
	require get_template_directory() . '/inc/woocommerce-modifications.php';
}

add_action('wp_ajax_fetch_cart_items', 'fetch_cart_items');
add_action('wp_ajax_nopriv_fetch_cart_items', 'fetch_cart_items');

function fetch_cart_items() {
  $cart_items = WC()->cart->get_cart();
	$cart_count = WC()->cart->get_cart_contents_count();
	$cart_total = WC()->cart->get_total();

  $response = array();

	$cart_content = array();
  foreach ($cart_items as $cart_item_key => $cart_item) {
    $product = $cart_item['data'];

    $cart_content[] = array(
      'product_name' => $product->get_name(),
			'product_url' => $product->get_permalink(),
      'quantity' => $cart_item['quantity'],
      'price' => strip_tags(wc_price($product->get_price() * $cart_item['quantity'])),
			'regular_price' => strip_tags(wc_price($product->get_regular_price())),
			'sale_price' => strip_tags(wc_price($product->get_sale_price())),
			// thumbnail = Thumbnail (default 150px x 150px max)
			// medium = Medium resolution (default 300px x 300px max)
			// large = Large resolution (default 1024px x 1024px max)
			// full = Full resolution (original size uploaded)
			'image' => wp_get_attachment_image_url($product->get_image_id(), 'full'),
    );
  }

	$response['cart_products_count'] = $cart_count;
	$response['cart_total'] = strip_tags($cart_total);
	$response['cart_products'] = $cart_content;

  wp_send_json($response);
}
