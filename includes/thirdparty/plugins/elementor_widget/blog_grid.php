<?php

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;
use Elementor\Utils;

class wpsection_blog_grid_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'wpsection_blog_grid';
	}

	public function get_title() {
		return __( 'Blog Grid', 'wpsectionsupport' );
	}

	public function get_icon() {
		return 'wpsd dashicons eicon-post';
	}

	public function get_keywords() {
		return [ 'wpsection', 'blog_grid' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}



	protected function _register_controls() {
		$this->start_controls_section(
			'blog_grid',
			[
				'label' => esc_html__( 'Blog Grid', 'metrobank' ),
			]
		);

		$this->add_control(
            'style', 
				[
					'label'   => esc_html__( 'Choose Different Style', 'rashid' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Choose Style 1', 'rashid' ),
						'style2' => esc_html__( 'Choose Style 2', 'rashid' ),
						'style3' => esc_html__( 'Choose Style 3', 'rashid' ),
					),
				]
		);


		$this->add_control(
            'thumb', 
				[
					'label'   => esc_html__( 'Choose Post Image', 'metrobank' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Meta Box Image', 'metrobank' ),
						'style2' => esc_html__( 'Dafult Thumbnail', 'metrobank' ),
						'style2' => esc_html__( 'Dafult Thumbnail', 'metrobank' ),
					),
				]
		);
		$this->add_control(
			'bgimg1',
			[
				'label' => esc_html__('Background image', 'rashid'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);
		
		$this->add_control(
			'bttn',
			[
				'label'       => __( 'Button', 'metrobank' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your Button Title', 'metrobank' ),
				'default' => esc_html__('Read More', 'metrobank'),
			]
		);	
		$this->add_control(
			'column',
			[
				'label'   => esc_html__( 'Column', 'metrobank' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '3',
				'options' => array(
					'12'   => esc_html__( 'One Column', 'metrobank' ),
					'6'   => esc_html__( 'Two Column', 'metrobank' ),
					'4'   => esc_html__( 'Three Column', 'metrobank' ),
					'3'   => esc_html__( 'Four Column', 'metrobank' ),
					'2'   => esc_html__( 'Six Column', 'metrobank' ),
				),
			]
		);
		$this->add_control(
			'sec_class',
			[
				'label'       => __( 'Section Class', 'rashid' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Section Class', 'rashid' ),
			]
		);
		
		
		$this->end_controls_section();
	
		$this->start_controls_section(
				'content_section',
				[
					'label' => __( 'Blog Block', 'metrobank' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
			
		
		$this->add_control(
			'text_limit',
			[
				'label'   => esc_html__( 'Text Limit', 'metrobank' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 15,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_number',
			[
				'label'   => esc_html__( 'Number of post', 'metrobank' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_orderby',
			[
				'label'   => esc_html__( 'Order By', 'metrobank' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => array(
					'date'       => esc_html__( 'Date', 'metrobank' ),
					'title'      => esc_html__( 'Title', 'metrobank' ),
					'menu_order' => esc_html__( 'Menu Order', 'metrobank' ),
					'rand'       => esc_html__( 'Random', 'metrobank' ),
				),
			]
		);
		$this->add_control(
			'query_order',
			[
				'label'   => esc_html__( 'Order', 'metrobank' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESc' => esc_html__( 'DESC', 'metrobank' ),
					'ASC'  => esc_html__( 'ASC', 'metrobank' ),
				),
			]
		);
		$this->add_control(
			'query_exclude',
			[
				'label'       => esc_html__( 'Exclude', 'metrobank' ),
				'type'        => Controls_Manager::TEXT,
				'description' => esc_html__( 'Exclude posts, pages, etc. by ID with comma separated.', 'metrobank' ),
			]
		);
		$this->add_control(
            'query_category', 
				[
				  'type' => Controls_Manager::SELECT,
				  'label' => esc_html__('Category', 'metrobank'),
				  'options' => get_blog_categories()
				]
		);

		$this->add_control(
			'show_pagination',
			[
				'label' => __( 'Enable/Disable Pagination', 'metrobank' ),
				'type'     => Controls_Manager::SWITCHER,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enable/Disable Pagination', 'metrobank' ),
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
        
        $paged = metrobank_set($_POST, 'paged') ? esc_attr($_POST['paged']) : 1;

		$this->add_render_attribute( 'wrapper', 'class', 'templatepath-metrobank' );
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => metrobank_set( $settings, 'query_number' ),
			'orderby'        => metrobank_set( $settings, 'query_orderby' ),
			'order'          => metrobank_set( $settings, 'query_order' ),
			'paged'         => $paged
		);
		if ( metrobank_set( $settings, 'query_exclude' ) ) {
			$settings['query_exclude'] = explode( ',', $settings['query_exclude'] );
			$args['post__not_in']      = metrobank_set( $settings, 'query_exclude' );
		}
		if( metrobank_set( $settings, 'query_category' ) ) $args['category_name'] = metrobank_set( $settings, 'query_category' );
		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) 
		{ ?>

    
		<?php  if ( 'style1' === $settings['style'] ) : ?>
		<section class="news-section-two">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg']['id']);?>);"></div>
                <div class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
				<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
                    <div class="col-lg-<?php echo esc_attr($settings['column'], true );?> col-md-6 col-sm-12 news-block">
                        <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
								<figure class="image-box">
									<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>">
									<?php  if ( 'style1' === $settings['thumb'] ) : ?>
									<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
									<?php endif; ?> 
									<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
									<?php  the_post_thumbnail();    ?>
									<?php endif; ?> 
									</a>
								</figure>
								<div class="lower-content">
                                    <div class="post-date"><h4><?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span></h4></div>
									<h3><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h3>
                                    <p><?php echo metrobank_trim(get_the_content(), $settings['text_limit']); ?></p>
                                    <ul class="post-info">
										<li><i class="icon-28"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
                                        <li><i class="icon-29"></i><?php comments_number(); ?></li>
                                    </ul>
									<div class="post_readmore btn-box">
										<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>" class=" theme-btn theme-btn-six mr_post_button"><?php echo $settings['bttn'];?></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endwhile; ?>   
                </div>

				<?php if($settings['show_pagination']){ ?>
					<div class="pagination-wrapper centred mt_40">
					<?php metrobank_the_pagination2(array('total'=>$query->max_num_pages, 'next_text' => ' <i class="icon-40"></i>', 'prev_text' => '<i class="icon-41"></i>')); ?>
					</div>
				<?php } ?>
            </div>
        </section>
		<?php endif ;?>	


		<?php  if ( 'style2' === $settings['style'] ) : ?>
 		<section class="news-section">
            <div class="pattern-layer">
                <div class="pattern-2" style="background-image: url(<?php echo wp_get_attachment_url($settings['bgimg1']['id']);?>);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
				<?php while ( $query->have_posts() ) : $query->the_post();
					$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
					?>
                    <div class="col-lg-<?php echo esc_attr($settings['column'], true );?> col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
								<figure class="image-box">
									<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>">
									<?php  if ( 'style1' === $settings['thumb'] ) : ?>
									<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
									<?php endif; ?> 
									<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
									<?php  the_post_thumbnail();    ?>
									<?php endif; ?> 
									</a>
								</figure>
								
                                <div class="content-box">
                                    <span class="post-date"><i class="icon-27"></i><?php echo get_the_date(); ?></span>
                                    <h3><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h3>
                                    <ul class="post-info mb_25">
                                        <li><i class="icon-28"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
                                        <li><i class="icon-29"></i><?php comments_number(); ?></li>
                                    </ul>
                                    <div class="btn-box"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>" class="theme-btn btn-three"><?php echo $settings['bttn'];?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endwhile; ?>   
                </div>
				<?php if($settings['show_pagination']){ ?>
					<div class="pagination-wrapper centred mt_40">
					<?php metrobank_the_pagination2(array('total'=>$query->max_num_pages, 'next_text' => ' <i class="icon-40"></i>', 'prev_text' => '<i class="icon-41"></i>')); ?>
					</div>
				<?php } ?>
            </div>
        </section>
		<?php endif ;?>	

		<?php  if ( 'style3' === $settings['style'] ) : ?>
		<section class="blog-1-section">
			<div class="auto-container">
				<div class="row">
					<?php while ( $query->have_posts() ) : $query->the_post();
						$meta_image = get_post_meta( get_the_id(), 'meta_image', true );
						?>
					<div class="col-lg-<?php echo esc_attr($settings['column'], true );?>">
						<div class="blog-1-block standard-post wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
							<div class="blog-1-image">
								<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>">
								<?php  if ( 'style1' === $settings['thumb'] ) : ?>
								<img src="<?php echo wp_get_attachment_url($meta_image['id']);?>" alt="" />
								<?php endif; ?> 
								<?php  if ( 'style2' === $settings['thumb'] ) : ?>      
								<?php  the_post_thumbnail();  ?>
								<?php endif; ?> 
								</a>
								<div class="blog-1-date"><span><?php echo get_the_date('d'); ?> </span><br> <?php echo get_the_date('M'); ?></div>
							</div>
							<div class="blog-1-bottom-content alt">
								<h4 class="blog-1-title">
									<a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a>
								</h4>
								<ul class="d-flex blog-1-meta-info">
									<li><i class="icon-12"></i><?php the_author(); ?></li>
									<li><i class="icon-13"></i><?php comments_number(); ?></li>
								</ul>
								<p class="blog-1-excerpt"><?php echo metrobank_trim(get_the_content(), $settings['text_limit']); ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; ?>  
				</div>            
			</div>
		</section>
		<?php endif ;?>	
	
    <?php }
	wp_reset_postdata();

	}

}

// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_blog_grid_Widget() );