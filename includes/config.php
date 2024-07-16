<?php
/**
 * Theme config file.
 * @package Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$config = array();

$config['default']['metrobank_main_header'][] 	= array( 'metrobank_preloader', 98 );
$config['default']['metrobank_main_header'][] 	= array( 'metrobank_main_header_area', 99 );
$config['default']['metrobank_main_footer'][] 	= array( 'metrobank_preloader', 98 );
$config['default']['metrobank_main_footer'][] 	= array( 'metrobank_main_footer_area', 99 );
$config['default']['metrobank_sidebar'][] 	    = array( 'metrobank_sidebar', 99 );
$config['default']['metrobank_banner'][] 	        = array( 'metrobank_banner', 99 );


return $config;
