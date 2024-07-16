<?php
/**
 * Blog Main File.
 */

get_header();
global $wp_query;
$data  = \METROBANK\Includes\Classes\Common::instance()->data( 'blog' )->get();


if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>

<?php if (!$data->get( 'enable_banner' ) ) : ?>
<?php if ( $data->get( 'banner' ) ) : ?>
	<section class="mr_page_title page-title" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
	<?php else : ?>	
	<section class="mr_page_title mr_index_index_title page-title centred" >
	<?php endif; ?>

           <div class="auto-container">
                <div class="content-box">
				<?php if( !$options->get( 'author_page_title' ) ):?> 		
                    <h1><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
					<?php endif; ?>	
					<ul class="bread-crumb clearfix">
                       	<?php echo metrobank_the_breadcrumb(); ?>
                    </ul>
                </div>
            </div>
        </section>
<?php endif; } ?>	



<div class="mr_page_index">	
<?php metrobank_template_load( 'templates/mrcontent.php', compact( 'options', 'data' ) ); ?>	
</div>	

<?php

get_footer();