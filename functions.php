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
    wp_enqueue_style("swiperCss", get_template_directory_uri() . '/assets/swiper/package/swiper-bundle.min.css', null, VERSION);
    wp_enqueue_script("bootstrapjs", get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js', array("jquery"), VERSION, true);

    wp_enqueue_script("swiperJs", get_template_directory_uri() . '/assets/swiper/package/swiper-bundle.min.js', array("jquery"), VERSION, true);
    wp_enqueue_script("localJs", get_template_directory_uri() . '/assets/js/main.js', array("jquery", "swiperJs"), VERSION, true);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Rubik:wght@500&family=Tilt+Warp&display=swap', array(), null);
}
add_action("wp_enqueue_scripts", "asia_task_assets");


function asia_task_bootraping()
{
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

function custom_nav_menu_css_class($classes, $item, $args, $depth)
{
    $classes[] = 'nav-item';

    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 4);
function custom_nav_menu_link_attributes($atts, $item, $args, $depth)
{

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
function custom_team()
{
    register_post_type(
        "team",
        array(
            'labels' => array(
                'name' => ("Teams"),
                'singular_name' => ("Member"),
                'add_new' => ("Add new Member"),
                'add_new_item' => ("Add new Member"),
                'edit_item' => ("Edit Member"),
                'new_item' => ("New Member"),
                'view_item' => ("View Member"),
                'not_found' => ("Sorry, we couldn't find")
            ),
            "menu_icon" => "dashicons-products",
            "public" => true,
            "publicly_queryable" => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'team'),
            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        )

    );
};

add_action("init", "custom_team");
function custom_post()
{
    register_post_type(
        "custom posts",
        array(
            'labels' => array(
                'name' => ("Custom Posts"),
                'singular_name' => ("Custom Post"),
                'add_new' => ("Add new Custom Post"),
                'add_new_item' => ("Add new Custom Post"),
                'edit_item' => ("Edit Custom Post"),
                'new_item' => ("New Custom Post"),
                'view_item' => ("View Custom Post"),
                'not_found' => ("Sorry, we couldn't find")
            ),
            "menu_icon" => "dashicons-products",
            "public" => true,
            "publicly_queryable" => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'cs-post'),
            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        )

    );
};

add_action("init", "custom_post");

function asia_task_widget(){
    
    register_sidebar(
        array(
            'name' => __('Creation Section Left Photo', 'asia_task_widget'),
            'id' => 'creation-section-left-photo',
            'description' => __('Widget For Creation Section Left Photo ', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Creation Section Right Photo', 'asia_task_widget'),
            'id' => 'creation-section-right-photo',
            'description' => __('Widget For Creation Section Right Photo ', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Creation Section left description', 'asia_task_widget'),
            'id' => 'creation-section-left-description',
            'description' => __('Widget For Creation Section left description ', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Common Game Section Left', 'asia_task_widget'),
            'id' => 'common-game-section-left',
            'description' => __('Widget For Common Game Section leftside ', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Common Game Section Right', 'asia_task_widget'),
            'id' => 'common-game-section-right',
            'description' => __('Widget For Common Game Section rightside ', 'asia_task_widget'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Tab Youtube', 'asia_task_widget'),
            'id' => 'tab-youtube',
            'description' => __('Widget For Tab Youtube', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Tab Reddit', 'asia_task_widget'),
            'id' => 'tab-reddit',
            'description' => __('Widget For Tab Reddit', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Tab Steam', 'asia_task_widget'),
            'id' => 'tab-steam',
            'description' => __('Widget For Tab Steam', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Blockbuster image', 'asia_task_widget'),
            'id' => 'blockbuster-image',
            'description' => __('Widget For Blockbuster image', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Blockbuster subtitle', 'asia_task_widget'),
            'id' => 'blockbuster-subtitle',
            'description' => __('Widget For Blockbuster subtitle', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Blockbuster title', 'asia_task_widget'),
            'id' => 'blockbuster-title',
            'description' => __('Widget For Blockbuster title', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    register_sidebar(
        array(
            'name' => __('Blockbuster des', 'asia_task_widget'),
            'id' => 'blockbuster-des',
            'description' => __('Widget For Blockbuster des', 'asia_task_widget'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
}

add_action("widgets_init", "asia_task_widget");

?>