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

class wpsection_banner_slider_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_banner_slider';
	}

	public function get_title() {
		return __( 'Banner Slider', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'banner_slider' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'banner_slider',
			[
				'label' => esc_html__( 'Banner Slider', 'metrobank' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'metrobank' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'metrobank' ),
			]
		);
		$this->add_control(
			'style',
			[
				'label'   => esc_html__( 'Select Style', 'rashid' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => array(
					'style1'   => esc_html__( 'Style One', 'rashid' ),
					'style2'   => esc_html__( 'Style Two', 'rashid' ),
					'style3'   => esc_html__( 'Style Three', 'rashid' ),
				),
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

		$this->end_controls_section();


		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Bannar Slider', 'metrobank' ),
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
						['block_title' => esc_html__('Projects Completed', 'metrobank')],
					],
				'fields' => 

					[	

						'block_bgimg'=>
						[
							'name' => 'block_bgimg',
							'label' => esc_html__('Background image', 'rashid'),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],
						'block_bgimg1'=>
						[
							'name' => 'block_bgimg1',
							'label' => esc_html__('Background image', 'rashid'),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],
						'block_bgimg2'=>
						[
							'name' => 'block_bgimg2',
							'label' => esc_html__('Background image', 'rashid'),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],
						'block_title'=>
						[
							'name' => 'block_title',
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
						'block_btnlink'=>
						[
						  'name' => 'block_btnlink',
						  'label' => __( 'Button Url', 'rashid' ),
						  'type' => Controls_Manager::URL,
						  'placeholder' => __( 'https://your-link.com', 'rashid' ),
						  'show_external' => true,
						  'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						  ],
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
		 jQuery(document).ready(function($) {

		//put the js code under this line 


	    if ($(".banner-slider").length > 0) {
		    // Banner Slider
			var bannerSlider = new Swiper(".banner-slider", {
				preloadImages: false,
                loop: true,
                grabCursor: true,
                centeredSlides: false,
                resistance: true,
                resistanceRatio: 0.6,
                speed: 2400,
                spaceBetween: 0,
                parallax: false,
                effect: "slide",
				autoplay: {
				    delay: 8000,
                    disableOnInteraction: false
				},
	            navigation: {
	                nextEl: ".banner-slider-button-next",
	                prevEl: ".banner-slider-button-prev",
	            },
			});
		}


		//put the code above the line 

		  });
		</script>';
		?>


        
		<?php  if ( 'style1' === $settings['style'] ) : ?>

		<section class="banner-section">
			<div class="swiper-container banner-slider">
				<div class="swiper-wrapper">
				
					<?php foreach($settings['repeat'] as $item):?>
				
					<!-- Slide Item -->
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="swiper-slide" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="swiper-slide">
					<?php endif;?>
					<div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg1']['id']);?>);"></div>
                        <div class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg2']['id']);?>);"></div>
                    </div>
						<div class="content-outer">
							<div class="content-box">
								<div class="inner">
									<h1><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
									<div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
									<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
									<div class="link-box">
										<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="btn-1 btn-large"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <span></span></a>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					
					<?php endforeach; ?>
					
				</div>
			</div>
			<div class="banner-slider-nav">
				<div class="banner-slider-control banner-slider-button-prev"><span><i class="icon-3"></i></span></div>
				<div class="banner-slider-control banner-slider-button-next"><span><i class="icon-4"></i></span></div>
			</div>
			<div class="banner-shape">
				
			</div>
		</section>
		<?php endif ;?>	

		<?php  if ( 'style2' === $settings['style'] ) : ?>
		<section class="banner-section style-two">
			<div class="swiper-container banner-slider">
				<div class="swiper-wrapper">
					<!-- Slide Item -->
					<?php foreach($settings['repeat'] as $item):?>
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="swiper-slide" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="swiper-slide">
					<?php endif;?>
					<div class="pattern-layer">
                        <div class="pattern-3" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg2']['id']);?>);"></div>
                    </div>
						<div class="content-outer">
							<div class="content-box">
								<div class="inner">
									<h1><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
									<div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
									<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
									<div class="link-box">
										<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="btn-1 btn-large"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <span></span></a>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
    	</section>
		<?php endif ;?>	


		<?php  if ( 'style3' === $settings['style'] ) : ?>
		<section class="banner-section style-three">
		<div class="shape" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);"></div>
			<div class="swiper-container banner-slider">
				<div class="swiper-wrapper">
					<!-- Slide Item -->
					<?php foreach($settings['repeat'] as $item):?>
					<?php if(wp_get_attachment_url($item['block_bgimg']['id'])): ?>
					<div class="swiper-slide" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg']['id']);?>);">
					<?php else :?>
					<div class="swiper-slide">
					<?php endif;?>
					<div class="pattern-layer">
                        <div class="pattern-4" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg1']['id']);?>);"></div>
                        <div class="pattern-5" style="background-image: url(<?php echo wp_get_attachment_url($item['block_bgimg2']['id']);?>);"></div>
                    </div>
						<div class="content-outer">
							<div class="content-box">
								<div class="inner">
									<h1><?php echo wp_kses($item['block_title'], $allowed_tags);?></h1>
									<div class="text"><?php echo wp_kses($item['block_text'], $allowed_tags);?></div>
									<?php if(wp_kses($item['block_button'], $allowed_tags)): ?>
									<div class="link-box">
										<a href="<?php echo esc_url($item['block_btnlink']['url']);?>" class="btn-1 btn-large"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <span></span></a>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
    	</section>
		<?php endif ;?>	
             
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_banner_slider_Widget() );