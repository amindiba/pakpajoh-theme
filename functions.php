<?php
/**
 * PakPajoh A4Site Theme — Bootstrap
 *
 * @package PakPajoh
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'PAKPAJOH_VERSION', '1.0.0' );
define( 'PAKPAJOH_DIR', get_template_directory() );
define( 'PAKPAJOH_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function pakpajoh_setup() {
    load_theme_textdomain( 'pakpajoh', PAKPAJOH_DIR . '/languages' );

    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-logo', array(
        'height'      => 64,
        'width'       => 64,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_editor_style( 'assets/css/theme.css' );

    register_nav_menus( array(
        'primary' => __( 'منوی اصلی', 'pakpajoh' ),
        'footer'  => __( 'منوی فوتر', 'pakpajoh' ),
    ) );
}
add_action( 'after_setup_theme', 'pakpajoh_setup' );

/**
 * Enqueue frontend assets.
 */
function pakpajoh_enqueue_assets() {
    wp_enqueue_style(
        'pakpajoh-theme',
        PAKPAJOH_URI . '/assets/css/theme.css',
        array(),
        PAKPAJOH_VERSION
    );

    wp_enqueue_script(
        'pakpajoh-theme',
        PAKPAJOH_URI . '/assets/js/theme.js',
        array(),
        PAKPAJOH_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function pakpajoh_enqueue_editor_assets() {
    wp_enqueue_style(
        'pakpajoh-editor',
        PAKPAJOH_URI . '/assets/css/theme.css',
        array(),
        PAKPAJOH_VERSION
    );
}
add_action( 'enqueue_block_editor_assets', 'pakpajoh_enqueue_editor_assets' );

/**
 * Register block pattern categories.
 */
function pakpajoh_register_pattern_categories() {
    register_block_pattern_category( 'pakpajoh', array(
        'label' => __( 'پاک‌پژوه', 'pakpajoh' ),
    ) );
}
add_action( 'init', 'pakpajoh_register_pattern_categories' );

/**
 * Disable emoji bloat (مطابق قانون ۶۲: ممنوعیت ایموجی).
 */
function pakpajoh_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'pakpajoh_disable_emojis' );

/**
 * Body classes for RTL & theme.
 */
function pakpajoh_body_classes( $classes ) {
    $classes[] = 'pp-theme';
    if ( is_rtl() ) {
        $classes[] = 'pp-rtl';
    }
    return $classes;
}
add_filter( 'body_class', 'pakpajoh_body_classes' );

/**
 * Include modular files.
 */
require_once PAKPAJOH_DIR . '/inc/setup.php';
require_once PAKPAJOH_DIR . '/inc/post-types.php';
require_once PAKPAJOH_DIR . '/inc/security.php';
require_once PAKPAJOH_DIR . '/inc/seo.php';
require_once PAKPAJOH_DIR . '/inc/one-time-setup.php';
