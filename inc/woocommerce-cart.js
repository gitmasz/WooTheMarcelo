function getWoocommerceCart() {
  fetch('/wp-admin/admin-ajax.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'action=fetch_cart_items',
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      jQuery(document).ready(($) => {
        $('.cart .items').text(data.cart_products_count);
      })
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

jQuery(document).ready(($) => {

  $(document.body).on('added_to_cart', () => {
    getWoocommerceCart()
  })

  let updatingCart = false;

  $('.wc-block-components-quantity-selector__input').on('keyup change paste', () => {
    console.log('Quantity input value changed');
    updatingCart = true
  })

  $('.wc-block-components-quantity-selector__button').on('click', () => {
    console.log('Clicked on quantity selector button');
    updatingCart = true
  })

  $('.wc-block-cart-item__remove-link').on('click', () => {
    console.log('Clicked on Remove item');
    updatingCart = true
  })

  $('.wc-block-components-totals-item__value').on('DOMSubtreeModified', () => {
    console.log('Price changed');
    if(updatingCart){
      getWoocommerceCart()
      updatingCart = false
    }
  })

  $(document.body).on(
    'init_checkout payment_method_selected update_checkout updated_checkout checkout_error applied_coupon_in_checkout removed_coupon_in_checkout adding_to_cart added_to_cart removed_from_cart wc_cart_button_updated cart_page_refreshed cart_totals_refreshed wc_fragments_loaded init_add_payment_method wc_cart_emptied updated_wc_div updated_cart_totals country_to_state_changed updated_shipping_method applied_coupon removed_coupon',
    (e) => {
      console.log(e.type)
    }
  )

})

