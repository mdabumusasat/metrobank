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

class wpsection_service_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_service';
	}

	public function get_title() {
		return __( 'Service', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Service' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'service',
			[
				'label' => esc_html__( 'Service', 'service' ),
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
			'image',
				[
				  'label' => __( 'Image', 'rashid' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text',
			[
				'label'       => __( 'Alt text', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'rashid' ),
			]
		);

		$this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icons', 'elementor' ),
				'type' => Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'title_link',
			[
			  'label' => __( 'Button Url', 'rashid' ),
			  'type' => Controls_Manager::URL,
			  'placeholder' => __( 'https://your-link.com', 'rashid' ),
			  'show_external' => true,
			  'default' => [
				'url' => '',
				'is_external' => true,
				'nofollow' => true,
			  ],
			
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
				'label' => __( 'service Block', 'service' ),
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
	
	 //put the code above the line 
	 
	   });
	 </script>';


?>
		<?php  if ( 'style1' === $settings['style'] ) : ?>
		<div class="col-lg-12 col-md-12 col-sm-12 service-block">
			<div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
				<div class="inner-box">
					<div class="shape"></div>
					<div class="icon-box"><i class="<?php echo esc_attr($settings['icon']['value']);?>"></i></div>
					<h4><a href="<?php echo esc_url($settings['title_link']['url']);?>"><?php echo $settings['title'];?></a></h4>
					<ul class="list-item clearfix">
						<?php foreach($settings['repeat'] as $key=>$item):?>
						<li><?php echo wp_kses($item['block_text'], $allowed_tags);?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<?php endif ;?>	

		<?php  if ( 'style2' === $settings['style'] ) : ?>
		<div class="col-lg-12 col-md-12 col-sm-12 service-block">
			<div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
				<figure class="image-box">
					<?php  if ( esc_url($settings['image']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
				</figure>
				<div class="inner-box">
					<div class="icon-box"><i class="<?php echo esc_attr($settings['icon']['value']);?>"></i></div>
					<h4><a href="<?php echo esc_url($settings['title_link']['url']);?>"><?php echo $settings['title'];?></a></h4>
					<ul class="list-item clearfix">
						<?php foreach($settings['repeat'] as $key=>$item):?>
						<li><?php echo wp_kses($item['block_text'], $allowed_tags);?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<?php endif ;?>	
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_service_Widget() );