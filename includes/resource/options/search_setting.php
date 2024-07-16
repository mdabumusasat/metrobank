<?php

return  array(
    'title'      => esc_html__( 'Search Page Settings', 'metrobank' ),
    'id'         => 'search_setting',
    'desc'       => '', 
    'subsection' => true,
    'fields'     => array(
	    array(
		    'id'      => 'search_source_type',
		    'type'    => 'button_set',
		    'title'   => esc_html__( 'Search Banner Type', 'metrobank' ),
		    'options' => array(
			    'd' => esc_html__( 'Default', 'metrobank' ),
			    'e' => esc_html__( 'Elementor', 'metrobank' ),
		    ),
		    'default' => 'd',
	    ),
	    array(
		    'id'       => 'search_elementor_template',
		    'type'     => 'select',
		    'title'    => __( 'Template', 'metrobank' ),
		    'data'     => 'posts',
		    'args'     => [
			    'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
		    ],
		    'required' => [ 'search_source_type', '=', 'e' ],
	    ),

	    array(
		    'id'       => 'search_default_st',
		    'type'     => 'section',
		    'title'    => esc_html__( 'Search Default Banner', 'metrobank' ),
		    'indent'   => true,
		    'required' => [ 'search_source_type', '=', 'd' ],
	    ),
	    array(
		    'id'      => 'search_page_banner',
		    'type'    => 'switch',
		    'title'   => esc_html__( 'Hide Banner', 'metrobank' ),
		    'desc'    => esc_html__( 'Enable to show banner on blog', 'metrobank' ),
		    'default' => false,
	    ),
		
			array(
			'id'      => 'search_hide_title',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Title ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'      => 'search_bread',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Bread Crumb ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		
		
	
	    array(
		    'id'       => 'search_banner_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Banner Section Title', 'metrobank' ),
		    'desc'     => esc_html__( 'Enter the title to show in banner section', 'metrobank' ),
		   
	    ),

		
		array(         
        'id'       => 'search_page_background',
        'type'     => 'background',
        'title'    => __('Page Title Background', 'redux-framework-demo'),
		'output'      => array('.search_page_title.page-title'),
        'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
        'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'), 
        'default'  => array(
            'background-color' => '',
        )
    ),

		
	array(
			'id'       => 'search_dev1',
			'type'     => 'section',
			'title'    => esc_html__( 'Default Settings Area', 'metrobank' ),
			'indent'   => true,
	
			
		),	
		
	    array(
		    'id'       => 'search_sidebar_layout',
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
		    'id'       => 'search_page_sidebar',
		    'type'     => 'select',
		    'title'    => esc_html__( 'Sidebar', 'metrobank' ),
		    'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'metrobank' ),
		    'required' => array(
			    array( 'search_sidebar_layout', '=', array( 'left', 'right' ) ),
		    ),
		    'options'  => metrobank_get_sidebars(),
	    ),
	   //
		array(
			'id'    => 'search_page_title',
			'type'  => 'text',
			'title' => esc_html__( 'Search Title', 'metrobank' ),
			'desc'  => esc_html__( 'Enter Search section title that you want to show', 'metrobank' ),

		),
	array(
            'id' => 'src_title_typography',
            'type' => 'typography',
            'title' => esc_html__(' Search Heading  Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.search_tx_box .search_title' ),
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
			'id'    => 'search_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( 'Search Page Description', 'metrobank' ),
			'desc'  => esc_html__( 'Enter Search page description that you want to show.', 'metrobank' ),

		),
	
	array(
            'id' => 'src_text_typography',
            'type' => 'typography',
            'title' => esc_html__(' Search Text  Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.search_tx_box .search_text ' ),
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
		    'id'      => 'search_form_hide',
		    'type'    => 'switch',
		    'title'   => esc_html__( 'Hide Search Form', 'metrobank' ),
		    'desc'    => esc_html__( 'Enable to show banner on blog', 'metrobank' ),
		    'default' => false,
	    ),		
		
		
		
		
		array(
		    'id'      => 'search_gohome_hide',
		    'type'    => 'switch',
		    'title'   => esc_html__( 'Hide GoHome Button ', 'metrobank' ),
		    'desc'    => esc_html__( 'Enable to show banner on blog', 'metrobank' ),
		    'default' => false,
	    ),		
		
			array(
			'id'       => 'search_home_btn_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Button Label', 'metrobank' ),
			'desc'     => esc_html__( 'Enter back to home button label that you want to show.', 'metrobank' ),
			'default'  => esc_html__( 'Back To Home Page', 'metrobank' ),

		),
		
		
	array(
            'id' => 'search_button',
            'type' => 'typography',
            'title' => esc_html__(' Error Button Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.search_area_df .error_button' ),
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
		    'id'       => 'search_default_ed',
		    'type'     => 'section',
		    'indent'   => false,
		    'required' => [ 'search_source_type', '=', 'd' ],
	    ),

    ),
);





