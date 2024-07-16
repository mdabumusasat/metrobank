<?php
return array(
	'title'      => esc_html__( 'Logo Setting', 'metrobank' ),
	'id'         => 'logo_setting',
	'desc'       => '',
	'icon'       => 'dashicons dashicons-admin-settings',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'image_favicon',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Favicon', 'metrobank' ),
			'subtitle' => esc_html__( 'Insert site favicon image', 'metrobank' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/favicon.ico' ),
		),
	
		
		
		array(
			'id'       => 'image_normal_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Main Logoxx', 'metrobank' ),
			'subtitle' => esc_html__( 'Insert site logo image', 'metrobank' ),
	
		),
		array(
			'id'       => 'normal_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'metrobank' ),
			'subtitle' => esc_html__( 'Select Dark Logo Dimentions', 'metrobank' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			
		),

		array(
			'id'       => 'image_normal_logo2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Secondary Logo', 'metrobank' ),
			'subtitle' => esc_html__( 'Insert site Light logo image', 'metrobank' ),
		),
		array(
			'id'       => 'normal_logo_dimension2',
			'type'     => 'dimensions',
			'title'    => esc_html__( ' Logo Dimentions', 'metrobank' ),
			'subtitle' => esc_html__( 'Select Light Dimentions', 'metrobank' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			
		),
		
		
		
		array(
			'id'       => 'logo_settings_section_end',
			'type'     => 'section',
			'indent'      => false,
		),
	),
);
