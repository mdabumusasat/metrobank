<?php
global $wp_query;
$sidebar = $data->get( 'sidebar' ); 
?>





<?php if ( is_active_sidebar( $sidebar ) ) : ?>

<?php if ($data->get( 'layout' ) == 'left') {?> 

<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side ">	
<div class="blog-sidebar ml_10">
		<?php dynamic_sidebar( $sidebar); ?>
	</div>
</div>
<?php } 
elseif ($data->get( 'layout' ) == 'right') { ?> 

<div class=" col-lg-4 col-md-12 col-sm-12 sidebar-side order-2">
<div class="blog-sidebar ml_10">
		<?php dynamic_sidebar( $sidebar); ?>
</div>	
</div>	
<?php			
} else {
  echo " ";
}	
?>	

<?php endif; ?>
