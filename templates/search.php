<?php
$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html();
$search_image    = $options->get( 'search_image' );
$search_image    = metrobank_set( $search_image, 'url', METROBANK_URI . 'assets/images/search.jpg' );

?>
<section class="search_area_df text-center">
<div class="container">		 
		<div class="row clearfix">			
			

			
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="search_tx_box">
				<!-- search Title -->	
				<?php if($options->get('search_page_title' ) ): ?>
			
					<h1 class="search_title">
					<?php echo wp_kses( $options->get( 'search_page_title'), $allowed_html ); ?>
					
					</h1>
					<?php else : ?>
					<h1 class="search_title">
					<?php esc_html_e( 'Oops! Search not Found', 'metrobank' ); ?>
					</h1>
				<?php endif; ?>	
				<!-- search Text -->		
					<?php if($options->get('search_page_text' ) ): ?>
					
					<div class="search_text">	
					<?php echo(wp_kses($options->get('search_page_text' ), $allowed_html )) ?>
					</div>
				<?php else : ?>
					<div class="search_text">	
						<p><?php esc_html_e( '1. Check the Spelling ', 'metrobank' ); ?>
						</p>
						<p><?php esc_html_e( '2. Check the Caps Lock', 'metrobank' ); ?>
						</p>      
						<p><?php esc_html_e( '3. Press Enter correctly or Press F5', 'metrobank' ); ?>
						</p> 
					</div>
				<?php endif; ?>	
				
				<!--  Search form -->
		 <?php if(!$options->get('search_form_hide' ) ): ?>		
				
				<div class="mr_search_page">
					<div class="search-form">
						<form class="mr_search_form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
							<div class="form-group">
								<input class="mr_search_input" type="search" name="s" placeholder="<?php echo esc_attr__( '', 'metrobank' ); ?>" required="">
								<button class="mr_search_button"  type="submit"><i class="far fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			<?php endif; ?>	
				
			
				
		<?php if(!$options->get('search_gohome_hide' ) ): ?>			
				<?php if($options->get('search_home_btn_label' ) ): ?>
					<div class="error_btn_box">
						<a href="<?php echo( home_url( '/' ) ); ?>" class="error_button"><?php echo wp_kses( $options->get( 'search_home_btn_label'), $allowed_html ); ?></a>
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
