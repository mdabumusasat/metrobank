<?php
/*---------- Sidebar settings ----------*/

function metrobank_widgets_init() {
    global $wp_registered_sidebars;
    $theme_options = get_theme_mod('metrobank' . '_options-mods');
    register_sidebar(array(
        'name'          => esc_html__('Default Sidebar', 'metrobank'),
        'id'            => 'default-sidebar',
        'description'   => esc_html__('Widgets in this area will be shown on the right-hand side.', 'metrobank'),
        'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget', 'metrobank'),
        'id'            => 'footer-sidebar',
        'description'   => esc_html__('Widgets in this area will be shown in the Footer Area.', 'metrobank'),
        'before_widget' => '<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
    ));
    if (class_exists('\Elementor\Plugin')) {
        register_sidebar(array(
            'name'          => esc_html__('RTL Footer Widget', 'metrobank'),
            'id'            => 'footer-sidebar-2',
            'description'   => esc_html__('Widgets in this area will be shown in the Footer Area.', 'metrobank'),
            'before_widget' => '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="widget-title"><h3>',
            'after_title'   => '</h3></div>',
        ));
        register_sidebar(array(
            'name'          => esc_html__('Services Widget', 'metrobank'),
            'id'            => 'service-sidebar',
            'description'   => esc_html__('Widgets in this area will be shown on the right-hand side.', 'metrobank'),
            'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="widget-title"><h3>',
            'after_title'   => '</h3></div>',
        ));
    }
    register_sidebar(array(
        'name'          => esc_html__('Blog Listing', 'metrobank'),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__('Widgets in this area will be shown on the right-hand side.', 'metrobank'),
        'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title"><h3>',
        'after_title'   => '</h3></div>',
    ));
    if (!is_object(metrobank_WSH())) {
        return;
    }

    $sidebars = metrobank_set($theme_options, 'custom_sidebar_name');

    foreach (array_filter((array) $sidebars) as $sidebar) {
        if (metrobank_set($sidebar, 'topcopy')) {
            continue;
        }

        $name = $sidebar;
        if (!$name) {
            continue;
        }
        $slug = str_replace(' ', '_', $name);

        register_sidebar(array(
            'name'          => $name,
            'id'            => sanitize_title($slug),
            'before_widget' => '<div id="%1$s" class="%2$s widget single-sidebar">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title"><h3>',
            'after_title'   => '</h3></div>',
        ));
    }

    update_option('wp_registered_sidebars', $wp_registered_sidebars);
}

add_action('widgets_init', 'metrobank_widgets_init');

/*---------- Sidebar settings ends ----------*/

/*---------- Gutenberg settings ----------*/

function metrobank_gutenberg_editor_palette_styles() {
    add_theme_support('editor-color-palette', array(
        array(
            'name' => esc_html__('Strong Yellow', 'metrobank'),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__('Strong White', 'metrobank'),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
        array(
            'name' => esc_html__('Light Black', 'metrobank'),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__('Very Light Gray', 'metrobank'),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__('Very Dark Black', 'metrobank'),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ));

    add_theme_support('editor-font-sizes', array(
        array(
            'name' => esc_html__('Small', 'metrobank'),
            'size' => 10,
            'slug' => 'small',
        ),
        array(
            'name' => esc_html__('Normal', 'metrobank'),
            'size' => 15,
            'slug' => 'normal',
        ),
        array(
            'name' => esc_html__('Large', 'metrobank'),
            'size' => 24,
            'slug' => 'large',
        ),
        array(
            'name' => esc_html__('Huge', 'metrobank'),
            'size' => 36,
            'slug' => 'huge',
        ),
    ));
}

add_action('after_setup_theme', 'metrobank_gutenberg_editor_palette_styles');

/*---------- Gutenberg settings ends ----------*/
