<?php if (!$data->get( 'enable_banner' ) ) : ?>
 		<section class=" mr_post_title mr_post_banner page-title">
            <div class="auto-container">
                <div class="content-box">
				<?php if (!get_post_meta( get_the_id(), 'title_hide', true ) ) : ?>	
                    <h1 class="mr_banner_title"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
				<?php endif; ?>
					
				<?php if (!get_post_meta( get_the_id(), 'hide_breadcrumb', true ) ) : ?>		
					<ul class="mr_bread_list">
                       	<?php echo metrobank_the_breadcrumb(); ?>
                    </ul>
				<?php endif; ?>
					
                </div>
            </div>
        </section>
<?php endif; ?>



