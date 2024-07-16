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

class wpsection_team_member_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_team_member';
	}

	public function get_title() {
		return __( 'Team Member', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Team Member' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'team_member',
			[
				'label' => esc_html__( 'Team Member', 'Team Member' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'Team Member' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'team_member' ),
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
			'title_link',
			[
			  'label' => __( 'Title Link Url', 'rashid' ),
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
			'subtitle',
			[
				'label'       => __( 'Sub Title', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Sub title', 'rashid' ),
			]
		);

		$this->end_controls_section();




		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'team_member Block', 'team_member' ),
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
						['block_title' => esc_html__('Projects Completed', 'team_member')],
					],
				'fields' => 

					[	

						'block_icons'=>
						[
							'name' => 'block_icons',
							'label' => esc_html__('Enter The icons', 'rashid'),
							'type' => Controls_Manager::ICONS,							
						],
						'block_icon_link'=>
						[
						  'name' => 'block_icon_link',
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
		<div class="col-lg-12 col-md-12 col-sm-12 team-block">
			<div class="team-block-one">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image">
							<?php  if ( esc_url($settings['image']['id']) ) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
							<?php else :?>
							<div class="noimage"></div>
							<?php endif;?>
						</figure>
						<ul class="social-links clearfix">
							<?php foreach($settings['repeat'] as $key=>$item):?>
							<li><a href="<?php echo esc_url($item['block_icon_link']['url']);?>"><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="lower-content">
						<h3><a href="<?php echo esc_url($settings['title_link']['url']);?>"><?php echo $settings['title'];?></a></h3>
						<span class="designation"><?php echo $settings['subtitle'];?></span>
					</div>
				</div>
			</div>
		</div>
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_team_member_Widget() );