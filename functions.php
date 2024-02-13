<?php
if (site_url() == "http://localhost/wordpress/home-page") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}

function asia_task_assets()
{
    wp_enqueue_style("localStyle", get_stylesheet_uri(), null, VERSION);
    wp_enqueue_style("bootstrap", get_template_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.min.css', null, VERSION);
    wp_enqueue_script("bootstrapjs", get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', array("jquery"), VERSION, true);
    wp_enqueue_script("localJs", get_template_directory_uri() . '/assets/js/main.js', array("jquery"), VERSION, true);
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Rubik:wght@500&family=Tilt+Warp&display=swap', array(), null );
}
add_action("wp_enqueue_scripts", "asia_task_assets");


function asia_task_bootraping(){
    register_nav_menu("topmenu", __("Top Menu", "asia_task"));
    $asia_task_custom_logo_defaults = array(
        "width" => "50",
        "height" => "50",
        'flex-height' => true,
        'flex-width'  => true
    );
    add_theme_support("custom-logo", $asia_task_custom_logo_defaults);
    $firstSrsTheme_custom_header_details = array(
        'header-text' => true,
        'defaull-text-color' => '#fff',
    );
    add_theme_support("custom-header", $firstSrsTheme_custom_header_details);
}
add_action("after_setup_theme", "asia_task_bootraping");

function custom_nav_menu_css_class($classes, $item, $args, $depth) {
    $classes[] = 'nav-item'; 

    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 4);
function custom_nav_menu_link_attributes($atts, $item, $args, $depth) {
    
    if ($args->theme_location == 'topmenu') {
        $atts['class'] = 'nav-link link text-primary display-4'; 
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 4);

function firstSrsTheme_about_page_template_banner()
{
    if (is_front_page()) {
        if (current_theme_supports("custom-header")) {
        ?>
            <style>
              .hero_area .background_image_wrapper {
                    background: url(<?php echo header_image() ?>);
                }

                .hero_area .background_image_wrapper {
                    color: #<?php echo get_header_textcolor(); ?> 
                    
                }
            </style>
<?php
        }
    }
}

add_action("wp_head", "firstSrsTheme_about_page_template_banner", 11);

?>