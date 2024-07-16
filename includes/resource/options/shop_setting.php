<?php

return array(
	'title'      => esc_html__( 'Shop Page Settings', 'metrobank' ),
	'id'         => 'shop_setting',
	'desc'       => '',

	  'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'shop_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Shop Banner Source Type', 'metrobank' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'metrobank' ),
				'e' => esc_html__( 'Elementor', 'metrobank' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'shop_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'metrobank' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'shop_source_type', '=', 'e' ],
		),

		array(
			'id'       => 'shop_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Shop Banner Default', 'metrobank' ),
			'indent'   => true,
			'required' => [ 'shop_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'shop_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Banner', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'metrobank' ),
			'default' => false,
		),
			array(
			'id'      => 'shop_page_title',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Page Title ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Page Title', 'metrobank' ),
			'default' => false,
		),
		
		
			array(
			'id'      => 'shop_bread',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Bread Crumb ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		
		
		array(         
			'id'       => 'shop_page_background',
			'type'     => 'background',
			'title'    => __('Page Title Background', 'redux-framework-demo'),
			'output'      => array('.mr_page_title.shop_page_title'),
			'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
			'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'), 
			'default'  => array(
				'background-color' => '',
			)
		),
		
		array(
			'id'       => 'shop_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'metrobank' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'metrobank' ),
		),
		
	
		
		
	/*
		array(
			'id'       => 'shop_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background Image', 'metrobank' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'metrobank' ),
			'default'  => array(
				'url' => METROBANK_URI . 'assets/images/pagetitle.jpg',
			),
		
		),
*/
		
			array(
			'id'       => 'shop_default_stss',
			'type'     => 'section',
			'title'    => esc_html__( 'Shop Setting Area', 'metrobank' ),
			'indent'   => true,
			
		),
		array(
			'id'       => 'shop_sidebar_layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout', 'metrobank' ),
			'subtitle' => esc_html__( 'Select main content and sidebar alignment.', 'metrobank' ),
			'options'  => array(

				'left'  => array(
					'alt' => esc_html__( '2 Column Left', 'metrobank' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cl.png',
				),
				'full'  => array(
					'alt' => esc_html__( '1 Column', 'metrobank' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/1col.png',
				),
				'right' => array(
					'alt' => esc_html__( '2 Column Right', 'metrobank' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cr.png',
				),
			),

			'default' => 'right',
		),

		array(
			'id'       => 'shop_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'metrobank' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'metrobank' ),
			'required' => array(
				array( 'shop_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => metrobank_get_sidebars(),
		),
	

		  array (
        'id'       => 'shop_column',
        'type'     => 'select',
        'title'    => __('Shop Column', 'metrobank'), 
        'desc'     => __('This is Shop Column', 'metrobank'),
         // Must provide key => value pairs for select options
        'options'  => array(
            '6' => 'Two Column',
            '4' => 'Three Column',
            '3' => 'Four Column',
			'2' => 'Six Column',
            ),
        'default'  => '2',
    ),
	  array (
        'id'       => 'shop_product',
        'type'     => 'text',
        'title'    => __('Number of Products', 'metrobank'), 
        'desc'     => __('This is Number of Products', 'metrobank'),
        'default'  => '8',
    ),

		array(
			'id'       => 'shop_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'shop_source_type', '=', 'd' ],
		),
	),
);