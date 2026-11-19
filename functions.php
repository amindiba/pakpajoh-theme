<?php
add_theme_support( 'title-tag' );
/**
 * PakPajoh Modern Theme functions
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'PAKPAJOH_VERSION', '2.0.1' );
define( 'PAKPAJOH_DIR', get_template_directory() );
define( 'PAKPAJOH_URI', get_template_directory_uri() );

require_once PAKPAJOH_DIR . '/inc/setup.php';
require_once PAKPAJOH_DIR . '/inc/enqueue.php';
require_once PAKPAJOH_DIR . '/inc/cpt.php';
require_once PAKPAJOH_DIR . '/inc/forms.php';
require_once PAKPAJOH_DIR . '/inc/seo.php';
require_once PAKPAJOH_DIR . '/inc/security.php';
require_once PAKPAJOH_DIR . '/inc/performance.php';
require_once PAKPAJOH_DIR . '/inc/portfolio-meta.php';

/**
 * بارگذاری اسکریپت رفرش خودکار
 */
add_action( 'wp_enqueue_scripts', 'pakpajoh_enqueue_auto_refresh' );
function pakpajoh_enqueue_auto_refresh() {
    wp_enqueue_script(
        'pakpajoh-auto-refresh',
        get_template_directory_uri() . '/assets/js/auto-refresh.js',
        array(),
        '1.0',
        true
    );
}
require_once PAKPAJOH_DIR . '/inc/admin-panel/init.php';

/**
 * متن سفارشی فوتر پنل مدیریت — با استایل و لینک
 */
add_filter( 'admin_footer_text', 'pakpajoh_custom_admin_footer_text' );
function pakpajoh_custom_admin_footer_text() {
    return '<span style="font-weight:800;font-size:13px;color:#1B5E4A;">مدیریت پاک‌پژوه</span> <span style="color:#888;">—</span> <span style="font-weight:700;color:#005E80;">توسعه اختصاصی توسط</span> <a href="https://a4site.com" target="_blank" rel="noopener" style="font-weight:800;color:#C9A96E;text-decoration:none;border-bottom:2px solid #C9A96E;">آچارسایت</a>';
}
require_once PAKPAJOH_DIR . '/inc/stats-tracker.php';
