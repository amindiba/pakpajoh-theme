<?php
/**
 * PakPajoh Modern Theme functions
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'PAKPAJOH_VERSION', '1.0.0' );
define( 'PAKPAJOH_DIR', get_template_directory() );
define( 'PAKPAJOH_URI', get_template_directory_uri() );

// پشتیبانی‌ها
function pakpajoh_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'pakpajoh_theme_support' );

// ثبت منوها
function pakpajoh_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'منوی اصلی', 'pakpajoh' ),
        'footer'  => __( 'منوی فوتر', 'pakpajoh' ),
    ) );
}
add_action( 'after_setup_theme', 'pakpajoh_register_menus' );

// بارگذاری استایل و اسکریپت
function pakpajoh_enqueue_assets() {
    wp_enqueue_style( 'pakpajoh-style', get_stylesheet_uri(), array(), PAKPAJOH_VERSION );
    wp_enqueue_style( 'pakpajoh-main', PAKPAJOH_URI . '/assets/css/main.css', array( 'pakpajoh-style' ), PAKPAJOH_VERSION );
    wp_enqueue_script( 'pakpajoh-main', PAKPAJOH_URI . '/assets/js/app.js', array(), PAKPAJOH_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );

// رفع مشکل فونت فارسی
function pakpajoh_font_fix() {
    echo '<link rel="preconnect" href="https://cdn.jsdelivr.net">';
    echo '<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">';
}
add_action( 'wp_head', 'pakpajoh_font_fix' );
