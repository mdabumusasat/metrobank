<?php

return array(

    'title'         => esc_html__( 'Menu Settings', 'metrobank' ),
    'id'            => 'menu_typo_setting',
    'desc'          => '',
    'subsection'    => true,
    'fields'        => array(

        

        array(

            'id' => 'menu_typography',

            'type' => 'typography',

            'title' => esc_html__('Main Menu Typography', 'metrobank'),

            'google' => true,

            'font-backup' => true,

            'output' => array( '.main-menu .navigation.mr_menu > li > a' ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h6 heading font for the theme', 'metrobank'),

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

            'id' => 'child_typography',

            'type' => 'typography',

            'title' => esc_html__('Child Menu Typography', 'metrobank'),

            'google' => true,

            'font-backup' => true,

            'output' => array( '.main-menu .navigation.mr_menu > li > ul > li > a ','.main-menu .navigation.mr_menu > li > ul > li >ul>li> a '  ),

            'units' => 'px',

            'subtitle' => esc_html__('Apply options to customize the h6 heading font for the theme', 'metrobank'),

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

