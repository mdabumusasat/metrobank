<?php

return array(

    'title'         => esc_html__( 'Banner Settings', 'metrobank' ),
    'id'            => 'banner_setting',
    'desc'          => '',
    'subsection'    => true,
    'fields'        => array(

        

    array(
            'id' => 'page_title_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Page Title Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output'      => array('.mr_banner_title'),
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
            'id' => 'bread_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Bread Crumb Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output'      => array('.mr_bread_list li,.mr_bread_list,.mr_bread_list li a,.mr_bread_list .breadcrumb-item::before,.mr_bread_list .breadcrumb-item:before'),
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
        
        ) 
		

    )
);

