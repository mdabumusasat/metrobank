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

class wpsection_video_button_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_video_button';
	}

	public function get_title() {
		return __( 'Video Button', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'video_button' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'video_button',
			[
				'label' => esc_html__( 'Video Button', 'Video Button' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'Video Button' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'Video Button' ),
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
			'vlink',
			[
			  'label' => __( 'Video Url', 'rashid' ),
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
			'icon',
			[
				'label' => esc_html__( 'Icons', 'elementor' ),
				'type' => Controls_Manager::ICONS,
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

		<section class="video-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <h2><?php echo $settings['title'];?></h2>
                    <div class="video-btn">
                        <a href="<?php echo esc_url($settings['vlink']['url']);?>" class="lightbox-image" data-caption="">
                            <i class="<?php echo esc_attr($settings['icon']['value']);?>"></i>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_video_button_Widget() );