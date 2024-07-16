<?php

define( 'METROBANK_ROOT', get_template_directory() . '/' );

require_once get_template_directory() . '/includes/functions/functions.php';
require_once get_template_directory() . '/includes/functions/sidebarwidget.php';
include_once get_template_directory() . '/includes/classes/base.php';
include_once get_template_directory() . '/includes/classes/dotnotation.php';
include_once get_template_directory() . '/includes/classes/header-enqueue.php';
include_once get_template_directory() . '/includes/classes/options.php';
include_once get_template_directory() . '/includes/classes/ajax.php';
include_once get_template_directory() . '/includes/classes/common.php';
include_once get_template_directory() . '/includes/classes/bootstrap_walker.php';
include_once get_template_directory() . '/includes/library/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/includes/library/hook.php';


// Merlin demo import.
require_once get_template_directory() . '/demo-import/class-merlin.php';
require_once get_template_directory() . '/demo-import/merlin-config.php';
require_once get_template_directory() . '/demo-import/merlin-filters.php';

add_action( 'after_setup_theme', 'metrobank_wp_load', 5 );

function metrobank_wp_load() {

	defined( 'METROBANK_URL' ) or define( 'METROBANK_URL', get_template_directory_uri() . '/' );
	define(  'METROBANK_KEY','!@#metrobank');
	define(  'METROBANK_URI', get_template_directory_uri() . '/');

	if ( ! defined( 'METROBANK_NONCE' ) ) {
		define( 'METROBANK_NONCE', 'metrobank_wp_theme' );
	}

	( new \METROBANK\Includes\Classes\Base )->loadDefaults();
	( new \METROBANK\Includes\Classes\Ajax )->actions();

}
add_action( 'init', 'metrobank_bunch_theme_init');
function metrobank_bunch_theme_init()
{
	$bunch_exlude_hooks = include_once get_template_directory(). '/includes/resource/remove_action.php';
	

}
