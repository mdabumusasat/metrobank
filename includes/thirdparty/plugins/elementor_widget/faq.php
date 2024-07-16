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

class wpsection_faq_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_faq';
	}

	public function get_title() {
		return __( 'Faq ', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'faq' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'faq',
			[
				'label' => esc_html__( 'Faq', 'metrobank' ),
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
		$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Faq Accordion Block', 'metrobank' ),
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

<div class="col-lg-12 col-md-12 col-sm-12 accordion-column">
    <ul class="accordion-box">
        <?php foreach($settings['repeat'] as $key=>$item):?>
        <li class="accordion block active-block">
            <div class="acc-btn <?php if($key == 1) echo 'active';?>">
                <div class="icon-box"></div>
                <h4><?php echo wp_kses($item['block_title'], $allowed_tags);?></h4>
            </div>
            <div class="acc-content <?php if($key == 1) echo 'current';?>">
                <div class="text">
                    <p><?php echo wp_kses($item['block_text'], $allowed_tags);?></p>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
	
	
             
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_faq_Widget() );