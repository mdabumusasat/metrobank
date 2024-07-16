<?php

return array(

    'title'         => esc_html__( 'Blog Sidebar Settings', 'metrobank' ),
    'id'            => 'blogsidebar_setting',
    'desc'          => '',
    'subsection'    => true,
    'fields'        => array(

        

    array(
            'id' => 'blog_sidebar_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Blog Sidebar Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.wp-block-search .wp-block-search__label', '.wp-block-group__inner-container h3','.mrwidget h3','.mrwidget h1','.mrwidget h2','.mrwidget h6'   ),
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
            'id' => 'footer_sidebar_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__('Footer Sidebar Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array('.footer h3', 'footer h3','.mr_footer h3',   ),
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

      
    )
);

