<?php
/**
 * بهینه‌سازی امنیت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// جلوگیری از دسترسی به فایل‌های حساس
function pakpajoh_prevent_direct_access() {
    if ( ! defined( 'ABSPATH' ) ) { exit; }
}

// حذف نسخه وردپرس از هدر
add_filter( 'the_generator', '__return_empty_string' );

// جلوگیری از نمایش خطاها در محیط تولید
if ( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG ) {
    error_reporting( 0 );
    @ini_set( 'display_errors', 0 );
}

// محدود کردن ورود به پیشخوان برای کاربران غیرمجاز (اختیاری)
function pakpajoh_restrict_admin_access() {
    if ( ! current_user_can( 'manage_options' ) && ! wp_doing_ajax() ) {
        wp_redirect( home_url() );
        exit;
    }
}
// add_action( 'admin_init', 'pakpajoh_restrict_admin_access' );

// غیرفعال کردن ویرایشگر فایل در پیشخوان (امنیت بیشتر)
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
    define( 'DISALLOW_FILE_EDIT', true );
}