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
    $sql_leads = "CREATE TABLE $table_leads (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        phone varchar(50) NOT NULL,
        email varchar(255) DEFAULT '',
        service varchar(100) DEFAULT '',
        organization varchar(255) DEFAULT '',
        contact_position varchar(255) DEFAULT '',
        address text,
        site_area varchar(50) DEFAULT '',
        national_id varchar(10) DEFAULT '',
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
    $sql_customers = "CREATE TABLE $table_customers (
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
    $sql_notes = "CREATE TABLE $table_notes (
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

function pakpajoh_maybe_upgrade_leads_schema() {
    if ( '2' === (string) get_option( 'pakpajoh_leads_schema_version', '0' ) ) {
        return;
    }

    pakpajoh_create_tables();

    global $wpdb;
    $table = $wpdb->prefix . 'pakpajoh_leads';
    $columns = $wpdb->get_col( "SHOW COLUMNS FROM `$table`" );
    $required_columns = array( 'organization', 'contact_position', 'address', 'site_area', 'national_id' );

    if ( empty( $wpdb->last_error ) && is_array( $columns ) && empty( array_diff( $required_columns, $columns ) ) ) {
        update_option( 'pakpajoh_leads_schema_version', '2', false );
        return;
    }

    error_log( 'PakPajoh: lead table schema upgrade did not complete.' );
}
add_action( 'init', 'pakpajoh_maybe_upgrade_leads_schema', 1 );

// اجرای دستی از پنل (برای اطمینان)
if ( isset( $_GET['pakpajoh_install'] ) && current_user_can( 'manage_options' ) ) {
    pakpajoh_create_tables();
    wp_die( 'جداول با موفقیت ساخته شدند. <a href="' . admin_url( 'admin.php?page=pakpajoh-panel' ) . '">بازگشت</a>' );
}