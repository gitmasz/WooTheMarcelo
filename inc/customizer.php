<?php

function woothe_marcelo_customizer($wp_customize) {

  /*-Copyright Section--------------------------------------------------------------*/

  $wp_customize->add_section(
    'sec_copyright',
    array(
      'title'       => __('Copyright Settings', 'woothe-marcelo'),
      'description' => __('Copyright Section', 'woothe-marcelo'),
    )
  );

  $wp_customize->add_setting(
    'set_copyright',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_copyright',
    array(
      'label'       => __('Copyright', 'woothe-marcelo'),
      'description' => __('Please, add your copyright information here', 'woothe-marcelo'),
      'section'     => 'sec_copyright',
      'type'        => 'text'
    )
  );

  /*-Slider Section-----------------------------------------------------------------*/

	$wp_customize->add_section(
		'sec_slider', array(
			'title'       => __('Slider Settings', 'woothe-marcelo'),
			'description' => __('Slider Section', 'woothe-marcelo'),
		)
	);

  // Slider Page Number 1

  $wp_customize->add_setting(
    'set_slider_page1',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_slider_page1',
    array(
      'label'       => __('Set slider page 1', 'woothe-marcelo'),
      'description' => __('Set slider page 1', 'woothe-marcelo'),
      'section'     => 'sec_slider',
      'type'        => 'dropdown-pages'
    )
  );

  // Slider Button Text Number 1

  $wp_customize->add_setting(
    'set_slider_button_text1',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_slider_button_text1',
    array(
      'label'       => __('Button Text for Page 1', 'woothe-marcelo'),
      'description' => __('Button Text for Page 1', 'woothe-marcelo'),
      'section'     => 'sec_slider',
      'type'        => 'text'
    )
  );

  // Slider Page Number 2

  $wp_customize->add_setting(
    'set_slider_page2',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_slider_page2',
    array(
      'label'       => __('Set slider page 2', 'woothe-marcelo'),
      'description' => __('Set slider page 2', 'woothe-marcelo'),
      'section'     => 'sec_slider',
      'type'        => 'dropdown-pages'
    )
  );

  // Slider Button Text Number 2

  $wp_customize->add_setting(
    'set_slider_button_text2',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_slider_button_text2',
    array(
      'label'       => __('Button Text for Page 2', 'woothe-marcelo'),
      'description' => __('Button Text for Page 2', 'woothe-marcelo'),
      'section'     => 'sec_slider',
      'type'        => 'text'
    )
  );

  // Slider Page Number 3

  $wp_customize->add_setting(
    'set_slider_page3',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_slider_page3',
    array(
      'label'       => __('Set slider page 3', 'woothe-marcelo'),
      'description' => __('Set slider page 3', 'woothe-marcelo'),
      'section'     => 'sec_slider',
      'type'        => 'dropdown-pages'
    )
  );

  // Slider Button Text Number 3

  $wp_customize->add_setting(
    'set_slider_button_text3',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_slider_button_text3',
    array(
      'label'       => __('Button Text for Page 3', 'woothe-marcelo'),
      'description' => __('Button Text for Page 3', 'woothe-marcelo'),
      'section'     => 'sec_slider',
      'type'        => 'text'
    )
  );

  /*-Home Page Settings-------------------------------------------------------------*/

  $wp_customize->add_section(
    'sec_home_page',
    array(
      'title'       => __('Home Page Products and Blog Settings', 'woothe-marcelo'),
      'description' => __('Home Page Section', 'woothe-marcelo'),
    )
  );

  // Popular Products Title
  $wp_customize->add_setting(
    'set_popular_title',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_popular_title',
    array(
      'label'       => __('Popular Products Title', 'woothe-marcelo'),
      'description' => __('Popular Products Title', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'text'
    )
  );

  // Popular Products Limit

  $wp_customize->add_setting(
    'set_popular_max_num',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_popular_max_num',
    array(
      'label'       => __('Popular Products Max Number', 'woothe-marcelo'),
      'description' => __('Popular Products Max Number', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'number'
    )
  );

  // Popular Products Columns

  $wp_customize->add_setting(
    'set_popular_max_col',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_popular_max_col',
    array(
      'label'       => __('Popular Products Max Columns', 'woothe-marcelo'),
      'description' => __('Popular Products Max Columns', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'number'
    )
  );

  // New Arrivals Title
  $wp_customize->add_setting(
    'set_new_arrivals_title',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_new_arrivals_title',
    array(
      'label'       => __('New Arrivals Title', 'woothe-marcelo'),
      'description' => __('New Arrivals Title', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'text'
    )
  );

  // New Arrivals Limit

  $wp_customize->add_setting(
    'set_new_arrivals_max_num',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_new_arrivals_max_num',
    array(
      'label'       => __('New Arrivals Max Number', 'woothe-marcelo'),
      'description' => __('New Arrivals Max Number', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'number'
    )
  );

  // New Arrivals Columns

  $wp_customize->add_setting(
    'set_new_arrivals_max_col',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_new_arrivals_max_col',
    array(
      'label'       => __('New Arrivals Max Columns', 'woothe-marcelo'),
      'description' => __('New Arrivals Max Columns', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'number'
    )
  );

  // Deal of the Week Checkbox

  $wp_customize->add_setting(
    'set_deal_show',
    array(
      'type'    => 'theme_mod',
      'default' => '',
      'sanitize_callback' => 'woothe_marcelo_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'set_deal_show',
    array(
      'label'   => __('Show Deal of the Week?', 'woothe-marcelo'),
      'section' => 'sec_home_page',
      'type'    => 'checkbox'
    )
  );

  // Deal of the Week Title
  $wp_customize->add_setting(
    'set_deal_title',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_deal_title',
    array(
      'label'       => __('Deal of the Week Title', 'woothe-marcelo'),
      'description' => __('Deal of the Week Title', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'text'
    )
  );

  // Deal of the Week Product ID

  $wp_customize->add_setting(
    'set_deal',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control(
    'set_deal',
    array(
      'label'       => __('Deal of the Week Product ID', 'woothe-marcelo'),
      'description' => __('Product ID to Display', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'number'
    )
  );

  // Blog Title

  $wp_customize->add_setting(
    'set_blog_title',
    array(
      'type'              => 'theme_mod',
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_blog_title',
    array(
      'label'       => __('Blog Section Title', 'woothe-marcelo'),
      'description' => __('Blog Section Title', 'woothe-marcelo'),
      'section'     => 'sec_home_page',
      'type'        => 'text'
    )
  );	

}

add_action('customize_register', 'woothe_marcelo_customizer');

function woothe_marcelo_sanitize_checkbox( $input ){
  return ( isset( $input ) && $input == 1 ? true : false );
}
