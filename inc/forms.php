<?php
/**
 * Forms: پردازش فرم‌ها
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_handle_request_form() {
    if ( ! isset( $_POST['pakpajoh_nonce'] ) || ! wp_verify_nonce( $_POST['pakpajoh_nonce'], 'pakpajoh_request_nonce' ) ) { wp_die( 'خطای امنیتی.' ); }
    $name = sanitize_text_field( $_POST['req_name'] );
    $phone = sanitize_text_field( $_POST['req_phone'] );
    $service = sanitize_text_field( $_POST['req_service'] );
    $area = sanitize_text_field( $_POST['req_area'] );
    $message = sanitize_textarea_field( $_POST['req_message'] );
    if ( empty( $name ) || empty( $phone ) || empty( $service ) ) { wp_redirect( add_query_arg( 'form_status', 'error', wp_get_referer() ) ); exit; }
    $to = get_option( 'admin_email' );
    $subject = 'درخواست جدید خدمات نظافت - پاک‌پژوه';
    $body = "نام: $name\nشماره تماس: $phone\nنوع خدمت: $service\nمساحت: $area متر مربع\nتوضیحات:\n$message";
    wp_mail( $to, $subject, $body, array( 'Content-Type: text/plain; charset=UTF-8' ) );
    wp_redirect( add_query_arg( 'form_status', 'success', wp_get_referer() ) ); exit;
}
add_action( 'admin_post_pakpajoh_request_form', 'pakpajoh_handle_request_form' );
add_action( 'admin_post_nopriv_pakpajoh_request_form', 'pakpajoh_handle_request_form' );
