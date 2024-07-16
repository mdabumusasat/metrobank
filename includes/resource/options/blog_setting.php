<?php

return array(
	'title'  => esc_html__( 'Blog Page Settings', 'metrobank' ),
	'id'     => 'blog_setting',
	'desc'   => '',
	'subsection' => true,
	'fields' => array(
		array(
			'id'      => 'blog_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Blog Banner Source Type', 'metrobank' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'metrobank' ),
				'e' => esc_html__( 'Elementor', 'metrobank' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'blog_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'metrobank' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'blog_source_type', '=', 'e' ],
		),

		
/*
		array(
			'id'      => 'blog_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'metrobank' ),
			'default' => true,
		),
		
		array(
			'id'       => 'blog_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'metrobank' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'metrobank' ),
			'required' => array( 'blog_page_banner', '=', true ),
		),
		*/
		
		
		array(         
        'id'       => 'blog_page_background',
        'type'     => 'background',
        'title'    => __('Blog Page Background', 'redux-framework-demo'),
		'output'      => array('.mr_page_title.mr_index_index_title'),
        'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
        'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'), 
		'required' => [ 'blog_source_type', '=', 'd' ],
        'default'  => array(
            'background-color' => '',
        )
    ),
		
	
/*
		array(
			'id'       => 'blog_sidebar_layout',
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
			'id'       => 'blog_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'metrobank' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'metrobank' ),
			'required' => array(
				array( 'blog_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => metrobank_get_sidebars(),
		),

	*/	
		
			array(
			'id'       => 'blog_default_stsss',
			'type'     => 'section',
			'title'    => esc_html__( 'Blog Settings Area', 'metrobank' ),
			'indent'   => true,
		
		),
		
		
		array(
			'id'      => 'blog_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Post Date', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show post data on posts listing', 'metrobank' ),
			'default' => false,
		),
		array(
			'id'      => 'blog_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Author', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show author on posts listing', 'metrobank' ),
			'default' => false,
		),
			array(
			'id'      => 'blog_post_comment',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Comment', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show Comment Number', 'metrobank' ),
			'default' => false,
		),
		array(
			'id'      => 'blog_post_readmore',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Blog Read More', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show post data on posts listing', 'metrobank' ),
			'default' => false,
		),
		array(
		    'id'       => 'blog_post_readmoretext',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Read More Text', 'metrobank' ),
		    'desc'     => esc_html__( 'Enter Read More Text to Show.', 'metrobank' ),
			'default'  => esc_html__( 'Read More', 'metrobank' ),
			'required' => array( 'blog_post_readmore', '=', false ),
			
	    ),
		
	 array(
            'id' => 'blog_post_title_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Blog Post Title Font Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.blog_post_title','.blog_post_title a'),
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
            'id' => 'blog_post_meta_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Blog Post Meta Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('li.mr_blog_post_meta','li.mr_blog_post_meta a' ),
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
            'id' => 'blog_post_text_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Blog Post Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.mr_blog_post_text','.mr_blog_post_text a','.mr_blog_post_text p'   ),
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
            'id' => 'blog_post_text_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Blog Post Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.mr_blog_post_text','.mr_blog_post_text a','.mr_blog_post_text p'   ),
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
            'id' => 'blog_post_button_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Blog Post Button Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.post_readmore a.mr_post_button',  ),
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
			'id'       => 'blog_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'blog_source_type', '=', 'd' ],
		),
	),
);





