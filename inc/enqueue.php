<?php
/**
 * بارگذاری استایل و اسکریپت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_enqueue_assets() {
    $version = time();

    // فونت وزیرمتن (اگر فایل آن را ندارید، از CDN استفاده کنید یا فایل را در پوشه fonts بگذارید)
    wp_enqueue_style( 'pakpajoh-font', 'https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css', array(), '1.0' );

    wp_enqueue_style( 'pakpajoh-app', get_template_directory_uri() . '/assets/css/app.css', array( 'pakpajoh-font' ), $version );
    
    wp_enqueue_script( 'pakpajoh-app-js', get_template_directory_uri() . '/assets/js/app.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_assets' );