<?php
/**
 * The header for our theme
 */
$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$icon_href = $options->get( 'image_favicon' ); 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if (function_exists( 'has_site_icon' ) || has_site_icon() ): ?>
		<?php if( $icon_href ):?>	
		<!-- Fav Icon -->
		<link rel="icon" href="<?php echo esc_url($icon_href['url']); ?>" type="image/x-icon">
		<?php endif; ?>
		<?php endif; ?>
		<!-- Responsive -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>> 
<?php
if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() {
			do_action( 'wp_body_open' );
		}
}?>

<?php if(!$options->get( 'theme_preloader' ) ):?>	
<!-- preloader -->
<div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="k" class="letters-loading">
                                k
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
<!-- preloader end -->
<?php endif; ?>		
	
	
	
<main class="boxed_wrapper <?php if($options->get( 'theme_rtl' ) ): echo esc_attr_e( 'rtl', 'metrobank' ); endif;?>">		
<?php do_action('metrobank_main_header' ); ?>	
	

	


	