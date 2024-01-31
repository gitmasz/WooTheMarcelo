<?php

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

function woothe_marcelo_woocommerce_modify(){

  add_action( 'woocommerce_before_main_content', 'woothe_marcelo_open_container_row', 5 );
  function woothe_marcelo_open_container_row(){
    echo '<div class="container shop-content"><div class="row">';
  }

  add_action( 'woocommerce_after_main_content', 'woothe_marcelo_close_container_row', 5 );
  function woothe_marcelo_close_container_row(){
    echo '</div></div>';
  }

  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

  if( is_shop() ){

    add_action( 'woocommerce_before_main_content', 'woothe_marcelo_add_sidebar_tags', 6 );
    function woothe_marcelo_add_sidebar_tags(){
      echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    }
    
    add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );
    
    add_action( 'woocommerce_before_main_content', 'woothe_marcelo_close_sidebar_tags', 8 );
    function woothe_marcelo_close_sidebar_tags(){
      echo '</div>';
    }

    add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );

  };

  add_action( 'woocommerce_before_main_content', 'woothe_marcelo_add_shop_tags', 9 );
  function woothe_marcelo_add_shop_tags(){
    if( is_shop()){
      echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
    } else{
      echo '<div class="col">';
    }
  }

  add_action( 'woocommerce_after_main_content', 'woothe_marcelo_close_shop_tags', 4 );
  function woothe_marcelo_close_shop_tags(){
    echo '</div>';
  }

  function woothe_marcelo_woocommerce_scripts(){
    wp_enqueue_script( 'woothe-marcelo-cart', get_template_directory_uri() . '/inc/woocommerce-cart.js', array( 'jquery' ), filemtime( get_template_directory() . '/inc/woocommerce-cart.js' ), true );
  }
  add_action( 'wp_enqueue_scripts', 'woothe_marcelo_woocommerce_scripts' );

}

add_action( 'wp', 'woothe_marcelo_woocommerce_modify' );
