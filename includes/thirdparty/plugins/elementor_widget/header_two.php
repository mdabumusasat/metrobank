<?php


use Elementor\Utils;
use Elementor\Controls_Manager;
use Elementor\Widget_Base;
use Elementor\Plugin;
use Elementor\Repeater;

class wpsection_header_two_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_header_two';
	}

	public function get_title() {
		return __( 'Header Two', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons dashicons-nametag';
	}

	public function get_keywords() {
		return [ 'wpsection', 'header_two' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}

	

	protected function register_controls() {
		$this->start_controls_section(
			'menu_settings',
			[
				'label' => __( 'Menu General', 'wpsectionsupport' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'top_header_text',
			[
				'label'       => __( 'Description Text', 'rashid' ),
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
			'mail',
			[
				'label'       => __( 'Description mail', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'rashid' ),
			]
		);
		$this->add_control(
			'mail_link',
			[
			  'label' => __( 'Mail Url', 'rashid' ),
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
			'icon1',
			[
				'label' => esc_html__( 'Icons', 'elementor' ),
                'type' => Controls_Manager::ICONS,
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
		$this->add_control(
			'logo_link',
			[
			  'label' => __( 'Logo Url', 'rashid' ),
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
			'logo_image',
				[
				  'label' => __( 'logo_image', 'rashid' ),
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
			'button_link',
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
			'bttn',
			[
				'label'       => __( 'Button', 'rashid' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Button Title', 'rashid' ),
				'default' => esc_html__('Read More', 'rashid'),
			]
		);
		$this->add_control(
			'button_link1',
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
			'bttn1',
			[
				'label'       => __( 'Button', 'rashid' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Button Title', 'rashid' ),
				'default' => esc_html__('Read More', 'rashid'),
			]
		);
		$this->add_control(
			'logo_link1',
			[
			  'label' => __( 'Logo Url', 'rashid' ),
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
			'sticky_image',
				[
				  'label' => __( 'Sticky Image', 'rashid' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		$this->add_control(
			'alt_text1',
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
			'button_link2',
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
			'bttn2',
			[
				'label'       => __( 'Button', 'rashid' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Button Title', 'rashid' ),
				'default' => esc_html__('Read More', 'rashid'),
			]
		);
		$this->add_control(
			'button_link3',
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
			'bttn3',
			[
				'label'       => __( 'Button', 'rashid' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Button Title', 'rashid' ),
				'default' => esc_html__('Read More', 'rashid'),
			]
		);
		$this->add_control(
			'icon2',
			[
				'label' => esc_html__( 'Icons', 'elementor' ),
				'type' => Controls_Manager::ICONS,
			]
		);
		$this->add_control(
			'mobile_menu_image',
				[
				  'label' => __( 'Mobile Menu Image', 'rashid' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		$this->add_control(
			'alt_text2',
			[
				'label'       => __( 'Alt text', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Description', 'rashid' ),
			]
		);
        $this->end_controls_section();




	}

	protected function render() {
		global $plugin_root;
		$settings = $this->get_settings_for_display();

?>

	
	 	<!-- main header -->
	 	<header class="main-header header-style-two">
            <!-- header-top -->
            <div class="auto-container">
                <div class="header-top">
                    <div class="top-inner">
						<ul class="links-list clearfix">
							<?php echo $settings['top_header_text'];?>
						</ul>
						<ul class="info-list clearfix"> 
							<li>
								<i class="<?php echo esc_attr($settings['icon']['value']);?>"></i>
								<a href="<?php echo esc_url($settings['mail_link']['url']);?>"><?php echo $settings['mail'];?></a>
							</li>
							<li>
								<i class="<?php echo esc_attr($settings['icon1']['value']);?>"></i>
								<?php echo $settings['text'];?>
							</li>
						</ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="auto-container">
                <div class="header-lower">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
								<a href="<?php echo esc_url($settings['logo_link']['url']);?>">
								<?php  if ( esc_url($settings['logo_image']['id']) ) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['logo_image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								<?php else :?>
								<div class="noimage"></div>
								<?php endif;?>
								</a>
							</figure>
                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
									<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbarSupportedContent',
										'container_class'=>'collapse navbar-collapse sub-menu-bar',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'add_li_class'  => 'nav-item',
										'items_wrap' => '%3$s', 
										'container'=>false,
										'depth'=>'3',
										'walker'=> new Bootstrap_walker()  
									) ); ?> 
                                    </ul>
                                </div>
                            </nav>
                            <div class="menu-right-content ml_70">
								<a href="<?php echo esc_url($settings['button_link']['url']);?>" class="theme-btn btn-two mr_20"><?php echo $settings['bttn'];?></a>
								<a href="<?php echo esc_url($settings['button_link1']['url']);?>" class="theme-btn btn-one"><?php echo $settings['bttn1'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="large-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
								<a href="<?php echo esc_url($settings['logo_link1']['url']);?>">
									<?php  if ( esc_url($settings['sticky_image']['id']) ) : ?>   
									<img src="<?php echo wp_get_attachment_url($settings['sticky_image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
									<?php else :?>
									<div class="noimage"></div>
									<?php endif;?>
								</a>
							</figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <div class="menu-right-content ml_70">
								<a href="<?php echo esc_url($settings['button_link2']['url']);?>" class="theme-btn btn-two mr_20"><?php echo $settings['bttn2'];?></a>
								<a href="<?php echo esc_url($settings['button_link3']['url']);?>" class="theme-btn btn-one"><?php echo $settings['bttn3'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="<?php echo esc_attr($settings['icon2']['value']);?>"></i></div>
            <nav class="menu-box">
                <div class="nav-logo">
					<?php  if ( esc_url($settings['mobile_menu_image']['id']) ) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['mobile_menu_image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
					<?php else :?>
					<div class="noimage"></div>
					<?php endif;?>
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
        <?php

	}
}




// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_header_two_Widget() );