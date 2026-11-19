<?php
/**
 * ساخت جداول دیتابیس پنل مدیریت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_create_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    // جدول سرنخ‌ها
    $table_leads = $wpdb->prefix . 'pakpajoh_leads';
    $sql_leads = "CREATE TABLE IF NOT EXISTS $table_leads (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        phone varchar(50) NOT NULL,
        email varchar(255) DEFAULT '',
        service varchar(100) DEFAULT '',
        message text,
        status varchar(50) DEFAULT 'new',
        source varchar(100) DEFAULT 'site',
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY status (status),
        KEY created_at (created_at)
    ) $charset_collate;";

    // جدول مشتریان
    $table_customers = $wpdb->prefix . 'pakpajoh_customers';
    $sql_customers = "CREATE TABLE IF NOT EXISTS $table_customers (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        company_name varchar(255) NOT NULL,
        contact_name varchar(255) DEFAULT '',
        phone varchar(50) DEFAULT '',
        email varchar(255) DEFAULT '',
        address text,
        city varchar(100) DEFAULT '',
        industry varchar(100) DEFAULT '',
        status varchar(50) DEFAULT 'active',
        notes text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY status (status)
    ) $charset_collate;";

    // جدول یادداشت‌های CRM
    $table_notes = $wpdb->prefix . 'pakpajoh_crm_notes';
    $sql_notes = "CREATE TABLE IF NOT EXISTS $table_notes (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        customer_id bigint(20) unsigned NOT NULL,
        note_type varchar(50) DEFAULT 'note',
        content text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY customer_id (customer_id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql_leads );
    dbDelta( $sql_customers );
    dbDelta( $sql_notes );
}

// اجرای یک‌باره هنگام فعال‌سازی
add_action( 'after_switch_theme', 'pakpajoh_create_tables' );

// اجرای دستی از پنل (برای اطمینان)
if ( isset( $_GET['pakpajoh_install'] ) && current_user_can( 'manage_options' ) ) {
    pakpajoh_create_tables();
    wp_die( 'جداول با موفقیت ساخته شدند. <a href="' . admin_url( 'admin.php?page=pakpajoh-panel' ) . '">بازگشت</a>' );
}