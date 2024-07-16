<?php
/**
 * Blog Post Main File.
 *
 * @package METROBANK
 */

get_header();
$data    = \METROBANK\Includes\Classes\Common::instance()->data( 'single' )->get();
$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'single' );
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-xs-12 col-sm-12 col-md-12 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12';
$mr_width = (is_active_sidebar( $sidebar )) ?  $class : 'col-12';

$title_color = get_post_meta( get_the_id(), 'title_color', true );
$bgsetting = get_post_meta( get_the_id(), '$bgsetting', true );




if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {	
	
	
	?>

<?php if (!$data->get( 'enable_banner' ) ) : ?>
 		<section class="mr_post_post mr_page_title  page-title">
            <div class="auto-container">
                <div class="content-box">
				<?php if (!get_post_meta( get_the_id(), 'title_hide', true ) ) : ?>	
                    <h1 class="mr_banner_title mr_xpost"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
				<?php endif; ?>
					
				<?php if (!get_post_meta( get_the_id(), 'hide_breadcrumb', true ) ) : ?>		
					<ul class="bread-crumb mr_bread_list .mr_xpost_bread">
                       	<?php echo metrobank_the_breadcrumb(); ?>
                    </ul>
				<?php endif; ?>
					
                </div>
            </div>
        </section>
<?php endif;} ?>



<section class="sidebar-page-container p_relative mr_single pt_120">
	<div class="auto-container">
		<div class="row clearfix">
			
		 <?php metrobank_template_load( 'templates/mrsidebar.php', compact( 'options', 'data' ) ); ?>	
			
			<div class="wp-style content-side <?php echo esc_attr( $mr_width ); ?>">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php metrobank_template_load( 'templates/blog-single/single-content.php', compact( 'options', 'data' ) ); ?>
				
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php

get_footer();
