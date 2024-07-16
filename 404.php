<?php
/**
 * 404 page file
 */
get_header();
global $wp_query;
$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$data = \METROBANK\Includes\Classes\Common::instance()->data( '404' )->get();
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>


<?php if (!$data->get( 'enable_banner' ) ) : ?>
<?php if ( $data->get( 'banner' ) ) : ?>
	<section class="mr_page_title page-title centred" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
	<?php else : ?>	
	<section class="mr_page_title mr_index_index_title page-title centred" >
	<?php endif; ?>
           <div class="auto-container">
                <div class="content-box">
		
                    <h1><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
		
				
					<ul class="bread-crumb clearfix">
                       	<?php echo metrobank_the_breadcrumb(); ?>
                    </ul>
			
					
                </div>
            </div>
        </section>
<?php endif; }?>		

<section class="error-page-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-content text-center wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					
					
					<?php if($options->get('404_page_title' ) ): ?>	
                    <div class="title mr_404_title"><?php echo wp_kses( $options->get( '404_page_title'), $allowed_html ); ?></div>
					<?php else: ?>
					<div class="title mr_404_title"><?php esc_html_e( 'Oops! Page Not Found!', 'metrobank' ); ?></div>
					<?php endif; ?>
					
					
					<?php if($options->get('404_title' ) ): ?>
                    <div class="big-title mr_404"><?php echo wp_kses( $options->get( '404_title'), $allowed_html ); ?></div>
					<?php else: ?>	
					<div class="big-title mr_404"><?php esc_html_e( '404', 'metrobank' ); ?></div>
					<?php endif; ?>	
					
					
					<?php if($options->get('404_page_text' ) ): ?>
                    <p class="mr_page_text"><?php echo wp_kses( $options->get( '404_page_text'), $allowed_html ); ?></p>
					<?php else: ?>	
					<p class="mr_page_text"><?php esc_html_e( 'Sorry we’re unable to find the page you are looking for, please
					check the url and try again.', 'metrobank' ); ?></p>
					<?php endif; ?>	
					
					
					<?php if(!$options->get('back_home_btn' ) ): ?>		
					<?php if($options->get('back_home_btn_label' ) ): ?>
					<div class="error_btn_box">
						<a href="<?php echo( home_url( '/' ) ); ?>" class="error_button"><?php echo wp_kses( $options->get( 'back_home_btn_label'), $allowed_html ); ?></a>
					</div>
					<?php else: ?>
					<div class="error_btn_box">
						<a href="<?php echo( home_url( '/' ) ); ?>" class="error_button"><?php esc_html_e( 'Back to Home', 'metrobank' ); ?></a>
					</div>
					<?php endif; ?>		
					<?php endif; ?>
                </div>    
            </div>
        </div>       
    </div>
</section> 	 
<?php

get_footer(); ?>
