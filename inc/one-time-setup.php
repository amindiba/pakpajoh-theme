<?php
/**
 * نصب‌کننده یک‌باره — نام سایت، شعار، صفحه اصلی، صفحه وبلاگ
 * آدرس اجرا: https://pakpajoh.ir/?pakpajoh_setup=1
 *
 * @package PakPajoh
 */

if ( ! isset( $_GET['pakpajoh_setup'] ) || '1' !== $_GET['pakpajoh_setup'] ) {
    return;
}

if ( ! current_user_can( 'manage_options' ) ) {
    wp_die( 'دسترسی ندارید.' );
}

// 1) نام سایت و شعار
update_option( 'blogname', 'پاک‌پژوه' );
update_option( 'blogdescription', 'ارائه دهنده خدمات تخصصی نظافت صنعتی' );
echo '<p>✅ نام سایت و شعار تنظیم شد.</p>';

// 2) صفحه اصلی
$front_page_id = get_option( 'page_on_front' );
if ( ! $front_page_id || 'page' !== get_post_type( $front_page_id ) ) {
    $existing = get_page_by_path( 'home' );
    if ( $existing ) {
        $front_page_id = $existing->ID;
    } else {
        $front_page_id = wp_insert_post( array(
            'post_title'   => 'صفحه اصلی',
            'post_name'    => 'home',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ) );
    }
}

if ( $front_page_id && ! is_wp_error( $front_page_id ) ) {
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id );
    echo '<p>✅ صفحه اصلی تنظیم شد: ID = ' . esc_html( $front_page_id ) . '</p>';
}

// 3) صفحه وبلاگ
$blog_page_id = get_option( 'page_for_posts' );
if ( ! $blog_page_id ) {
    $existing_blog = get_page_by_path( 'blog' );
    if ( $existing_blog ) {
        $blog_page_id = $existing_blog->ID;
    } else {
        $blog_page_id = wp_insert_post( array(
            'post_title'   => 'مقالات',
            'post_name'    => 'blog',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ) );
    }
    if ( $blog_page_id && ! is_wp_error( $blog_page_id ) ) {
        update_option( 'page_for_posts', $blog_page_id );
        echo '<p>✅ صفحه وبلاگ تنظیم شد: ID = ' . esc_html( $blog_page_id ) . '</p>';
    }
}

flush_rewrite_rules();
echo '<p>✅ Rewrite rules بازسازی شد.</p>';
echo '<p><strong>این فایل را حالا حذف کن.</strong></p>';