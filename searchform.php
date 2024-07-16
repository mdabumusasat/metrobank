<?php
/**
 * Search Form template
 *
 * @package METROBANK
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>

<div class="mr_search search-inner search-widget">
	<div class="search-form">
		<form class="mr_search_form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">
			<div class="form-group">
				<input type="search" name="s" placeholder="<?php echo esc_attr__( 'Search', 'metrobank' ); ?>" required="">
				<button class="search_button"  type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
</div>


                               
                  
