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

class wpsection_service_tab_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_service_tab';
	}

	public function get_title() {
		return __( 'Service Tab', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Service Tab' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'service_tab',
			[
				'label' => esc_html__( 'Service Tab', 'service' ),
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
			'bgimg',
			[
				'label' => esc_html__('Background image', 'rashid'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
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
		$this->add_control(
			'title1',
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
				'label' => __( 'Service Block', 'service' ),
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

						'block_title'=>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'rashid'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'rashid')
						],
						'block_title1'=>
						[
							'name' => 'block_title1',
							'label' => esc_html__('Title', 'rashid'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'rashid')
						],
						'block_text'=>
						[
							'name' => 'block_text',
							'label' => esc_html__('Text', 'rashid'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'rashid')
						],
						'block_text1'=>
						[
							'name' => 'block_text1',
							'label' => esc_html__('Text', 'rashid'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'rashid')
						],
						'block_btnlink'=>
						[
						  'name' => 'block_btnlink',
						  'label' => __( 'Title Url', 'rashid' ),
						  'type' => Controls_Manager::URL,
						  'placeholder' => __( 'https://your-link.com', 'rashid' ),
						  'show_external' => true,
						  'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						  ],
					   	],
						'block_button'=>
						[
							'name' => 'block_button',
							'label'       => __( 'Button', 'rashid' ),
							'type'        => Controls_Manager::TEXT,
							'dynamic'     => [
								'active' => true,
							],
							'placeholder' => __( 'Enter your Button Title', 'rashid' ),
							'default' => esc_html__('Read More', 'rashid'),
						],
						'block_bgimg'=>
						[
							'name' => 'block_bgimg',
							'label' => esc_html__('Background image', 'rashid'),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],
						'block_image'=>
						[
							'name' => 'block_image',
							'label' => __( 'Image', 'rashid' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	
						'block_alt_text'=>
						[
						  'name' => 'block_alt_text',
						  'label' => esc_html__('Image Text', 'rashid'),
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

		<!-- service-style-two -->
		<section class="service-style-two pb_120 <?php echo esc_attr($settings['sec_class']);?>">
		<div class="bg-layer" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);"></div>
            <div class="auto-container">
				<div class="sec-title centred mb_70">
                    <h6><?php echo $settings['title'];?></h6>
                    <h2><?php echo $settings['title1'];?></h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box p_relative mb_100">
                        <ul class="tab-btns tab-buttons">
                            <?php foreach($settings['repeat'] as $key=>$item):?>
                            <li class="tab-btn <?php if($key == 0) echo 'active-btn';?>" data-tab="#tab-<?php echo esc_attr($key);?>"><span><?php echo wp_kses($item['block_title'], $allowed_tags);?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tabs-content">
                    <?php foreach($settings['repeat'] as $key=>$item):?>
                        <div class="tab <?php if($key == 0) echo 'active-tab';?>" id="tab-<?php echo esc_attr($key);?>">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_four">
                                        <div class="content-box mr_110">
                                            <h2><?php echo wp_kses($item['block_title1'], $allowed_tags);?></h2>
                                            <p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
                                            <ul class="list-item mb_40 clearfix">
                                                <?php echo wp_kses($item['block_text1'], $allowed_tags);?>
                                            </ul>
                                            <a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="theme-btn btn-one"><?php echo wp_kses($item['block_button'], $allowed_tags);?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image-box ml_40">
                                        <div class="image-shape" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);"></div>
                                        <figure class="image">
                                            <?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
                                            <img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
                                            <?php else :?>
                                            <div class="noimage"></div>
                                            <?php endif;?>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-two end -->

		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_service_tab_Widget() );