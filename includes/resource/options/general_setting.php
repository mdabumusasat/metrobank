<?php
$styles = [];
foreach(range(1, 28) as $val) {
    $styles[$val] = sprintf(esc_html__('Style %s', 'metrobank'), $val);
}

return  array(
    'title'      => esc_html__( 'General Setting', 'metrobank' ),
    'id'         => 'general_setting',
    'desc'       => '',
    'icon'       => 'el el-wrench',
    'fields'     => array(
         array(
            'id' => 'theme_color_scheme',
            'type' => 'color',
            'output' => array('.site-title'),
            'title' => esc_html__('Main Color Scheme', 'metrobank'),
            'default' => '#f17732',
            'transparent' => false
        ),
		
		   array(
            'id' => 'color2',
            'type' => 'color',
            'title' => esc_html__('Secondary Color Scheme', 'metrobank'),
            'default' => '#03c0b4',
            'transparent' => false
        ),
		
		 array(
            'id' => 'to_top',
            'type' => 'switch',
            'title' => esc_html__('Hide Scroll To Top', 'metrobank'),
            'default' => false,
        ),
		
		array(
            'id' => 'theme_stiky_menu',
            'type' => 'switch',
            'title' => esc_html__('Hide Sticky Menu', 'metrobank'),
            'default' => false,
        ),
		 array(
            'id' => 'theme_rtl',
            'type' => 'switch',
            'title' => esc_html__('Select RTL', 'metrobank'),
            'default' => false,
        ),
		array(
            'id' => 'theme_preloader',
            'type' => 'switch',
            'title' => esc_html__('Enable Preloader', 'metrobank'),
            'default' => false,
        ),
		
			array(
		    'id'       => 'preloader_text_a',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Preloader Text', 'metrobank' ),
		    'desc'     => esc_html__( 'Preloader Text', 'metrobank' ),
			'required' => array( 'theme_preloader', '=', '0' ),
		
	    )
		
    ),
);
