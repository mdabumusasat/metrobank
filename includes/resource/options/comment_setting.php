<?php

return array(
	'title'      => esc_html__( 'Comments Settings', 'metrobank' ),
	'id'         => 'comment_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		



	 	 array(
            'id' => 'comments_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Title Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-area .title h3' ),
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
            'id' => 'comments_author_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Author Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-area .outer-box .single-comment .text-holder .top h3'  ),
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
            'id' => 'comments_date_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Date Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-area .outer-box .single-comment .text-holder .top span'  ),
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
            'id' => 'comments_text_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-area .outer-box .single-comment .text-holder .text p'  ),
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
            'id' => 'comments_reply_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Reply Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-area .outer-box .single-comment .text-holder .text .reply a'  ),
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
            'id' => 'comments_form_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Form Title Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-form-area h3'  ),
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
            'id' => 'comments_logeing_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Loggedin Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-form-area .logged-in-as a'  ),

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
            'id' => 'comments_formtext_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Form Text Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( ".default-form input[type='text'].form-control",
            					" .default-form input[type='email'].form-control", 
								".default-form input[type='tel'].form-control", 
								".default-form input[type='password'].form-control", 
								".default-form textarea.form-control"),

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
            'id' => 'comments_button_typgrpahy',
            'type' => 'typography',
            'title' => esc_html__(' Comments Button Typography', 'metrobank'),
            'google' => true,
            'font-backup' => true,
            'output' => array( '.comments-form-area .theme-btn-six .txt'  ),

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




		
	

		
		
	),
);