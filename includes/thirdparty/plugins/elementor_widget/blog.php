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


class wpsection_blog_Widget extends \Elementor\Widget_Base {



	public function get_name() {
		return 'wpsection_blog';
	}

	public function get_title() {
		return __( 'Blog', 'wpsectionsupport' );
	}

	public function get_icon() {
		 return 'wpsd dashicons dashicons-shortcode';
	}

	public function get_keywords() {
		return [ 'wpsection', 'blog' ];
	}

	public function get_categories() {
		return [ 'wpsection_category' ];
	}



	protected function register_controls() {
		$this->start_controls_section(
			'blog',
			[
				'label' => esc_html__( 'Blog', 'wpsection' ),
			]
		);
		
		$this->add_control(
            'style', 
				[
					'label'   => esc_html__( 'Choose Different Style', 'metrobank' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Choose Style 1', 'metrobank' ),
						'style2' => esc_html__( 'Choose Style 2', 'metrobank' ),
					),
				]
		);

		$this->add_control(
            'thumb', 
				[
					'label'   => esc_html__( 'Choose Post Image', 'podgorica' ),
					'label_block' => true,
					'type'    => Controls_Manager::SELECT,
					'default' => 'style1',
					'options' => array(
						'style1' => esc_html__( 'Meta Box Image', 'podgorica' ),
						'style2' => esc_html__( 'Dafult Thumbnail', 'podgorica' ),
					),
				]
		);	
		$this->add_control(
			'column',
			[
				'label'   => esc_html__( 'Column', 'wpsection' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '3',
				'options' => array(
					'12'   => esc_html__( 'One Column', 'wpsection' ),
					'6'   => esc_html__( 'Two Column', 'wpsection' ),
					'4'   => esc_html__( 'Three Column', 'wpsection' ),
					'3'   => esc_html__( 'Four Column', 'wpsection' ),
					'2'   => esc_html__( 'Six Column', 'wpsection' ),
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
					'label' => __( 'Blog Block', 'wpsection' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
			
		
		$this->add_control(
			'text_limit',
			[
				'label'   => esc_html__( 'Text Limit', 'wpsection' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 5,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
			]
		);
		$this->add_control(
			'query_number',
			[
				'label'   => esc_html__( 'Number of post', 'wpsection' ),
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
				'label'   => esc_html__( 'Order By', 'wpsection' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => array(
					'date'       => esc_html__( 'Date', 'wpsection' ),
					'title'      => esc_html__( 'Title', 'wpsection' ),
					'menu_order' => esc_html__( 'Menu Order', 'wpsection' ),
					'rand'       => esc_html__( 'Random', 'wpsection' ),
				),
			]
		);
		$this->add_control(
			'query_order',
			[
				'label'   => esc_html__( 'Order', 'wpsection' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESc' => esc_html__( 'DESC', 'wpsection' ),
					'ASC'  => esc_html__( 'ASC', 'wpsection' ),
				),
			]
		);
		$this->add_control(
			'query_exclude',
			[
				'label'       => esc_html__( 'Exclude', 'wpsection' ),
				'type'        => Controls_Manager::TEXT,
				'description' => esc_html__( 'Exclude posts, pages, etc. by ID with comma separated.', 'wpsection' ),
			]
		);
		$this->add_control(
            'query_category', 
				[
				  'type' => Controls_Manager::SELECT,
				  'label' => esc_html__('Category', 'wpsection'),
				  'options' => get_blog_categories()
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
        
        $paged = wpsection_set($_POST, 'paged') ? esc_attr($_POST['paged']) : 1;

		$this->add_render_attribute( 'wrapper', 'class', 'templatepath-wpsection' );
		$args = array(
			'post_type'      => 'post',
			'posts_per_page' => wpsection_set( $settings, 'query_number' ),
			'orderby'        => wpsection_set( $settings, 'query_orderby' ),
			'order'          => wpsection_set( $settings, 'query_order' ),
			'paged'         => $paged
		);
		if ( wpsection_set( $settings, 'query_exclude' ) ) {
			$settings['query_exclude'] = explode( ',', $settings['query_exclude'] );
			$args['post__not_in']      = wpsection_set( $settings, 'query_exclude' );
		}
		if( wpsection_set( $settings, 'query_category' ) ) $args['category_name'] = wpsection_set( $settings, 'query_category' );
		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) 
		{ ?>

        <?php  if ( 'style1' === $settings['style'] ) : ?>
		<section class="news-style-two">
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
                                    <?php  the_post_thumbnail();     ?>
                                    <?php endif; ?>
                                    </a>
                                </figure>
                                <div class="lower-content">
                                    <div class="post-date"><h4><?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span></h4></div>
                                    <h3><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h3>
                                    <p><?php echo carecall_trim(get_the_content(), $settings['text_limit']); ?></p>
                                    <ul class="post-info">
                                        <li><i class="icon-32"></i><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_author(); ?></a></li>
                                        <li><i class="icon-33"></i><?php comments_number(); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
		<?php endif;?>

        <?php }
		wp_reset_postdata();
	}

}



// Register widget
Plugin::instance()->widgets_manager->register( new \wpsection_blog_Widget() );


