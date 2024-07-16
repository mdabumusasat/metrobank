<?php
/**
 * Default Template Main File.
 * @package METROBANK
 */

get_header();
$data  = \METROBANK\Includes\Classes\Common::instance()->data( 'search' )->get();
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>




<?php if (!$data->get( 'enable_banner' ) ) : ?>
<?php if ( $data->get( 'banner' ) ) : ?>
	<section class=" search_page_title page-title" style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);">
	<?php else : ?>	
	<section class=" search_page_title page-title" >
	<?php endif; ?>

            <div class="auto-container">
                <div class="content-box">
					<?php if( !$options->get( 'search_hide_title' ) ):?> 
                    <h1 class="mr_banner_title"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
					<?php endif; ?>
					<?php if( !$options->get( 'search_bread' ) ):?> 	
					<ul class="mr_bread_list">
                       	<?php echo metrobank_the_breadcrumb(); ?>
                    </ul>
					<?php endif; ?>
                </div>
            </div>
        </section>
<?php endif; }?>	


<?php if( have_posts() ) : ?>
<div class="mr_search_page">	
<?php metrobank_template_load( 'templates/mrcontent.php', compact( 'options', 'data' ) ); ?>	
</div>
<?php else : ?>  
<?php get_template_part('templates/search'); ?>	
<?php endif; ?>	
<?php get_footer(); ?>
