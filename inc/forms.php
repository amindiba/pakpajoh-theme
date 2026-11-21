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

function pakpajoh_contact_redirect( $status ) {
    $redirect_to = add_query_arg( 'contact_status', $status, home_url( '/contact/' ) );
    wp_safe_redirect( $redirect_to . '#pp-contact-form' );
    exit;
}

function pakpajoh_handle_contact_form() {
    $nonce = isset( $_POST['pakpajoh_nonce'] ) && is_string( $_POST['pakpajoh_nonce'] )
        ? sanitize_text_field( wp_unslash( $_POST['pakpajoh_nonce'] ) )
        : '';
    if ( ! wp_verify_nonce( $nonce, 'pakpajoh_contact_nonce' ) ) {
        wp_die( 'درخواست معتبر نیست. لطفاً صفحه را تازه‌سازی و دوباره تلاش کنید.' );
    }

    $name = isset( $_POST['name'] ) && is_string( $_POST['name'] )
        ? sanitize_text_field( wp_unslash( $_POST['name'] ) )
        : '';
    $phone = isset( $_POST['phone'] ) && is_string( $_POST['phone'] )
        ? sanitize_text_field( wp_unslash( $_POST['phone'] ) )
        : '';
    $email_input = isset( $_POST['email'] ) && is_string( $_POST['email'] )
        ? sanitize_text_field( wp_unslash( $_POST['email'] ) )
        : '';
    $email = sanitize_email( $email_input );
    $message = isset( $_POST['message'] ) && is_string( $_POST['message'] )
        ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) )
        : '';

    if ( '' === $name || '' === $phone || '' === $message || ( '' !== $email_input && ! is_email( $email ) ) ) {
        pakpajoh_contact_redirect( 'invalid' );
    }

    $recipient = get_option( 'admin_email' );
    if ( ! is_email( $recipient ) ) {
        error_log( 'PakPajoh: contact form could not send because the site admin email is invalid.' );
        pakpajoh_contact_redirect( 'error' );
    }

    $subject = 'درخواست تماس جدید - پاک‌پژوه';
    $body = "نام: $name\nشماره تماس: $phone\nایمیل: " . ( '' !== $email ? $email : 'ثبت نشده' ) . "\nمتن پیام:\n$message";
    $sent = wp_mail( $recipient, $subject, $body, array( 'Content-Type: text/plain; charset=UTF-8' ) );

    if ( ! $sent ) {
        error_log( 'PakPajoh: contact form email could not be sent.' );
        pakpajoh_contact_redirect( 'error' );
    }

    pakpajoh_contact_redirect( 'success' );
}
add_action( 'admin_post_pakpajoh_contact_form', 'pakpajoh_handle_contact_form' );
add_action( 'admin_post_nopriv_pakpajoh_contact_form', 'pakpajoh_handle_contact_form' );

function pakpajoh_newsletter_redirect( $status ) {
    $referer = wp_get_referer();
    $redirect_to = $referer ? remove_query_arg( 'newsletter_status', $referer ) : home_url( '/' );
    wp_safe_redirect( add_query_arg( 'newsletter_status', $status, $redirect_to ) );
    exit;
}

function pakpajoh_handle_newsletter_signup() {
    if (
        ! isset( $_POST['pakpajoh_newsletter_nonce'] )
        || ! wp_verify_nonce(
            sanitize_text_field( wp_unslash( $_POST['pakpajoh_newsletter_nonce'] ) ),
            'pakpajoh_newsletter_signup'
        )
    ) {
        wp_die( 'درخواست معتبر نیست. لطفاً صفحه را تازه‌سازی و دوباره تلاش کنید.' );
    }

    if ( empty( $_POST['newsletter_consent'] ) ) {
        pakpajoh_newsletter_redirect( 'consent' );
    }

    $phone = isset( $_POST['newsletter_phone'] )
        ? sanitize_text_field( wp_unslash( $_POST['newsletter_phone'] ) )
        : '';
    $phone = strtr( $phone, array(
        '۰' => '0', '۱' => '1', '۲' => '2', '۳' => '3', '۴' => '4',
        '۵' => '5', '۶' => '6', '۷' => '7', '۸' => '8', '۹' => '9',
        '٠' => '0', '١' => '1', '٢' => '2', '٣' => '3', '٤' => '4',
        '٥' => '5', '٦' => '6', '٧' => '7', '٨' => '8', '٩' => '9',
    ) );
    $phone = preg_replace( '/[\s\-\(\)]/', '', $phone );

    if ( 0 === strpos( $phone, '+98' ) ) {
        $phone = '0' . substr( $phone, 3 );
    } elseif ( 0 === strpos( $phone, '0098' ) ) {
        $phone = '0' . substr( $phone, 4 );
    } elseif ( 0 === strpos( $phone, '98' ) ) {
        $phone = '0' . substr( $phone, 2 );
    } elseif ( 0 !== strpos( $phone, '0' ) ) {
        $phone = '0' . $phone;
    }

    if ( ! preg_match( '/^09[0-9]{9}$/', $phone ) ) {
        pakpajoh_newsletter_redirect( 'invalid' );
    }

    global $wpdb;
    $table = $wpdb->prefix . 'pakpajoh_leads';
    $table_exists = $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table ) ) );
    if ( $table !== $table_exists ) {
        error_log( 'PakPajoh: newsletter signup could not find the leads table.' );
        pakpajoh_newsletter_redirect( 'error' );
    }

    $existing_id = $wpdb->get_var( $wpdb->prepare(
        "SELECT id FROM $table WHERE phone = %s AND source = %s LIMIT 1",
        $phone,
        'newsletter'
    ) );
    if ( ! empty( $wpdb->last_error ) ) {
        error_log( 'PakPajoh: newsletter signup could not check for an existing lead.' );
        pakpajoh_newsletter_redirect( 'error' );
    }
    if ( $existing_id ) {
        pakpajoh_newsletter_redirect( 'duplicate' );
    }

    $inserted = $wpdb->insert(
        $table,
        array(
            'name'    => 'عضویت خبرنامه',
            'phone'   => $phone,
            'email'   => '',
            'service' => 'newsletter',
            'message' => 'ثبت شماره در خبرنامه با رضایت کاربر برای پیگیری و اطلاع‌رسانی',
            'status'  => 'new',
            'source'  => 'newsletter',
        ),
        array( '%s', '%s', '%s', '%s', '%s', '%s', '%s' )
    );

    if ( false === $inserted ) {
        error_log( 'PakPajoh: newsletter signup lead insert failed.' );
        pakpajoh_newsletter_redirect( 'error' );
    }

    pakpajoh_newsletter_redirect( 'success' );
}
add_action( 'admin_post_pakpajoh_newsletter_signup', 'pakpajoh_handle_newsletter_signup' );
add_action( 'admin_post_nopriv_pakpajoh_newsletter_signup', 'pakpajoh_handle_newsletter_signup' );
