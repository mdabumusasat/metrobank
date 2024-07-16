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

class wpsection_about_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_about';
	}

	public function get_title() {
		return __( 'About', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'About' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'about',
			[
				'label' => esc_html__( 'About', 'about' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'about' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'about' ),
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
		$this->add_control(
			'title2',
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
				'label' => __( 'About Section Block', 'metrobank' ),
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

						'block_icons'=>
						[
							'name' => 'block_icons',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
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


		<!-- about-section -->
	<section class="about-section">
		<div class="pattern-layer rotate-me"></div>
		<div class="image_block_one">
			<div class="image-box pr_90 mr_40">
				<div class="image-shape" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);"></div>
				<figure class="image">
					<?php  if ( esc_url($settings['image']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
				</figure>
				<div class="rating-box">
					<ul class="rating mb_5 clearfix">
						<?php foreach($settings['repeat'] as $key=>$item):?>
						<li><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></li>
						<?php endforeach; ?>
					</ul>
					<h6><?php echo $settings['title'];?></h6>
				</div>
				<div class="experience-box">
					<div class="inner">
						<h2><?php echo $settings['title1'];?></h2>
						<h6><?php echo $settings['title2'];?></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
        <!-- about-section end -->
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_about_Widget() );