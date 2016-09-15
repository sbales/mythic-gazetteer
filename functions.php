<?php
if ( ! function_exists( 'mythicgazetteer_setup' ) ) :

function mythicgazetteer_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'mythic_gazetteer', get_template_directory() . '/languages' );
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

    register_sidebar( array(
        'name' => __( 'Blackwood Image Gallery', 'mythic_gazetteer' ),
        'id' => 'backwood_image_gallery_1',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'mythic_gazetteer' ),
        'id' => 'blog_sidebar',
        'before_widget' => '<h4 id="%1$s" class="widget %2$s">',
        'after_widget' => '</h4>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>'
    ) );

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
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'archive-feed', array(
        'title' => __( 'Archive Feed', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'Attachment_Post', array(
        'title' => __( 'Image Attachment Post', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'blackwood-page', array(
        'title' => __( 'Blackwood Page', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'commision-services', array(
        'title' => __( 'Commission Services', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'commision_services', array(
        'title' => __( 'Services', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'service_1_icon', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'service_1_icon', array(
        'label' => __( 'Service 1 Icon', 'mythic_gazetteer' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'commision_services'
    ) ) );

    $wp_customize->add_setting( 'service_1_title', array(
        'type' => 'theme_mod',
        'default' => 'Digital Design'
    ));

    $wp_customize->add_control( 'service_1_title', array(
        'label' => __( 'Service 1: Title', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'commision_services'
    ));

    $wp_customize->add_setting( 'service_1_description', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.'
    ));

    $wp_customize->add_control( 'service_1_description', array(
        'label' => __( 'Service 1: Description', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'commision_services'
    ));

    $wp_customize->add_setting( 'service_2_icon', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'service_2_icon', array(
        'label' => __( 'Serive 2: Icon', 'mythic_gazetteer' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'commision_services'
    ) ) );

    $wp_customize->add_setting( 'service_2_title', array(
        'type' => 'theme_mod',
        'default' => 'Digital Design'
    ));

    $wp_customize->add_control( 'service_2_title', array(
        'label' => __( 'Service 2: Title', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'commision_services'
    ));

    $wp_customize->add_setting( 'service_2_description', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.'
    ));

    $wp_customize->add_control( 'service_2_description', array(
        'label' => __( 'Service 2: Description', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'commision_services'
    ));

    $wp_customize->add_setting( 'service_3_icon', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'service_3_icon', array(
        'label' => __( 'Service 3: Icon', 'mythic_gazetteer' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'commision_services'
    ) ) );

    $wp_customize->add_setting( 'service_3_title', array(
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'service_3_title', array(
        'label' => __( 'Service 3: Title', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'commision_services'
    ));

    $wp_customize->add_setting( 'service_3_description', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.'
    ));

    $wp_customize->add_control( 'service_3_description', array(
        'label' => __( 'Service 3: Description', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'commision_services'
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_section( 'header_navbar_menu', array(
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'home-blog', array(
        'title' => __( 'BlogFeed', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'page', array(
        'title' => __( 'Page', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'Blog-post', array(
        'title' => __( 'Single Post', 'mythic_gazetteer' )
    ));

    $wp_customize->add_section( 'footer_info_bottom', array(
        'title' => __( 'Footer', 'mythic_gazetteer' )
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_facebook', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_facebook', array(
        'label' => __( 'Facebook link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_twitter', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_twitter', array(
        'label' => __( 'Twitter link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_google', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_google', array(
        'label' => __( 'Google+ link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_pinterest', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_pinterest', array(
        'label' => __( 'Pinterest link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_behance', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_behance', array(
        'label' => __( 'Behance link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_dribbble', array(
        'type' => 'theme_mod',
        'default' => '#'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_dribbble', array(
        'label' => __( 'Dribbble link', 'mythic_gazetteer' ),
        'type' => 'text',
        'section' => 'footer_info_bottom'
    ));

    $wp_customize->add_setting( 'blocks_footer_1_3_title', array(
        'type' => 'theme_mod',
        'default' => 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!'
    ));

    $wp_customize->add_control( 'blocks_footer_1_3_title', array(
        'label' => __( 'Right Side Text', 'mythic_gazetteer' ),
        'type' => 'textarea',
        'section' => 'footer_info_bottom'
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

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

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
/* Allow Shortcodes in Widgets */
if ( !is_admin() ) {
add_filter('widget_text', 'do_shortcode', 11);
}

?>