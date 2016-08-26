<?php
if ( ! function_exists( 'mythicgazetteer_setup' ) ) :

function mythicgazetteer_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'mythicgazetteer', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mythicgazetteer' ),
        'social'  => __( 'Social Links Menu', 'mythicgazetteer' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // mythicgazetteer_setup

add_action( 'after_setup_theme', 'mythicgazetteer_setup' );


if ( ! function_exists( 'mythicgazetteer_init' ) ) :

function mythicgazetteer_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // mythicgazetteer_setup

add_action( 'init', 'mythicgazetteer_init' );


if ( ! function_exists( 'mythicgazetteer_widgets_init' ) ) :

function mythicgazetteer_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'mythicgazetteer_widgets_init' );
endif;// mythicgazetteer_widgets_init



if ( ! function_exists( 'mythicgazetteer_customize_register' ) ) :

function mythicgazetteer_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    require_once "inc/blocks/wp_blocks_customizer_controls.php";

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythicgazetteer' )
    ));

    $wp_customize->add_section( 'home-blog', array(
        'title' => __( 'BlogFeed', 'mythicgazetteer' )
    ));

    $wp_customize->add_section( 'blocks_copyright_1', array(
        'title' => __( 'Footer', 'mythicgazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_copyright_1_text_left', array(
        'type' => 'theme_mod',
        'default' => '© Stevie Bales.'
    ));

    $wp_customize->add_control( 'blocks_copyright_1_text_left', array(
        'label' => __( 'Left Text', 'mythicgazetteer' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_1'
    ));

    $wp_customize->add_setting( 'blocks_copyright_1_text_right', array(
        'type' => 'theme_mod',
        'default' => 'Proudly made with <i class="fa fa-heart pomegranate"></i> Wordpress'
    ));

    $wp_customize->add_control( 'blocks_copyright_1_text_right', array(
        'label' => __( 'Right text', 'mythicgazetteer' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_1'
    ));

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythicgazetteer' )
    ));

    $wp_customize->add_section( 'Blog-post', array(
        'title' => __( 'SinglePost', 'mythicgazetteer' )
    ));

    $wp_customize->add_section( 'blocks_copyright_1', array(
        'title' => __( 'Footer', 'mythicgazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_copyright_1_text_left', array(
        'type' => 'theme_mod',
        'default' => '© Stevie Bales.'
    ));

    $wp_customize->add_control( 'blocks_copyright_1_text_left', array(
        'label' => __( 'Left Text', 'mythicgazetteer' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_1'
    ));

    $wp_customize->add_setting( 'blocks_copyright_1_text_right', array(
        'type' => 'theme_mod',
        'default' => 'Proudly made with <i class="fa fa-heart pomegranate"></i> Wordpress'
    ));

    $wp_customize->add_control( 'blocks_copyright_1_text_right', array(
        'label' => __( 'Right text', 'mythicgazetteer' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_1'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'mythicgazetteer_customize_register' );
endif;// mythicgazetteer_customize_register


if ( ! function_exists( 'mythicgazetteer_enqueue_scripts' ) ) :
    function mythicgazetteer_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'gatsnq' );
    wp_enqueue_script( 'gatsnq', 'https://use.typekit.net/gat5snq.js', false, null, false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://maps.google.com/maps/api/js?sensor=true', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'mythicgazetteer_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";

    /* Pinegrow generated Include Resources End */
?>