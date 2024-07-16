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

class wpsection_funfact_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_funfact';
	}

	public function get_title() {
		return __( 'Funfact', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'funfact' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'funfact',
			[
				'label' => esc_html__( 'Funfact', 'funfact' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'funfact' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'funfact' ),
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
			'ff_stop',
			[
			'label' => __( 'Counter Stop', 'metrobank' ),
			'type' => Controls_Manager::TEXTAREA,
			'dynamic' => [
			'active' => true,
			],
			'placeholder' => __( 'Enter Counter Stop', 'metrobank' ),
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
		<!-- funfact-section -->
        <div class="funfact-block-one">
            <div class="inner-box">
                <div class="count-outer count-box">
                    <span class="count-text" data-speed="1500" data-stop="<?php echo esc_attr($settings['ff_stop']);?>">0</span><span><?php echo $settings['title'];?></span>
                </div>
                <p><?php echo $settings['text'];?></p>
            </div>
        </div>
        <!-- funfact-section end -->
		<?php endif ;?>		
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_funfact_Widget() );