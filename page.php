<?php
/**
 * Default Template Main File.
 * @package METROBANK
 */

get_header();
$data  = \METROBANK\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-xs-12 col-sm-12 col-md-12 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12';
$mr_width = (is_active_sidebar( $sidebar )) ?  $class : 'col-12';

if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>



<?php if (!$data->get( 'enable_banner' ) ) : ?>
 		<section class="mr_page_page_title page-title ">
            <div class="auto-container">
                <div class="content-box">
				<?php if (!get_post_meta( get_the_id(), 'title_hide', true ) ) : ?>	
                    <h1 class="mr_banner_title .mr_xpage"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
				<?php endif; ?>
					
				<?php if (!get_post_meta( get_the_id(), 'hide_breadcrumb', true ) ) : ?>		
					<ul class="mr_bread_list .mr_xpage_bread">
                       	<?php echo metrobank_the_breadcrumb(); ?>
                    </ul>
				<?php endif; ?>
					
                </div>
            </div>
        </section>
<?php endif; }?>

<!-- sidebar-page-container --> 
<section class=" sidebar-page-container pt_120 pb_120 ">
	<div class="auto-container">
		<div class="row clearfix">
		
	<?php if ( is_active_sidebar( $sidebar ) ) : ?>
		<?php
		if ( $data->get( 'layout' ) == 'left' ) {
			do_action( 'metrobank_sidebar', $data );
		}
		?>
	<?php endif; ?>	
		 <div class="content-side <?php echo esc_attr( $mr_width ); ?>">
                <div class="wp-style">       
					<?php while ( have_posts() ): the_post(); ?>
					       <div class="text">
                        <?php the_content(); ?>
							     </div>
                    <?php endwhile; ?>
					
                    <div class="clearfix"></div>
                    <?php
                    $defaults = array(
                        'before' => '<div class="pagination">' . esc_html__( 'Pages:', 'metrobank' ),
                        'after'  => '</div>',
    
                    );
                    wp_link_pages( $defaults );
                    ?>
                    <?php comments_template() ?>
                </div>
            </div>	
<?php if ( is_active_sidebar( $sidebar ) ) : ?>
		<!--Sidebar Start-->
		<?php
		if ( $data->get( 'layout' ) == 'right' ) {
			do_action( 'metrobank_sidebar', $data );
		}
		?>
<?php endif; ?>		
	</div>
</div>
</section>
	
	
	<?php

get_footer();