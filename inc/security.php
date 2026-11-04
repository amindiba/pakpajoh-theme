<?php
/**
 * Security: تنظیمات امنیتی
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// حذف خطای ورود (جلوگیری از افشای اطلاعات)
add_filter( 'login_errors', function() { return 'اطلاعات ورود نادرست است.'; } );

// غیرفعال‌سازی ویرایشگر فایل
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) { define( 'DISALLOW_FILE_EDIT', true ); }

// جلوگیری از دسترسی به REST API برای غیرمجازها
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) { return $result; }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'دسترسی ندارید.', array( 'status' => 401 ) );
    }
    return $result;
} );

// حذف هدر X-Powered-By
add_action( 'init', function() {
    header_remove( 'X-Powered-By' );
} );

// محدودیت تلاش ورود
function pakpajoh_limit_login_attempts( $user, $username, $password ) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $attempts = get_transient( 'login_attempts_' . $ip );
    if ( $attempts && $attempts >= 5 ) {
        return new WP_Error( 'too_many_attempts', 'تلاش‌های ناموفق زیاد. لطفاً ۱۵ دقیقه صبر کنید.' );
    }
    if ( is_wp_error( $user ) ) {
        set_transient( 'login_attempts_' . $ip, ( $attempts ? $attempts + 1 : 1 ), 900 );
    } else {
        delete_transient( 'login_attempts_' . $ip );
    }
    return $user;
}
add_filter( 'authenticate', 'pakpajoh_limit_login_attempts', 30, 3 );
