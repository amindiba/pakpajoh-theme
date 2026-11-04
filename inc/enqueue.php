<?php
/**
 * Enqueue: بارگذاری استایل و اسکریپت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_enqueue_assets() {
    $v = PAKPAJOH_VERSION;
    // فونت محلی
    wp_enqueue_style( 'pp-font', PAKPAJOH_URI . '/assets/fonts/Vazirmatn/Vazirmatn-font-face.css', array(), $v );
    // استایل‌های ماژولار
    wp_enqueue_style( 'pp-reset', PAKPAJOH_URI . '/assets/css/base/reset.css', array( 'pp-font' ), $v );
    wp_enqueue_style( 'pp-variables', PAKPAJOH_URI . '/assets/css/base/variables.css', array( 'pp-reset' ), $v );
    wp_enqueue_style( 'pp-typography', PAKPAJOH_URI . '/assets/css/base/typography.css', array( 'pp-variables' ), $v );
    wp_enqueue_style( 'pp-header', PAKPAJOH_URI . '/assets/css/layout/header.css', array( 'pp-typography' ), $v );
    wp_enqueue_style( 'pp-sections', PAKPAJOH_URI . '/assets/css/layout/sections.css', array( 'pp-header' ), $v );
    wp_enqueue_style( 'pp-footer', PAKPAJOH_URI . '/assets/css/layout/footer.css', array( 'pp-sections' ), $v );
    wp_enqueue_style( 'pp-buttons', PAKPAJOH_URI . '/assets/css/components/buttons.css', array( 'pp-footer' ), $v );
    if ( is_front_page() ) {
        wp_enqueue_style( 'pp-home', PAKPAJOH_URI . '/assets/css/pages/home.css', array( 'pp-buttons' ), $v );
    }
    // اسکریپت
    wp_enqueue_script( 'pakpajoh-main', PAKPAJOH_URI . '/assets/js/app.js', array(), $v, true );
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );
