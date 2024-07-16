<?php

namespace METROBANK\Includes\Classes;

/**
 * Header and Enqueue class
 */
class Header_Enqueue {


	public static function init() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue' ) );

		add_filter( 'wp_resource_hints', array( __CLASS__, 'resource_hints' ), 10, 2 );
	}
	public static function enqueue() {
		self::scripts();
		self::styles();
	}

	
	public static function scripts() {
		$options = get_theme_mod( 'metrobank' . '_options-mods' );
		$ssl     = is_ssl() ? 'https' : 'http';

		$scripts = array(
			
		);
		$scripts = apply_filters( 'METROBANK/includes/classes/header_enqueue/scripts', $scripts );
		foreach ( $scripts as $name => $js ) {

			if ( strstr( $js, 'http' ) || strstr( $js, 'https' ) || strstr( $js, 'googleapis.com' ) ) {

				wp_register_script( "{$name}", $js, '', '', true );
			} else {
				wp_register_script( "{$name}", get_template_directory_uri() . '/' . $js, '', '', true );
			}
		}

		wp_enqueue_script( array(
		) );
		$header_data = array(
			'ajaxurl' => esc_url( admin_url( 'admin-ajax.php' ) ),
			'nonce'   => wp_create_nonce( METROBANK_NONCE ),
		);

		wp_localize_script( 'jquery', 'metrobank_data', $header_data );

		if ( metrobank_set( $options, 'footer_js' ) ) {

			wp_add_inline_script( 'jquery', metrobank_set( $options, 'footer_js' ) );
		}

	}


	public static function styles() {
		 $options     = metrobank_WSH()->option();
		 $maincolor = esc_attr( $options->get( 'theme_color_scheme') );		
	     $maincolor = str_replace( '#', '' , $maincolor );	
		 wp_enqueue_style( 'main-color', get_template_directory_uri() . '/assets/css/color.php?main_color='.$maincolor );
		 $maincolor2 = esc_attr( $options->get( 'color2') );		
	     $maincolor2 = str_replace( '#', '' , $maincolor2 );	
		 wp_enqueue_style( 'main-color2', get_template_directory_uri() . '/assets/css/color_two.php?main_color2='.$maincolor2 );
		
		$styles = array(
		);		
		$styles = apply_filters( 'METROBANK/includes/classes/header_enqueue/styles', $styles );
		foreach ( $styles as $name => $style ) {
			if ( strstr( $style, 'http' ) || strstr( $style, 'https' ) || strstr( $style, 'fonts.googleapis' ) ) {
				wp_enqueue_style( "metrobank-{$name}", $style );
			} else {
				wp_enqueue_style( "metrobank-{$name}", get_template_directory_uri() . '/' . $style );
			}
		}
		$options      = metrobank_WSH()->option();
		$custom_style = '';

		wp_add_inline_style( 'color', $custom_style );
		wp_add_inline_style( 'color2', $custom_style );

		$header_styles = self::header_styles(); 
		
		if ( $custom_font = $options->get('theme_custom_font') ) {
            $header_styles .= metrobank_custom_fonts_load( $custom_font );
        }

		wp_add_inline_style( 'metrobank-main-style', $header_styles );
	}
	
	
	
	
	
	
	
	
	public static function fonts_url() {
	}
	public static function resource_hints( $urls, $relation_type ) {
		if ( wp_style_is( 'metrobank-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		}

		return $urls;
	}
	public static function header_styles() {
		$data = \METROBANK\Includes\Classes\Common::instance()->data( 'blog' )->get();
		$options = metrobank_WSH()->option();
		$styles = '';
		if ( $options->get( 'footer_top_button' ) ) :
			$styles .= "#topcontrol {
				background: " . $options->get( 'button_bg' ) . " none repeat scroll 0 0 !important;
				opacity: 0.5;
				color: " . $options->get( 'button_color' ) . " !important;
			}";
		endif;
		$settings = get_theme_mod( 'metrobank' . '_options-mods' );
		if ( $custom_font = metrobank_set( $settings, 'theme_custom_font' ) ) {
			$styles .= apply_filters('metrobank_redux_custom_fonts_load', $custom_font );
		}
		return $styles;
	}
}