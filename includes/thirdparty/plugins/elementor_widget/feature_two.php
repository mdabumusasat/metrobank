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

class wpsection_feature_two_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_feature_two';
	}

	public function get_title() {
		return __( 'Feature Two', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'Feature Two' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'feature_two',
			[
				'label' => esc_html__( 'Feature Two', 'feature' ),
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
	 //two-item-carousel
	 if ($(".two-item-carousel").length) {
		 $(".two-item-carousel").owlCarousel({
			 loop:true,
			 margin:30,
			 nav:true,
			 smartSpeed: 500,
			 autoplay: 1000,
			 navText: [ "<span class="icon-3"></span>", "<span class="icon-4"></span>" ],
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

		  <!-- feature-style-two -->
		  <section class="feature-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content-box pl_160 pr_120">
                            <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
								<?php foreach($settings['repeat'] as $key=>$item):?>
                                <div class="feature-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="<?php echo esc_attr($item['block_icons']['value']);?>"></i></div>
                                        <h3><a href="<?php echo esc_url($item['block_title_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h3>
                                        <p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
                                    </div>
                                </div>
								<?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-two end -->
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_feature_two_Widget() );