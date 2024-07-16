<?php

return array(
	'title'      => esc_html__( 'Single Post Settings', 'metrobank' ),
	'id'         => 'single_post_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		
		
		array(
			'id'      => 'single_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Single Post Banner Source Type', 'metrobank' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'metrobank' ),
				'e' => esc_html__( 'Elementor', 'metrobank' ),
			),
			'default' => 'd',
		),
		
		
	
		array(
			'id'       => 'single_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'metrobank' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'single_source_type', '=', 'e' ],
		),

		array(
			'id'       => 'single_default_stzz',
			'type'     => 'section',
			'title'    => esc_html__( 'Single Post Asset Settings', 'metrobank' ),
			'indent'   => true,
		
		),

		
		
			
		array(
			'id'      => 'single_post_title',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Post Title', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show post title', 'metrobank' ),
			'default' => false,
		),
		array(
			'id'      => 'single_post_thumb',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Post Thumbnail', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show Post Thumbnail', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'      => 'single_post_comments',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Comments', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show number of comments on posts single page', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'      => 'single_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Date', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show post publish date on posts detail page', 'metrobank' ),
			'default' => false,
		),
		array(
			'id'      => 'single_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Author', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show author on posts detail page', 'metrobank' ),
			'default' => false,
		),
		array(
			'id'      => 'single_post_tag',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Tags', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show post tags on posts single page', 'metrobank' ),
			'default' => false,
		),
/*
		array(
			'id'      => 'single_post_share',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Social Share', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show social Share options', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'       => 'single_social_share',
			'type'     => 'sortable',
			'title'    => esc_html__( 'Post Sharing Icons', 'metrobank' ),
			'subtitle' => esc_html__( 'Select icons to activate social sharing icons in post detail page', 'metrobank' ),
			'required' => array( 'blog_post_share', '=', true ),
			'mode'     => 'checkbox',
			'required' => array( 'single_post_share', '=', true ),
			'options'  => array(
				'facebook'    => esc_html__( 'Facebook', 'metrobank' ),
				'twitter'     => esc_html__( 'Twitter', 'metrobank' ),
				'gplus'       => esc_html__( 'Google Plus', 'metrobank' ),
				'digg'        => esc_html__( 'Digg Digg', 'metrobank' ),
				'reddit'      => esc_html__( 'Reddit', 'metrobank' ),
				'linkedin'    => esc_html__( 'Linkedin', 'metrobank' ),
				'pinterest'   => esc_html__( 'Pinterest', 'metrobank' ),
				'stumbleupon' => esc_html__( 'Sumbleupon', 'metrobank' ),
				'tumblr'      => esc_html__( 'Tumblr', 'metrobank' ),
				'email'       => esc_html__( 'Email', 'metrobank' ),
			),
		),
	*/	
		
		
	 array(
            'id' => 'post_title_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Post Title Font Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('h3.mr_post_title'),
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
            'id' => 'post_meta_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Post Meta Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('li.mr_post_meta','li.mr_post_meta a' ),
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
            'id' => 'post_text_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Post Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.mr_post_text','.mr_post_text .text','.mr_post_text p','.mr_post_text p'   ),
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
            'id' => 'blog_post_tag_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Post Tag Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.mr_post_tags a','.mr_post_tag_icon'  ),
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
			'id'       => 'single_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Post Default', 'metrobank' ),
			'indent'   => true,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		array(
			'id'       => 'single_section_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		
		
		
		
		
	),
);