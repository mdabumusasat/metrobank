<?php
/**
 * Banner Template
 */

if ( $data->get( 'enable_banner' ) AND $data->get( 'banner_type' ) == 'e' AND ! empty( $data->get( 'banner_elementor' ) ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'banner_elementor' ) );

	return false;
}

?>

<?php if ($data->get( 'enable_banner' ) ) : ?>

 	<?php if ( $data->get( 'banner' ) ) : ?>
	<section class="mr_page_title page-title" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
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
<?php endif; ?>


		
