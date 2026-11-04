<?php
/**
 * Performance: بهینه‌سازی سرعت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// حذف ایموجی‌های وردپرس
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

// حذف اسکریپت‌های بلاک ادیتور در فرانت‌اند
function pakpajoh_remove_block_scripts() {
    if ( ! is_admin() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'classic-theme-styles' );
        wp_dequeue_style( 'global-styles' );
    }
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_remove_block_scripts', 100 );

// حذف لینک‌های اضافی از هدر
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

// حذف query string از فایل‌های استاتیک
function pakpajoh_remove_query_strings( $src ) {
    if ( strpos( $src, 'ver=' ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'script_loader_src', 'pakpajoh_remove_query_strings', 15 );
add_filter( 'style_loader_src', 'pakpajoh_remove_query_strings', 15 );

// Lazy Loading برای تصاویر
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

// کاهش تعداد بازبینی‌ها (Revisions)
if ( ! defined( 'WP_POST_REVISIONS' ) ) { define( 'WP_POST_REVISIONS', 5 ); }
