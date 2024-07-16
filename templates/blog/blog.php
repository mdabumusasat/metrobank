<?php
$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html();

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage METROBANK
 * @author     Tona Theme
 * @version    1.0
 */

if ( class_exists( 'Metrobank_Resizer' ) ) {
	$img_obj = new Metrobank_Resizer();
} else {
	$img_obj = array();
}
$allowed_tags = wp_kses_allowed_html('post');
global $post;
?>
<div <?php post_class(); ?>>

 
<div class="news-block-two mb_40">
	<div class="inner-box">
		<?php	if ( has_post_thumbnail() ) { ?>
			<figure class="image-box">
				<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
		<?php } ?>	
	
		<div class="lower-content">
			
			
			<?php if( ! empty( $post->post_title ) ) : ?>
					<h2 class="blog_post_title"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
			
			
			
			<ul class="post-info blog-two">
				
				<?php if(!$options->get('blog_post_author' ) ): ?>
				<li class="mr_blog_post_meta"><i class="icon-28"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
				<?php endif;?>
	
				
				<?php if(!$options->get('blog_post_date' ) ): ?>
				<li class="mr_blog_post_meta"><i class="icon-27"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
					<?php endif;?>
				
				<?php if(!$options->get('blog_post_comment' ) ): ?>
				<li class="mr_blog_post_meta"><i class="icon-29"></i><?php comments_number(); ?></li>	
					<?php endif;?>
			</ul>
			
			
			<div class="text mr_blog_post_text">
			<?php the_excerpt(); ?>
			</div>
			
			
			<?php if(!$options->get('blog_post_readmore' ) ): ?>						
			
				<?php if($options->get('blog_post_readmoretext' ) ): ?>
				<div class="post_readmore btn-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class=" theme-btn theme-btn-six mr_post_button"><?php echo wp_kses( $options->get( 'blog_post_readmoretext'), $allowed_html ); ?></a>
				</div>
				<?php else: ?>		
				<div class="post_readmore btn-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class=" theme-btn theme-btn-six mr_post_button"><?php esc_html_e('Read More', 'metrobank');?></a>
				</div>
				<?php endif; ?>	
			
			<?php endif;?>
			
			
		</div>
	</div>
</div>		
	
	

</div>