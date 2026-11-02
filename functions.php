<?php
/**
 * PakPajoh Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'PAKPAJOH_VERSION', '1.2.0' );
define( 'PAKPAJOH_DIR', get_template_directory() );
define( 'PAKPAJOH_URI', get_template_directory_uri() );

// ثبت منوها به صورت مستقیم و بدون واسطه
function pakpajoh_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'منوی اصلی', 'pakpajoh' ),
        'footer'  => __( 'منوی فوتر', 'pakpajoh' ),
    ) );
}
add_action( 'after_setup_theme', 'pakpajoh_register_menus' );

// پشتیبانی از لوگو
function pakpajoh_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'pakpajoh_theme_support' );

// بارگذاری فایل‌های inc (فقط در صورت وجود)
if ( file_exists( PAKPAJOH_DIR . '/inc/theme-setup.php' ) ) { require_once PAKPAJOH_DIR . '/inc/theme-setup.php'; }
if ( file_exists( PAKPAJOH_DIR . '/inc/enqueue.php' ) ) { require_once PAKPAJOH_DIR . '/inc/enqueue.php'; }
if ( file_exists( PAKPAJOH_DIR . '/inc/customizer.php' ) ) { require_once PAKPAJOH_DIR . '/inc/customizer.php'; }
if ( file_exists( PAKPAJOH_DIR . '/inc/cpt.php' ) ) { require_once PAKPAJOH_DIR . '/inc/cpt.php'; }

function pakpajoh_body_classes( $classes ) {
    $classes[] = 'rtl';
    return $classes;
}
add_filter( 'body_class', 'pakpajoh_body_classes' );