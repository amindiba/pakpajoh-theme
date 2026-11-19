<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );
if ( ! current_user_can( 'manage_options' ) ) { wp_die( 'دسترسی ندارید.' ); }

global $wpdb;
$table = $wpdb->prefix . 'pakpajoh_leads';

$leads = array(
    array( 'name' => 'علی محمدی', 'phone' => '09122222151', 'email' => 'ali@example.com', 'service' => 'نظافت صنعتی', 'status' => 'new', 'source' => 'site', 'message' => 'درخواست تستی' ),
    array( 'name' => 'مریم احمدی', 'phone' => '09123333452', 'email' => 'maryam@example.com', 'service' => 'نظافت تجاری', 'status' => 'contacted', 'source' => 'site', 'message' => 'درخواست تستی' ),
    array( 'name' => 'حسین کریمی', 'phone' => '09124444563', 'email' => 'hossein@example.com', 'service' => 'خشک‌شویی', 'status' => 'qualified', 'source' => 'site', 'message' => 'درخواست تستی' ),
    array( 'name' => 'زهرا موسوی', 'phone' => '09125555674', 'email' => 'zahra@example.com', 'service' => 'نظافت اداری', 'status' => 'new', 'source' => 'site', 'message' => 'درخواست تستی' ),
    array( 'name' => 'رضا نوری', 'phone' => '09126666785', 'email' => 'reza@example.com', 'service' => 'لجستیک', 'status' => 'won', 'source' => 'site', 'message' => 'درخواست تستی' ),
);

$count = 0;
foreach ( $leads as $lead ) {
    $exists = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM $table WHERE phone = %s", $lead['phone'] ) );
    if ( ! $exists ) {
        $wpdb->insert( $table, $lead );
        $count++;
    }
}

echo '<h2>نتیجه ثبت سرنخ‌های تستی:</h2>';
echo '<p>تعداد سرنخ‌های ثبت‌شده: ' . $count . '</p>';
echo '<p><a href="' . admin_url( 'admin.php?page=pakpajoh-leads' ) . '">مشاهده لیست سرنخ‌ها</a></p>';

@unlink( __FILE__ );