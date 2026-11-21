<?php
/**
 * Enqueue — PakPajoh Theme (v4.0) - تعریف کامل فونت‌های Vazirmatn
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );
function pakpajoh_enqueue_assets() {
    $uri = get_template_directory_uri();
    $ver = wp_get_theme()->get( 'Version' );

    // JS اسکرول هدر
    wp_enqueue_script( 'pp-header-scroll', $uri . '/assets/js/header-scroll.js', array(), '1.0', true );
    wp_enqueue_script( 'pp-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '1.0', true );

    // CSS پایه (همه صفحات)
    wp_enqueue_style( 'pp-variables', $uri . '/assets/css/base/variables.css', array(), $ver );
    wp_enqueue_style( 'pp-reset', $uri . '/assets/css/base/reset.css', array( 'pp-variables' ), $ver );
    wp_enqueue_style( 'pp-header', $uri . '/assets/css/layout/header.css', array( 'pp-reset' ), filemtime( get_template_directory() . '/assets/css/layout/header.css' ) );
    wp_enqueue_script( 'pp-mobile-menu', $uri . '/assets/js/mobile-menu.js', array(), filemtime( get_template_directory() . '/assets/js/mobile-menu.js' ), true );

    // CSS صفحه اصلی (گلوبال)
    wp_enqueue_style( 'pp-home', $uri . '/assets/css/pages/home.css', array( 'pp-header' ), $ver );

    if ( is_page( 'activities' ) || is_page_template( 'page-activities.php' ) ) {
        wp_enqueue_style(
            'pp-activities-page',
            $uri . '/assets/css/pages/activities.css',
            array( 'pp-home' ),
            filemtime( get_template_directory() . '/assets/css/pages/activities.css' )
        );
    }

    if ( is_page( 'process' ) || is_page_template( 'page-process.php' ) ) {
        wp_enqueue_style(
            'pp-process-page',
            $uri . '/assets/css/pages/process.css',
            array( 'pp-home' ),
            filemtime( get_template_directory() . '/assets/css/pages/process.css' )
        );
    }

    if ( is_page( 'about' ) || is_page_template( 'page-about.php' ) ) {
        wp_enqueue_style(
            'pp-about-page',
            $uri . '/assets/css/pages/about.css',
            array( 'pp-home' ),
            filemtime( get_template_directory() . '/assets/css/pages/about.css' )
        );
    }
}

/**
 * تعریف فونت‌های Vazirmatn (لوکال، بدون ارتباط خارجی)
 */
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_fonts', 5 );
function pakpajoh_enqueue_fonts() {
    $font_uri = get_template_directory_uri() . '/assets/fonts';
    $inline_css = "
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-Thin.woff2') format('woff2'); font-weight: 100; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-ExtraLight.woff2') format('woff2'); font-weight: 200; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-Light.woff2') format('woff2'); font-weight: 300; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-Regular.woff2') format('woff2'); font-weight: 400; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-Medium.woff2') format('woff2'); font-weight: 500; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-SemiBold.woff2') format('woff2'); font-weight: 600; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-Bold.woff2') format('woff2'); font-weight: 700; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-ExtraBold.woff2') format('woff2'); font-weight: 800; font-style: normal; font-display: swap; }
        @font-face { font-family: 'Vazirmatn'; src: url('{$font_uri}/Vazirmatn-Black.woff2') format('woff2'); font-weight: 900; font-style: normal; font-display: swap; }
    ";
    wp_register_style( 'pp-font', false );
    wp_enqueue_style( 'pp-font' );
    wp_add_inline_style( 'pp-font', $inline_css );
}


