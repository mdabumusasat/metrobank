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

class wpsection_image_button_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_image_button';
	}

	public function get_title() {
		return __( 'Image Button', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'image_button' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}
	
	
	
	protected function register_controls() {
		$this->start_controls_section(
			'image_button',
			[
				'label' => esc_html__( 'Image Button', 'Image Button' ),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'Image Button' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'Image Button' ),
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
			'btnlink',
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
	<section class="apps-section">
		<div class="content-box">
			<div class="btn-box">
				<a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="play-store mr_20">
					<?php  if ( esc_url($settings['image']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
					<span><?php echo $settings['title'];?></span>
					<?php echo $settings['title1'];?>
				</a>
			</div>
		</div>
	</section>
	<?php endif ;?>	

	<?php  if ( 'style2' === $settings['style'] ) : ?>
	<section class="apps-section alternat-2">
		<div class="content-box">
			<div class="btn-box">
				<a href="<?php echo esc_url($settings['btnlink']['url']);?>" class="play-store mr_20">
					<?php  if ( esc_url($settings['image']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
					<span><?php echo $settings['title'];?></span>
					<?php echo $settings['title1'];?>
				</a>
			</div>
		</div>
	</section>
	<?php endif ;?>	
		<?php 
	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_image_button_Widget() );