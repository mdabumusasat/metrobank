<?php
namespace METROBANK\Includes\Classes;

class Ajax {

	function actions() {
		add_action( 'wp_ajax_metrobank_ajax', array( $this, 'ajax_handler' ) );
		add_action( 'wp_ajax_nopriv_metrobank_ajax', array( $this, 'ajax_handler' ) );
	}

	function ajax_handler() {

		$method = metrobank_set( $_REQUEST, 'subaction' );
		if ( method_exists( $this, $method ) ) {
			$this->$method();
		}
		exit;

	}


}
