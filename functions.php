<?php

function get_theme_version() {
    $theme = wp_get_theme();
    return $theme->get('Version');
}

if (!defined('THEME_VERSION')) {
    define('THEME_VERSION', get_theme_version());
}

require_once get_template_directory() . '/includes/loader.php';


add_action('after_setup_theme', 'metrobank_setup_theme');
add_action('after_setup_theme', 'metrobank_load_default_hooks');

function metrobank_setup_theme() {
    load_theme_textdomain('metrobank', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    $GLOBALS['content_width'] = 525;

    // Register image sizes
    add_image_size('metrobank_370x310', 370, 310, true);
    add_image_size('metrobank_70x70', 70, 70, true);
    add_image_size('metrobank_370x290', 370, 290, true);
    add_image_size('metrobank_440x305', 440, 305, true);
    add_image_size('metrobank_310x305', 310, 305, true);
    add_image_size('metrobank_1170x440', 1170, 440, true);

    // Register navigation menus
    register_nav_menus(array(
        'main_menu' => esc_html__('Main Menu', 'metrobank'),
        'onepage_menu' => esc_html__('OnePage Menu', 'metrobank'),
        'main_menu_two' => esc_html__('Main Menu Two', 'metrobank'),
    ));

    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
    add_editor_style();
    add_action('admin_init', 'metrobank_admin_init', 2000000);
}

function metrobank_admin_init() {
    remove_action('admin_notices', array('ReduxFramework', '_admin_notices'), 99);
}



/*---------- Enqueue Styles and Scripts ----------*/

function metrobank_enqueue_scripts() {	
    //All Default CSS Need for WP Basic

    // Enqueue font-awesome-all.css
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    // wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css' );
    wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css' );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
    wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
    // wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
    wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/global.css' );
    wp_enqueue_style( 'elpath', get_template_directory_uri() . '/assets/css/elpath.css' );
     wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
    wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css' );
    wp_enqueue_style( 'switcher', get_template_directory_uri() . '/assets/css/switcher-style.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	
	//Theme Core
	
	wp_enqueue_style( 'metrobank-fixing', get_template_directory_uri() . '/assets/css/theme/fixing.css' );
	wp_enqueue_style( 'metrobank-gutenberg', get_template_directory_uri() . '/assets/css/theme/gutenberg.css' );
    // wp_enqueue_style( 'metrobank-g', get_template_directory_uri() . '/assets/css/theme/global.css' );
    wp_enqueue_style( 'metrobank-elpath', get_template_directory_uri() . '/assets/css/theme/elpath.css' );
	wp_enqueue_style( 'metrobank-sidebar', get_template_directory_uri() . '/assets/css/theme/sidebar.css' );
	wp_enqueue_style( 'metrobank-tut', get_template_directory_uri() . '/assets/css/theme/tut.css' );
	wp_enqueue_style( 'metrobank-comment', get_template_directory_uri() . '/assets/css/theme/comment.css' );

    //Color Core
	
	wp_enqueue_style( 'metrobank-crimson', get_template_directory_uri() . '/assets/css/color/crimson.css' );
	wp_enqueue_style( 'metrobank-orange', get_template_directory_uri() . '/assets/css/color/orange.css' );
    wp_enqueue_style( 'metrobank-pink', get_template_directory_uri() . '/assets/css/color/pink.css' );
	wp_enqueue_style( 'metrobank-theme-color', get_template_directory_uri() . '/assets/css/color/theme-color.css' );
	// wp_enqueue_style( 'metrobank-violet', get_template_directory_uri() . '/assets/css/color/violet.css' );
	
    //module-css Core
	wp_enqueue_style( 'metrobank-about', get_template_directory_uri() . '/assets/css/module-css/about.css' );
	wp_enqueue_style( 'metrobank-apps', get_template_directory_uri() . '/assets/css/module-css/apps.css' );
    wp_enqueue_style( 'metrobank-faq', get_template_directory_uri() . '/assets/css/module-css/faq.css' );
    wp_enqueue_style( 'metrobank-banner', get_template_directory_uri() . '/assets/css/module-css/banner.css' );
    wp_enqueue_style( 'metrobank-blog-details', get_template_directory_uri() . '/assets/css/module-css/blog-details.css' );
	wp_enqueue_style( 'metrobank-calculator', get_template_directory_uri() . '/assets/css/module-css/calculator.css' );
    wp_enqueue_style( 'metrobank-feature', get_template_directory_uri() . '/assets/css/module-css/feature.css' );
    wp_enqueue_style( 'metrobank-service', get_template_directory_uri() . '/assets/css/module-css/service.css' );
    wp_enqueue_style( 'metrobank-video', get_template_directory_uri() . '/assets/css/module-css/video.css' );
    wp_enqueue_style( 'metrobank-testimonial', get_template_directory_uri() . '/assets/css/module-css/testimonial.css' );
    wp_enqueue_style( 'metrobank-page-title', get_template_directory_uri() . '/assets/css/module-css/page-title.css' );
    wp_enqueue_style( 'metrobank-team', get_template_directory_uri() . '/assets/css/module-css/team.css' );
    wp_enqueue_style( 'metrobank-process', get_template_directory_uri() . '/assets/css/module-css/process.css' );
    wp_enqueue_style( 'metrobank-news', get_template_directory_uri() . '/assets/css/module-css/news.css' );
    wp_enqueue_style( 'metrobank-exchange', get_template_directory_uri() . '/assets/css/module-css/exchange.css' );
   	
	//scripts
	wp_enqueue_script( 'jquery-ui-core');
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '1.0', true );
    wp_enqueue_script( 'scrollbar', get_template_directory_uri() . '/assets/js/scrollbar.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script( 'validation', get_template_directory_uri() . '/assets/js/validation.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/appear.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice_select.min.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery_ui.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'metrobank-main-script', get_template_directory_uri().'/assets/js/script.js', array(), false, true );	
	if( is_singular() ) wp_enqueue_script('comment-reply');	
}
add_action( 'wp_enqueue_scripts', 'metrobank_enqueue_scripts' );

/*---------- Enqueue styles and scripts ends ----------*/

// Google Fonts
function metrobank_fonts_url() {
    $fonts_url = '';
    $font_families['Inter'] = 'Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
    $font_families['Manrope'] = 'Manrope:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
    // Add more font families as needed
    $font_families = apply_filters('METROBANK/includes/classes/header_enqueue/font_families', $font_families);
    $query_args = array(
        'family' => urlencode(implode('|', $font_families)),
        'subset' => urlencode('latin,latin-ext'),
    );
    $protocol = is_ssl() ? 'https' : 'http';
    $fonts_url = add_query_arg($query_args, $protocol . '://fonts.googleapis.com/css');
    return esc_url_raw($fonts_url);
}

function metrobank_theme_styles() {
    wp_enqueue_style('metrobank-theme-fonts', metrobank_fonts_url(), array(), null);
}

add_action('wp_enqueue_scripts', 'metrobank_theme_styles');
add_action('admin_enqueue_scripts', 'metrobank_theme_styles');

// Helper Function
if (!function_exists('metrobank_set')) {
    function metrobank_set($var, $key, $def = '') {
        if (is_object($var) && isset($var->$key)) {
            return $var->$key;
        } elseif (is_array($var) && isset($var[$key])) {
            return $var[$key];
        } elseif ($def) {
            return $def;
        } else {
            return false;
        }
    }
}

// Additional Functions
// Add specific CSS class by filter body class.
$options = metrobank_WSH()->option();
if (metrobank_set($options, 'boxed_wrapper')) {
    add_filter('body_class', function ($classes) {
        $classes[] = 'boxed_wrapper';
        return $classes;
    });
}

// Other Functions (Not included in your code snippet)
function metrobank_related_products_limit() {
    global $product;
    $args['posts_per_page'] = 6;
    return $args;
}

function metrobank_loop_shop_per_page($cols) {
    $options = metrobank_WSH()->option();
    $shop_product = esc_attr($options->get('shop_product'));
    $cols = $shop_product;
    return $cols;
}