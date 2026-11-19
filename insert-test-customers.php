<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );
if ( ! current_user_can( 'manage_options' ) ) { wp_die( 'دسترسی ندارید.' ); }

global $wpdb;
$table = $wpdb->prefix . 'pakpajoh_customers';

$customers = array(
    array(
        'company_name' => 'مشتری نمونه ۱',
        'contact_name' => 'علی رضایی',
        'phone'        => '09121111111',
        'email'        => 'test1@example.com',
        'address'      => 'تهران، خیابان ولیعصر، پلاک ۱',
        'city'         => 'تهران',
        'industry'     => 'صنعتی',
        'status'       => 'active',
        'notes'        => 'مشتری تستی - فعال',
    ),
    array(
        'company_name' => 'مشتری نمونه ۲',
        'contact_name' => 'مریم احمدی',
        'phone'        => '09122222222',
        'email'        => 'test2@example.com',
        'address'      => 'اصفهان، خیابان چهارباغ، پلاک ۲',
        'city'         => 'اصفهان',
        'industry'     => 'تجاری',
        'status'       => 'active',
        'notes'        => 'مشتری تستی - فعال',
    ),
    array(
        'company_name' => 'مشتری نمونه ۳',
        'contact_name' => 'حسین کریمی',
        'phone'        => '09123333333',
        'email'        => 'test3@example.com',
        'address'      => 'شیراز، بلوار زند، پلاک ۳',
        'city'         => 'شیراز',
        'industry'     => 'اداری',
        'status'       => 'potential',
        'notes'        => 'مشتری بالقوه',
    ),
    array(
        'company_name' => 'مشتری نمونه ۴',
        'contact_name' => 'زهرا موسوی',
        'phone'        => '09124444444',
        'email'        => 'test4@example.com',
        'address'      => 'مشهد، بلوار وکیل‌آباد، پلاک ۴',
        'city'         => 'مشهد',
        'industry'     => 'بیمارستانی',
        'status'       => 'inactive',
        'notes'        => 'مشتری غیرفعال',
    ),
    array(
        'company_name' => 'مشتری نمونه ۵',
        'contact_name' => 'رضا نوری',
        'phone'        => '09125555555',
        'email'        => 'test5@example.com',
        'address'      => 'تبریز، خیابان امام، پلاک ۵',
        'city'         => 'تبریز',
        'industry'     => 'انبار',
        'status'       => 'active',
        'notes'        => 'مشتری تستی - فعال',
    ),
);

$count = 0;
foreach ( $customers as $customer ) {
    $exists = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM $table WHERE company_name = %s", $customer['company_name'] ) );
    if ( ! $exists ) {
        $wpdb->insert( $table, $customer );
        $count++;
    }
}

echo '<h2>نتیجه ثبت مشتریان تستی:</h2>';
echo '<p>تعداد مشتریان ثبت‌شده: ' . $count . '</p>';
echo '<p><a href="' . admin_url( 'admin.php?page=pakpajoh-customers' ) . '">مشاهده لیست مشتریان</a></p>';

@unlink( __FILE__ );