<?php

return array(
	'title'      => esc_html__( 'Archive Page Settings', 'metrobank' ),
	'id'         => 'archive_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'archive_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Archive Banner Source Type', 'metrobank' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'metrobank' ),
				'e' => esc_html__( 'Elementor', 'metrobank' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'archive_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'metrobank' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'archive_source_type', '=', 'e' ],
		),

		array(
			'id'       => 'archive_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Archive Banner Default', 'metrobank' ),
			'indent'   => true,
			'required' => [ 'archive_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'archive_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Banner', 'metrobank' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'metrobank' ),
			'default' => false,
		),
		
			array(
			'id'      => 'archive_page_title',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Title ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'      => 'archive_bread',
			'type'    => 'switch',
			'title'   => esc_html__( 'Hide Bread Crumb ', 'metrobank' ),
			'desc'    => esc_html__( 'Hide Bread Crumb on this page', 'metrobank' ),
			'default' => false,
		),
		
		array(
			'id'       => 'archive_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'metrobank' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'metrobank' ),
		
		),
		
	array(         
        'id'       => 'archive_page_background',
        'type'     => 'background',
        'title'    => __('Page Title Background', 'redux-framework-demo'),
		'output'      => array('.mr_page_title.archive_page_title'),
        'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
        'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'), 
        'default'  => array(
            'background-color' => '',
        )
    ),
		
	array(
			'id'       => 'archive_default_stxx',
			'type'     => 'section',
			'title'    => esc_html__( 'Archive Settings Area', 'metrobank' ),
			'indent'   => true,
		
		),

		array(
			'id'       => 'archive_sidebar_layout',
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
			'id'       => 'archive_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'metrobank' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'metrobank' ),
			'required' => array(
				array( 'archive_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => metrobank_get_sidebars(),
		),
		array(
			'id'       => 'archive_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'archive_source_type', '=', 'd' ],
		),
	),
);





