<?php
/**
 * بارگذاری استایل و اسکریپت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_enqueue_assets() {
    $version = time(); // دور زدن کش

    // 1. فایل Design Tokens
    wp_enqueue_style(
        'pakpajoh-tokens',
        get_template_directory_uri() . '/assets/css/tokens.css',
        array(),
        $version
    );

    // 2. فایل style.css (هدر قالب)
    wp_enqueue_style(
        'pakpajoh-style',
        get_stylesheet_uri(),
        array( 'pakpajoh-tokens' ),
        $version
    );

    // 3. فایل app.css (به جای main.css)
    wp_enqueue_style(
        'pakpajoh-app',
        get_template_directory_uri() . '/assets/css/app.css',
        array( 'pakpajoh-style' ),
        $version
    );

    // 4. اسکریپت اصلی
    wp_enqueue_script(
        'pakpajoh-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );