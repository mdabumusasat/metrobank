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

class wpsection_testimonial_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Testimonial' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'testimonial',
			[
				'label' => esc_html__( 'Testimonial', 'Testimonial' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'Testimonial' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'Testimonial' ),
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
				),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'sub Title', 'elementor' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Sub title', 'elementor' ),
			]
		);
		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your title', 'elementor' ),
			]
		);
		$this->add_control(
			'text',
			[
				'label'       => __( 'Description Text', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'rashid' ),
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Testimonial Block', 'testimonial' ),
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
						['block_title' => esc_html__('Projects Completed', 'testimonial')],
					],
				'fields' => 

					[	
						
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
						'block_title'=>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'rashid'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'rashid')
						],
						'block_subtitle'=>
						[
							'name' => 'block_subtitle',
							'label' => esc_html__('Subtitle', 'rashid'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'rashid')
						],
						'block_icons'=>
						[
							'name' => 'block_icons',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_icons1'=>
						[
							'name' => 'block_icons1',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_icons2'=>
						[
							'name' => 'block_icons2',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_icons3'=>
						[
							'name' => 'block_icons3',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_icons4'=>
						[
							'name' => 'block_icons4',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_text'=>
						[
							'name' => 'block_text',
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
	 //three-item-carousel
	 if ($(".three-item-carousel").length) {
		 $(".three-item-carousel").owlCarousel({
			 loop:true,
			 margin:30,
			 nav:true,
			 smartSpeed: 500,
			 autoplay: 1000,
			 responsive:{
				 0:{
					 items:1
				 },
				 480:{
					 items:1
				 },
				 600:{
					 items:2
				 },
				 800:{
					 items:3
				 },
				 1024:{
					 items:3
				 }
			 }
		 });    		
	 }

	 //three-item-carousel
	 if ($(".two-item-carousel").length) {
		 $(".two-item-carousel").owlCarousel({
			 loop:true,
			 margin:30,
			 nav:true,
			 smartSpeed: 500,
			 autoplay: 1000,
			 responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:2
				}
			}
		 });    		
	 }
	 //put the code above the line 
	 
	   });
	 </script>';


?>
		<?php  if ( 'style1' === $settings['style'] ) : ?>
		<!-- testimonial-section -->
		<section class="testimonial-section centred">
            <div class="auto-container">
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <?php foreach($settings['repeat'] as $key=>$item):?>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box">
                                <?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
                                <img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
                                <?php else :?>
                                <div class="noimage"></div>
                                <?php endif;?>
                            </figure>
                            <h4><?php echo wp_kses($item['block_title'], $allowed_tags);?></h4>
                            <span class="designation"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
                            <ul class="rating mb_6 clearfix">
								<li><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></li>
								<li><i class="<?php echo esc_attr($item['block_icons1']['value']);?>"></i></li>
								<li><i class="<?php echo esc_attr($item['block_icons2']['value']);?>"></i></li>
								<li><i class="i<?php echo esc_attr($item['block_icons3']['value']);?>"></i></li>
								<li><i class="<?php echo esc_attr($item['block_icons4']['value']);?>"></i></li>
                            </ul>
                            <p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->
		<?php endif ;?>

		<?php  if ( 'style2' === $settings['style'] ) : ?>
 		<!-- testimonial-style-two -->
 		<section class="testimonial-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title mr_70">
                            <h6><?php echo wp_kses($settings['subtitle'], true);?></h6>
                            <h2><?php echo wp_kses($settings['title'], true);?></h2>
                            <p><?php echo wp_kses($settings['text'], true);?></p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <?php foreach($settings['repeat'] as $key=>$item):?>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="thumb-box">
                                            <?php if(wp_get_attachment_url($item['block_image']['id'])): ?>
                                            <img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
                                            <?php else :?>
                                            <div class="noimage"></div>
                                            <?php endif;?>
                                        </figure>
                                        <h4><?php echo wp_kses($item['block_title'], $allowed_tags);?></h4>
                                         <span class="designation"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
                                    </div>
                                    <ul class="rating mb_15 clearfix">
                                        <li><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></li>
                                        <li><i class="<?php echo esc_attr($item['block_icons1']['value']);?>"></i></li>
                                        <li><i class="<?php echo esc_attr($item['block_icons2']['value']);?>"></i></li>
                                        <li><i class="<?php echo esc_attr($item['block_icons3']['value']);?>"></i></li>
                                        <li><i class="<?php echo esc_attr($item['block_icons4']['value']);?>"></i></li>
                                    </ul>
                                    <p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->
		<?php endif ;?>
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_testimonial_Widget() );