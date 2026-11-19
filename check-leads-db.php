<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );
if ( ! current_user_can( 'manage_options' ) ) { wp_die( 'دسترسی ندارید.' ); }

global $wpdb;
$table = $wpdb->prefix . 'pakpajoh_leads';
echo '<h2>بررسی جدول سرنخ‌ها</h2>';
echo '<p>نام جدول: ' . $table . '</p>';

$exists = $wpdb->get_var( "SHOW TABLES LIKE '$table'" );
if ( ! $exists ) {
    echo '<p style="color:red;">❌ جدول وجود ندارد!</p>';
    echo '<p><a href="' . admin_url( 'admin.php?page=pakpajoh-panel' ) . '">بازگشت</a></p>';
    @unlink( __FILE__ );
    return;
}

$count = $wpdb->get_var( "SELECT COUNT(*) FROM $table" );
echo '<p>تعداد رکوردها: ' . $count . '</p>';

$rows = $wpdb->get_results( "SELECT * FROM $table LIMIT 5" );
if ( $rows ) {
    echo '<table border="1" cellpadding="5"><tr>';
    foreach ( $rows[0] as $key => $val ) { echo '<th>' . $key . '</th>'; }
    echo '</tr>';
    foreach ( $rows as $row ) {
        echo '<tr>';
        foreach ( $row as $val ) { echo '<td>' . esc_html( $val ) . '</td>'; }
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p style="color:orange;">⚠️ جدول خالی است. هنوز سرنخی ثبت نشده است.</p>';
}

echo '<p><a href="' . admin_url( 'admin.php?page=pakpajoh-panel' ) . '">بازگشت</a></p>';
@unlink( __FILE__ );