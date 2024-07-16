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

class wpsection_feature_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_feature';
	}

	public function get_title() {
		return __( 'Feature', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Feature' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'feature',
			[
				'label' => esc_html__( 'Feature', 'feature' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'feature' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'feature' ),
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

		$this->end_controls_section();




		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Feature Block', 'feature' ),
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
						['block_title' => esc_html__('Projects Completed', 'feature')],
					],
				'fields' => 

					[	
						'block_icons'=>
						[
							'name' => 'block_icons',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_title_link'=>
						[
						  'name' => 'block_title_link',
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
		<?php foreach($settings['repeat'] as $key=>$item):?>
		<div class="feature-block-one">
			<div class="inner-box">
				<div class="icon-box"><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></div>
				<h4><a href="<?php echo esc_url($item['block_title_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h4>
				<p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
			</div>
		</div>
		<?php endforeach; ?>
		<?php endif ;?>	

		<?php  if ( 'style2' === $settings['style'] ) : ?>
		 <!-- feature-section -->
		 <section class="feature-style-three">
            <div class="auto-container">
                <div class="row clearfix">
					<?php foreach($settings['repeat'] as $key=>$item):?>
					<div class="col-lg-12 col-md-12 col-sm-12 feature-block">
						<div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<div class="icon-box"><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></div>
								<h4><a href="<?php echo esc_url($item['block_title_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h4>
								<p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
            </div>
        </section>
        <!-- feature-section end -->
		<?php endif ;?>	
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_feature_Widget() );