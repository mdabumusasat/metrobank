<?php 

$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html();
$tags = wp_get_post_tags( get_the_ID() );
$get_tags   = get_the_tag_list( get_the_ID() );
?>


<?php if(!$options->get('single_post_tag' ) ): ?>
	<?php if(has_tag()) { ?>
<div class="post-tags">
	<div class="mr_post_tags">
		<h6 class="mr_post_tag_icon"><i class="fa fa-tags"></i></h6>
		<?php the_tags(' ', '<span class="commax">,</span>  ', ''); ?>
	</div>
</div>
<?php }  ?>
<?php endif; ?>
	


