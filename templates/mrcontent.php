<?php
global $wp_query;
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-xs-12 col-sm-12 col-md-12 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12';
$mr_width = (is_active_sidebar( $sidebar )) ?  $class : 'col-12';
?>


<section class="sidebar-page-container pt_120 pb_120">
    <div class="auto-container">
    <div class="row clearfix">      
     
        <?php metrobank_template_load( 'templates/mrsidebar.php', compact( 'options', 'data' ) ); ?>
        
            <div class="content-side <?php echo esc_attr( $mr_width ); ?>">
             <div class="blog-standard-content p_relative d_block">
                <?php
                    while ( have_posts() ) :
                        the_post();
                        metrobank_template_load( 'templates/blog/blog.php', compact( 'data' ) );
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <!--Pagination-->
            <div class="pagination-wrapper clearfix">
                <?php metrobank_the_pagination(); ?>
            </div>
        </div>
            
    </div>
</div>
</section>