<div class="mr_post_details">
    <div class="news-details">
        <div class="inner-box">
			
			 <?php if(!$options->get('single_post_thumb' ) ): ?>		
            <figure class="mr_post_thumbnail">
					<?php the_post_thumbnail(); ?>
            </figure>
			<?php endif; ?>
			 <?php if($options->get('single_post_title' ) ): ?>	
			<h3 class="mr_post_title"><?php the_title(); ?></h3>
			<?php endif; ?>
            <div class="lower-content">
                <div class="post_inner">					
			<ul class="post-info">
				
				<?php if(!$options->get('single_post_author' ) ): ?>
				<li class="mr_post_meta"><i class="icon-28"></i><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><?php the_author(); ?></a></li>
				<?php endif;?>
	
				
				<?php if(!$options->get('single_post_date' ) ): ?>
				<li class="mr_post_meta"><i class="icon-27"></i><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
				<?php endif;?>
				
				<?php if(!$options->get('single_post_comments' ) ): ?>
				<li class="mr_post_meta"><i class="icon-29"></i><?php comments_number(); ?></li>	
				<?php endif;?>
				
			</ul>
					
                    <div class="text mr_post_text">
						<?php the_content(); ?>
						<div class="clearfix"></div>
						<?php wp_link_pages(array('before'=>'<div class="pagination">'.esc_html__('Pages: ', 'metrobank'), 'after' => '</div>', 'link_before'=>'', 'link_after'=>'')); ?>
						
					</div>
                </div>
            </div>
        </div>
    </div>
    <?php metrobank_template_load( 'templates/blog-single/tags.php', compact( 'options', 'data' ) ); ?>
    <?php comments_template(); ?> 
    
</div>