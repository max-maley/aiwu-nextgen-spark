<?php
/**
 * AIWU Theme functions and definitions
 *
 * @package AIWU_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'AIWU_THEME_VERSION', '1.0.0' );
define( 'AIWU_THEME_DIR', get_template_directory() );
define( 'AIWU_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function aiwu_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'aiwu-theme' ),
        'footer'  => esc_html__( 'Footer Menu', 'aiwu-theme' ),
    ) );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 56,
        'width'       => 44,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action( 'after_setup_theme', 'aiwu_theme_setup' );

/**
 * Enqueue scripts and styles
 */
function aiwu_theme_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'aiwu-google-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'aiwu-main-style',
        AIWU_THEME_URI . '/assets/css/main.css',
        array(),
        AIWU_THEME_VERSION
    );

    // Theme stylesheet (required by WordPress)
    wp_enqueue_style(
        'aiwu-theme-style',
        get_stylesheet_uri(),
        array( 'aiwu-main-style' ),
        AIWU_THEME_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'aiwu-main-script',
        AIWU_THEME_URI . '/assets/js/main.js',
        array(),
        AIWU_THEME_VERSION,
        true
    );

    // Pass data to JavaScript
    wp_localize_script( 'aiwu-main-script', 'aiwuData', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'aiwu_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'aiwu_theme_scripts' );

/**
 * Get AIWU Logo SVG
 */
function aiwu_get_logo_svg( $size = 'md' ) {
    $sizes = array(
        'sm' => array( 'height' => 28, 'width' => 22 ),
        'md' => array( 'height' => 40, 'width' => 31 ),
        'lg' => array( 'height' => 56, 'width' => 44 ),
    );

    $s = isset( $sizes[ $size ] ) ? $sizes[ $size ] : $sizes['md'];

    return '<svg viewBox="0 0 44 56" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: ' . $s['height'] . 'px; width: ' . $s['width'] . 'px;">
        <rect x="0" y="24" width="12" height="32" rx="6" fill="#20808d"/>
        <rect x="16" y="0" width="12" height="56" rx="6" fill="#FF5C35"/>
        <rect x="32" y="12" width="12" height="44" rx="6" fill="#f59e0b"/>
    </svg>';
}

/**
 * Custom Walker for primary navigation
 */
class AIWU_Nav_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = join( ' ', array_filter( $classes ) );

        $output .= '<a href="' . esc_url( $item->url ) . '" class="nav-link ' . esc_attr( $class_names ) . '">';
        $output .= esc_html( $item->title );
        $output .= '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        // No closing tag needed
    }
}

/**
 * Register widget areas
 */
function aiwu_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area', 'aiwu-theme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'aiwu-theme' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'aiwu_theme_widgets_init' );

/**
 * Theme Customizer additions
 */
function aiwu_theme_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'aiwu_hero_section', array(
        'title'    => __( 'Hero Section', 'aiwu-theme' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'aiwu_hero_title', array(
        'default'           => 'WordPress automations you\'ll actually use',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'aiwu_hero_title', array(
        'label'   => __( 'Hero Title', 'aiwu-theme' ),
        'section' => 'aiwu_hero_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'aiwu_hero_subtitle', array(
        'default'           => 'Connect AI to your WordPress and build workflows from customer support to content—without code.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( 'aiwu_hero_subtitle', array(
        'label'   => __( 'Hero Subtitle', 'aiwu-theme' ),
        'section' => 'aiwu_hero_section',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'aiwu_youtube_video_id', array(
        'default'           => 'fl-sqUYyZ70',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'aiwu_youtube_video_id', array(
        'label'   => __( 'YouTube Video ID', 'aiwu-theme' ),
        'section' => 'aiwu_hero_section',
        'type'    => 'text',
    ) );

    // CTA Section
    $wp_customize->add_section( 'aiwu_cta_section', array(
        'title'    => __( 'CTA Buttons', 'aiwu-theme' ),
        'priority' => 35,
    ) );

    $wp_customize->add_setting( 'aiwu_cta_primary_text', array(
        'default'           => 'Get Started Free',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'aiwu_cta_primary_text', array(
        'label'   => __( 'Primary Button Text', 'aiwu-theme' ),
        'section' => 'aiwu_cta_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'aiwu_cta_primary_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'aiwu_cta_primary_url', array(
        'label'   => __( 'Primary Button URL', 'aiwu-theme' ),
        'section' => 'aiwu_cta_section',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( 'aiwu_cta_secondary_text', array(
        'default'           => 'View Documentation',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'aiwu_cta_secondary_text', array(
        'label'   => __( 'Secondary Button Text', 'aiwu-theme' ),
        'section' => 'aiwu_cta_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'aiwu_cta_secondary_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'aiwu_cta_secondary_url', array(
        'label'   => __( 'Secondary Button URL', 'aiwu-theme' ),
        'section' => 'aiwu_cta_section',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'aiwu_theme_customize_register' );

/**
 * Add preconnect for Google Fonts
 */
function aiwu_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => true,
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => true,
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'aiwu_resource_hints', 10, 2 );
