<?php
/**
 * PakPajoh Theme functions
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'PAKPAJOH_VERSION', '2.0.0' );
define( 'PAKPAJOH_DIR', get_template_directory() );
define( 'PAKPAJOH_URI', get_template_directory_uri() );

// ثبت منوها
function pakpajoh_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'منوی اصلی', 'pakpajoh' ),
        'footer'  => __( 'منوی فوتر', 'pakpajoh' ),
    ) );
}
add_action( 'after_setup_theme', 'pakpajoh_register_menus' );

// پشتیبانی‌ها
function pakpajoh_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'pakpajoh_theme_support' );

// بارگذاری استایل و اسکریپت
function pakpajoh_enqueue_assets() {
    $version = PAKPAJOH_VERSION;
    wp_enqueue_style( 'pakpajoh-font', 'https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css', array(), '1.0' );
    wp_enqueue_style( 'pakpajoh-style', get_stylesheet_uri(), array( 'pakpajoh-font' ), $version );
    wp_enqueue_script( 'pakpajoh-app', PAKPAJOH_URI . '/assets/js/app.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );

// CPTs
function pakpajoh_register_cpts() {
    register_post_type( 'pp_service', array(
        'labels' => array( 'name' => 'خدمات', 'singular_name' => 'خدمت' ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-admin-tools', 'menu_position' => 20,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'rewrite' => array( 'slug' => 'services' ), 'show_in_rest' => true,
    ) );
    register_post_type( 'pp_equipment', array(
        'labels' => array( 'name' => 'ماشین‌آلات', 'singular_name' => 'دستگاه' ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-hammer', 'menu_position' => 21,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'rewrite' => array( 'slug' => 'equipment' ), 'show_in_rest' => true,
    ) );
}
add_action( 'init', 'pakpajoh_register_cpts' );

function pakpajoh_flush_rewrites() { pakpajoh_register_cpts(); flush_rewrite_rules(); }
add_action( 'after_switch_theme', 'pakpajoh_flush_rewrites' );

// اعداد فارسی
function pakpajoh_persian_numbers( $content ) {
    $en = array('0','1','2','3','4','5','6','7','8','9');
    $fa = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    return str_replace( $en, $fa, $content );
}
add_filter( 'the_content', 'pakpajoh_persian_numbers' );
add_filter( 'the_title', 'pakpajoh_persian_numbers' );
add_filter( 'get_the_excerpt', 'pakpajoh_persian_numbers' );

// پردازش فرم تماس (امن)
function pakpajoh_handle_contact_form() {
    if ( ! isset( $_POST['pakpajoh_nonce'] ) || ! wp_verify_nonce( $_POST['pakpajoh_nonce'], 'pakpajoh_contact_nonce' ) ) {
        wp_die( 'خطای امنیتی.' );
    }
    
    $name = sanitize_text_field( $_POST['name'] );
    $phone = sanitize_text_field( $_POST['phone'] );
    $message = sanitize_textarea_field( $_POST['message'] );
    
    if ( empty( $name ) || empty( $phone ) || empty( $message ) ) {
        wp_redirect( add_query_arg( 'form_status', 'error', wp_get_referer() ) );
        exit;
    }
    
    $to = get_option( 'admin_email' );
    $subject = 'درخواست جدید از سایت پاک‌پژوه';
    $body = "نام: $name\nشماره تماس: $phone\nتوضیحات:\n$message";
    $headers = array( 'Content-Type: text/plain; charset=UTF-8' );
    
    wp_mail( $to, $subject, $body, $headers );
    
    wp_redirect( add_query_arg( 'form_status', 'success', wp_get_referer() ) );
    exit;
}
add_action( 'admin_post_pakpajoh_contact_form', 'pakpajoh_handle_contact_form' );
add_action( 'admin_post_nopriv_pakpajoh_contact_form', 'pakpajoh_handle_contact_form' );

require_once PAKPAJOH_DIR . '/inc/rank-math.php';
require_once PAKPAJOH_DIR . '/inc/seo.php';
require_once PAKPAJOH_DIR . '/inc/security.php';
require_once PAKPAJOH_DIR . '/inc/performance.php';

// CPT نمونه‌کارها
function pakpajoh_register_portfolio_cpt() {
    register_post_type( 'pp_portfolio', array(
        'labels' => array( 'name' => 'نمونه‌کارها', 'singular_name' => 'نمونه‌کار' ),
        'public' => true, 'has_archive' => false, 'menu_icon' => 'dashicons-portfolio', 'menu_position' => 22,
        'supports' => array( 'title', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'portfolio' ), 'show_in_rest' => true,
    ) );
}
add_action( 'init', 'pakpajoh_register_portfolio_cpt' );

// CPT نظرات مشتریان
function pakpajoh_register_testimonial_cpt() {
    register_post_type( 'pp_testimonial', array(
        'labels' => array( 'name' => 'نظرات مشتریان', 'singular_name' => 'نظر' ),
        'public' => false, 'show_ui' => true, 'menu_icon' => 'dashicons-format-quote', 'menu_position' => 23,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    ) );
}
add_action( 'init', 'pakpajoh_register_testimonial_cpt' );

