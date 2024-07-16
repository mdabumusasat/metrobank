<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );



function add_filter() {}
function esc_attr($str) {return $str;}
function apply_filters() {}
function get_option() {}
function is_lighttpd_before_150() {}
function add_action() {}
function did_action() {}
function do_action_ref_array() {}
function get_bloginfo() {}
function is_admin() {return true;}
function site_url() {}
function admin_url() {}
function home_url() {}
function includes_url() {}
function wp_guess_url() {}
if ( ! function_exists( 'json_encode' ) ) :
function json_encode() {}
endif;
/* Convert hexdec color string to rgb(a) string */
function hex2rgba($color2, $opacity = false) {
	$default = 'rgb(0,0,0)';
	//Return default if no color provided
	if(empty($color2))
          return $default; 
	//Sanitize $color if "#" is provided 
        if ($color2[0] == '#' ) {
        	$color2 = substr( $color2, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color2) == 6) {
                $hex = array( $color2[0] . $color2[1], $color2[2] . $color2[3], $color2[4] . $color2[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color2[0] . $color2[0], $color2[1] . $color2[1], $color2[2] . $color2[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}



$color2 = $_GET['main_color2'];




ob_start(); ?>
/*========== Color ====================*/


{
	color: #<?php echo esc_attr( $color2 ); ?>;
}




{
    background: <?php echo esc_attr( hex2rgba($color2, 0.4));?>!important;
}

{
    background: #<?php echo esc_attr( $color2 ); ?>;
}


{
    border-color: #<?php echo esc_attr( $color2 ); ?>!important;  
}

<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;