<?php


use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

class wpsection_exchange_rate_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_exchange_rate';
	}

	public function get_title() {
		return __( 'Exchange Rate', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Exchange Rate' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'exchange_rate',
			[
				'label' => esc_html__( 'Exchange Rate', 'service' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'service' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'service' ),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'SubTitle', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'rashid' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'rashid' ),
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Foreign Rate', 'service' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
		  'repeat', 
			[
				'type' => Controls_Manager::REPEATER,
				'seperator' => 'before',
				'default' => 
					[
						['block_title' => esc_html__('Projects Completed', 'service')],
					],
				'fields' => 

					[	

                    'title'=>
                    [
                        'name' => 'title',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'title1'=>
                    [
                        'name' => 'title1',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
            
                    'block_icons'=>
                    [
						'name' => 'block_icons',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
            
                    'flag_image'=>
                    [
                        'name' => 'flag_image',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
            
                    'text'=>
                    [
						'name' => 'text',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                
                    'title2'=>
                    [
                        'name' => 'title2',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'block_icons1'=>
					[
						'name' => 'block_icons1',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
            
                    'flag_image1'=>
                    [
                        'name' => 'flag_image1',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text1'=>
                    [
						'name' => 'text1',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
            
                    'title3'=>
                    [
                        'name' => 'title3',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'block_icons2'=>
                    [
						'name' => 'block_icons2',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                    'flag_image2'=>
                    [
                        'name' => 'flag_image2',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text2'=>
                    [
						'name' => 'text2',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                
                    'title4'=>
                    [
                        'name' => 'title4',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'block_icons3'=>
                    [
						'name' => 'block_icons3',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                
                    'flag_image3'=>
                    [
                        'name' => 'flag_image3',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text3'=>
                    [
						'name' => 'text3',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                
                    'title5'=>
                    [
                        'name' => 'title5',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                    'block_icons4'=>
                    [
						'name' => 'block_icons4',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                    'flag_image4'=>
                    [
                        'name' => 'flag_image4',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text4'=>
                    [
						'name' => 'text4',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                    'title6'=>
                    [
                        'name' => 'title6',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                    'block_icons5'=>
					[
						'name' => 'block_icons5',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                    'flag_image5'=>
                    [
                        'name' => 'flag_image5',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                    'text5'=>
                    [
						'name' => 'text5',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],




					'title7'=>
                    [
                        'name' => 'title7',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
            
                    'block_icons6'=>
                    [
						'name' => 'block_icons6',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
            
                    'flag_image6'=>
                    [
                        'name' => 'flag_image6',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
            
                    'text6'=>
                    [
						'name' => 'text6',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                
                    'title8'=>
                    [
                        'name' => 'title8',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'block_icons7'=>
					[
						'name' => 'block_icons7',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
            
                    'flag_image7'=>
                    [
                        'name' => 'flag_image7',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text7'=>
                    [
						'name' => 'text7',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
            
                    'title9'=>
                    [
                        'name' => 'title9',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'block_icons8'=>
                    [
						'name' => 'block_icons8',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                    'flag_image8'=>
                    [
                        'name' => 'flag_image8',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text8'=>
                    [
						'name' => 'text8',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                
                    'title10'=>
                    [
                        'name' => 'title10',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                
                    'block_icons9'=>
                    [
						'name' => 'block_icons9',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                
                    'flag_image9'=>
                    [
                        'name' => 'flag_image9',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text9'=>
                    [
						'name' => 'text9',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                
                    'title11'=>
                    [
                        'name' => 'title11',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                    'block_icons10'=>
                    [
						'name' => 'block_icons10',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                    'flag_image10'=>
                    [
                        'name' => 'flag_image10',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                
                    'text10'=>
                    [
						'name' => 'text10',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                    'title12'=>
                    [
                        'name' => 'title12',
                        'label' => esc_html__('Title', 'rashid'),
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => esc_html__('', 'rashid')
                    ],
                    'block_icons11'=>
					[
						'name' => 'block_icons11',
						'label' => esc_html__('Enter The icons', 'rashid'),
						'type' => Controls_Manager::ICONS,							
					],
                    'flag_image11'=>
                    [
                        'name' => 'flag_image11',
                        'label' => __( 'Image', 'rashid' ),
                        'type' => Controls_Manager::MEDIA,
                        'default' => ['url' => Utils::get_placeholder_image_src(),],
                    ],
                    'text11'=>
                    [
						'name' => 'text11',
						'label' => esc_html__('Text', 'rashid'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'rashid')
					],
                   
						
					],

				'title_field' => '{{block_title}}',
			 ]
		);
		
		
		$this->end_controls_section();

		
				
		
	}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$allowed_tags = wp_kses_allowed_html('post');
		?>
		
		
<?php
	  echo '
	  <script>
	  jQuery(document).ready(function($)
	  {
	 
	 //put the js code under this line 
	
	 //put the code above the line 
	 
	   });
	 </script>';


?>

		<!-- exchange-section -->
		<section class="exchange-section centred">
            <div class="auto-container">
                <div class="sec-title mb_70">
                    <h6><?php echo wp_kses($settings['subtitle'], true);?></h6>
                    <h2><?php echo wp_kses($settings['title'], true);?></h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box p_relative mb_60">
                        <ul class="tab-btns tab-buttons">
							<?php foreach($settings['repeat'] as $key=>$item):?>
                            <li class="tab-btn <?php if($key == 0) echo 'active-btn';?>" data-tab="#tab-<?php echo esc_attr($key);?>"><?php echo wp_kses($item['title'], $allowed_tags);?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tabs-content">
						 <?php foreach($settings['repeat'] as $key=>$item):?>
                        <div class="tab <?php if($key == 0) echo 'active-tab';?>" id="tab-<?php echo esc_attr($key);?>">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title1'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
												<?php echo wp_kses($item['text'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one red">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title2'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons1']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image1']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image1']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text1'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one red">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title3'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons2']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image2']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image2']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text2'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title4'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons3']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image3']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image3']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text3'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title5'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons4']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image4']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image4']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text4'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one red">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title6'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons5']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image5']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image5']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text5'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title7'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons6']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image6']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image6']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
												<?php echo wp_kses($item['text6'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one red">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title8'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons7']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image7']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image7']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text7'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one red">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title9'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons8']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image8']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image8']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text8'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title10'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons9']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image9']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image9']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text9'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title11'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons10']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image10']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image10']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text10'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 exchange-block">
                                    <div class="exchange-block-one red">
                                        <div class="inner-box">
                                            <h5><?php echo wp_kses($item['title12'], $allowed_tags);?><i class="<?php echo esc_attr($item['block_icons11']['value']);?>"></i></h5>
                                            <figure class="flag">
												<?php if(wp_get_attachment_url($item['flag_image11']['id'])): ?>
												<img src="<?php echo wp_get_attachment_url($item['flag_image11']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
												<?php else :?>
												<div class="noimage"></div>
												<?php endif;?>
                                            </figure>
                                            <ul class="lower-box clearfix">
											<?php echo wp_kses($item['text11'], $allowed_tags);?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- exchange-section end -->

		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_exchange_rate_Widget() );