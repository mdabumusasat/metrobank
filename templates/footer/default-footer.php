<?php
/**
 * Footer Template  File
 *
 * @package METROBANK
 * @author  Tona Theme
 * @version 1.0
 */

$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
?>


 
<div  class="mr_main_footer">
   <div class="container">
	<div class="row">
	  <?php dynamic_sidebar( 'footer-sidebar' ); ?>
	</div>
</div>
</div>   
    <!--End footer area-->