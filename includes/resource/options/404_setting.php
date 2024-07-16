<?php

return array(
	'title'      => esc_html__( '404 Page Settings', 'metrobank' ),
	'id'         => '404_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		
		array(
			'id'      => '404_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Banner Type', 'metrobank' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'metrobank' ),
				'e' => esc_html__( 'Elementor', 'metrobank' ),
			),
			'default' => 'd',
		),
		
		array(
			'id'       => '404_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'metrobank' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
			],
			'required' => [ '404_source_type', '=', 'e' ],
		),
		
		array(
			'id'       => '404_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Default Theme Banner', 'metrobank' ),
			'indent'   => true,
			'required' => [ '404_source_type', '=', 'd' ],
			
		),

		
		array(
			'id'      => '404_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Banner', 'abias' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'abias' ),
			'default' => false,
		),
		
		array(
			'id'      => 'error_page_title',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Title ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'      => 'error_bread',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Bread Crumb ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		

		
		array(
			'id'       => '404_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'abias' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'abias' ),

		),
/*
			array(         
				'id'       => '404_page_background',
				'type'     => 'background',
				'title'    => __('Page Title Background', 'redux-framework-demo'),
				'output'      => array('.mr_page_title.404_page_title'),
				'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
				'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'), 
				'default'  => array(
					'background-color' => '',
				)
			),
			*/
		array(
			'id'       => '404_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Image', 'metrobank' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'metrobank' ),
		
		),

	array(
			'id'       => '404_default_sttitle',
			'type'     => 'section',
			'title'    => esc_html__( 'Error Section Input', 'metrobank' ),
			'indent'   => true,
			
		),

		array(
			'id'    => '404_title',
			'type'  => 'text',
			'title' => esc_html__( '404', 'metrobank' ),
			'desc'  => esc_html__( 'Enter 404', 'metrobank' ),

		),
		
		array(
            'id' => '404_title_typography',
            'type' => 'typography',
            'title' => esc_html__(' Error Heading  Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.error-content .big-title.mr_404' ),
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the body,paragraph font for the theme', 'metrobank'),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ),
        
        ),	
			
		
		
		
		
		array(
			'id'    => '404_page_title',
			'type'  => 'text',
			'title' => esc_html__( '404 Title', 'metrobank' ),
			'desc'  => esc_html__( 'Enter 404 section title that you want to show', 'metrobank' ),

		),
		
		
		array(
            'id' => '404_typography',
            'type' => 'typography',
            'title' => esc_html__(' Error Title Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.error-content .title.mr_404_title' ),
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the body,paragraph font for the theme', 'metrobank'),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ),
        
        ),	
			
		
		
		array(
			'id'    => '404_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( '404 Page Description', 'metrobank' ),
			'desc'  => esc_html__( 'Enter 404 page description that you want to show.', 'metrobank' ),

		),
		
			array(
            'id' => '404_text_typography',
            'type' => 'typography',
            'title' => esc_html__(' Error Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.error-content p.mr_page_text' ),
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the body,paragraph font for the theme', 'metrobank'),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ),
        
        ),	
			
		
		
	
		array(
			'id'    => 'back_home_btn',
			'type'  => 'switch',
			'title' => esc_html__( 'Show Button', 'metrobank' ),
			'desc'  => esc_html__( 'Enable to show back to home button.', 'metrobank' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_home_btn_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Button Label', 'metrobank' ),
			'desc'     => esc_html__( 'Enter back to home button label that you want to show.', 'metrobank' ),
			'default'  => esc_html__( 'Back To Home Page', 'metrobank' ),

		),
		
		
	array(
            'id' => 'error_button',
            'type' => 'typography',
            'title' => esc_html__(' Error Button Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.error_button' ),
            'units' => 'px',
            'subtitle' => esc_html__('Apply options to customize the body,paragraph font for the theme', 'metrobank'),
            'default' => array(
                'color' => '',
                'font-style' => '',
                'font-family' => '',
                'google' => true,
                'font-size' => '',
                'line-height' => ''
            ),
        
        ),	


		array(
			'id'     => '404_post_settings_end',
			'type'   => 'section',
			'indent' => false,
		),

	),
);





