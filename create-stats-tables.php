<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );
if ( ! current_user_can( 'manage_options' ) ) { wp_die( 'دسترسی ندارید.' ); }

global $wpdb;
$charset_collate = $wpdb->get_charset_collate();

// جدول بازدید صفحات
$table_views = $wpdb->prefix . 'pakpajoh_page_views';
$sql_views = "CREATE TABLE IF NOT EXISTS $table_views (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    page_url varchar(255) NOT NULL,
    visit_count bigint(20) unsigned DEFAULT 0,
    last_visited datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY page_url (page_url)
) $charset_collate;";

// جدول کلیک دکمه‌ها
$table_clicks = $wpdb->prefix . 'pakpajoh_button_clicks';
$sql_clicks = "CREATE TABLE IF NOT EXISTS $table_clicks (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    page_url varchar(255) NOT NULL,
    button_id varchar(100) NOT NULL,
    click_count bigint(20) unsigned DEFAULT 0,
    last_clicked datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY page_button (page_url, button_id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql_views );
dbDelta( $sql_clicks );

$views_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_views'") === $table_views;
$clicks_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_clicks'") === $table_clicks;

echo '<h2>نتیجه ساخت جداول آمار:</h2>';
echo '<p>جدول بازدید صفحات: ' . ( $views_exists ? '✅ ساخته شد' : '❌ خطا' ) . '</p>';
echo '<p>جدول کلیک دکمه‌ها: ' . ( $clicks_exists ? '✅ ساخته شد' : '❌ خطا' ) . '</p>';
echo '<p><a href="' . admin_url( 'admin.php?page=pakpajoh-panel' ) . '">بازگشت</a></p>';

@unlink( __FILE__ );