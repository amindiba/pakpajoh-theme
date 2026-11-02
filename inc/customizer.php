<?php
/**
 * Customizer — پنل مدیریت قالب (بدون Kirki)
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function pakpajoh_customize_register( $wp_customize ) {

    /* ========== پنل اصلی ========== */
    $wp_customize->add_panel( 'pakpajoh_panel', array(
        'title'       => __( 'تنظیمات قالب پاک‌پژوه', 'pakpajoh' ),
        'description' => __( 'رنگ‌ها، متن‌ها و تنظیمات اختصاصی قالب', 'pakpajoh' ),
        'priority'    => 10,
    ) );

    /* ========== بخش رنگ‌ها ========== */
    $wp_customize->add_section( 'pakpajoh_colors', array(
        'title' => __( 'رنگ‌ها', 'pakpajoh' ),
        'panel' => 'pakpajoh_panel',
    ) );

    $colors = array(
        'primary'  => array( 'label' => 'رنگ اصلی', 'default' => '#0F3D3E' ),
        'accent'   => array( 'label' => 'رنگ تاکیدی', 'default' => '#F2A65A' ),
        'dark'     => array( 'label' => 'رنگ متن تیره', 'default' => '#1A1A1A' ),
        'light_bg' => array( 'label' => 'پس‌زمینه روشن', 'default' => '#F7F5F0' ),
        'muted'    => array( 'label' => 'متن ثانویه', 'default' => '#6B6B6B' ),
    );

    foreach ( $colors as $key => $data ) {
        $wp_customize->add_setting( 'pakpajoh_color_' . $key, array(
            'default'           => $data['default'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'pakpajoh_color_' . $key,
            array( 'label' => $data['label'], 'section' => 'pakpajoh_colors' )
        ) );
    }

    /* ========== بخش هدر ========== */
    $wp_customize->add_section( 'pakpajoh_header', array(
        'title' => __( 'هدر سایت', 'pakpajoh' ),
        'panel' => 'pakpajoh_panel',
    ) );

    $wp_customize->add_setting( 'pakpajoh_header_phone', array(
        'default'           => '۰۲۱-XXXXXXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_header_phone', array(
        'label' => __( 'شماره تلفن هدر', 'pakpajoh' ), 'section' => 'pakpajoh_header', 'type' => 'text',
    ) );

    $wp_customize->add_setting( 'pakpajoh_header_cta_text', array(
        'default'           => 'درخواست کارشناسی رایگان',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_header_cta_text', array(
        'label' => __( 'متن دکمه هدر', 'pakpajoh' ), 'section' => 'pakpajoh_header', 'type' => 'text',
    ) );

    $wp_customize->add_setting( 'pakpajoh_header_cta_url', array(
        'default'           => '/contact/',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'pakpajoh_header_cta_url', array(
        'label' => __( 'لینک دکمه هدر', 'pakpajoh' ), 'section' => 'pakpajoh_header', 'type' => 'url',
    ) );

    /* ========== بخش فوتر ========== */
    $wp_customize->add_section( 'pakpajoh_footer', array(
        'title' => __( 'فوتر سایت', 'pakpajoh' ),
        'panel' => 'pakpajoh_panel',
    ) );

    $wp_customize->add_setting( 'pakpajoh_footer_about', array(
        'default'           => 'ارائه خدمات مکانیزه نگهداری و نظافت واحدهای مسکونی، تجاری، اداری، درمانی، ترابری و صنعتی.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_footer_about', array(
        'label' => __( 'متن معرفی فوتر', 'pakpajoh' ), 'section' => 'pakpajoh_footer', 'type' => 'textarea',
    ) );

    $wp_customize->add_setting( 'pakpajoh_footer_phone', array(
        'default' => '۰۲۱-XXXXXXXX', 'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_footer_phone', array(
        'label' => __( 'تلفن فوتر', 'pakpajoh' ), 'section' => 'pakpajoh_footer',
    ) );

    $wp_customize->add_setting( 'pakpajoh_footer_email', array(
        'default' => 'info@pakpajoh.ir', 'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'pakpajoh_footer_email', array(
        'label' => __( 'ایمیل فوتر', 'pakpajoh' ), 'section' => 'pakpajoh_footer',
    ) );

    $wp_customize->add_setting( 'pakpajoh_footer_address', array(
        'default' => 'تهران', 'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_footer_address', array(
        'label' => __( 'آدرس فوتر', 'pakpajoh' ), 'section' => 'pakpajoh_footer',
    ) );

    /* ========== بخش صفحه اصلی ========== */
    $wp_customize->add_section( 'pakpajoh_home', array(
        'title' => __( 'صفحه اصلی', 'pakpajoh' ),
        'panel' => 'pakpajoh_panel',
    ) );

    $wp_customize->add_setting( 'pakpajoh_hero_title', array(
        'default'           => 'نظافت مدرن صنعتی؛ تلاقی فناوری، شوینده‌های بایو و نظارت مستمر',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_hero_title', array(
        'label' => __( 'تیتر اصلی صفحه', 'pakpajoh' ), 'section' => 'pakpajoh_home', 'type' => 'text',
    ) );

    $wp_customize->add_setting( 'pakpajoh_hero_subtitle', array(
        'default'           => 'ارائه خدمات مکانیزه نگهداری و نظافت واحدهای مسکونی، تجاری، اداری، درمانی، ترابری و صنعتی.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_hero_subtitle', array(
        'label' => __( 'زیرعنوان صفحه', 'pakpajoh' ), 'section' => 'pakpajoh_home', 'type' => 'textarea',
    ) );

    $wp_customize->add_setting( 'pakpajoh_hero_cta_text', array(
        'default' => 'ثبت درخواست کارشناسی رایگان', 'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'pakpajoh_hero_cta_text', array(
        'label' => __( 'متن دکمه اصلی', 'pakpajoh' ), 'section' => 'pakpajoh_home',
    ) );

    $wp_customize->add_setting( 'pakpajoh_hero_cta_url', array(
        'default' => '/contact/', 'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'pakpajoh_hero_cta_url', array(
        'label' => __( 'لینک دکمه اصلی', 'pakpajoh' ), 'section' => 'pakpajoh_home', 'type' => 'url',
    ) );

    $wp_customize->add_setting( 'pakpajoh_hero_image', array(
        'default' => '', 'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'pakpajoh_hero_image',
        array( 'label' => __( 'تصویر پس‌زمینه Hero', 'pakpajoh' ), 'section' => 'pakpajoh_home' )
    ) );

    /* ========== بخش تعهدات ========== */
    $wp_customize->add_section( 'pakpajoh_commitments', array(
        'title' => __( 'تعهدات سازمانی', 'pakpajoh' ),
        'panel' => 'pakpajoh_panel',
    ) );

    for ( $i = 1; $i <= 3; $i++ ) {
        $wp_customize->add_setting( "pakpajoh_commit_{$i}_title", array(
            'default' => '', 'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "pakpajoh_commit_{$i}_title", array(
            'label' => sprintf( __( 'عنوان تعهد %d', 'pakpajoh' ), $i ), 'section' => 'pakpajoh_commitments',
        ) );

        $wp_customize->add_setting( "pakpajoh_commit_{$i}_text", array(
            'default' => '', 'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( "pakpajoh_commit_{$i}_text", array(
            'label' => sprintf( __( 'توضیح تعهد %d', 'pakpajoh' ), $i ), 'section' => 'pakpajoh_commitments', 'type' => 'textarea',
        ) );
    }
}
add_action( 'customize_register', 'pakpajoh_customize_register' );

/**
 * تزریق متغیرهای رنگ به CSS
 */
function pakpajoh_customizer_css() {
    $primary = get_theme_mod( 'pakpajoh_color_primary', '#0F3D3E' );
    $accent  = get_theme_mod( 'pakpajoh_color_accent', '#F2A65A' );
    $dark    = get_theme_mod( 'pakpajoh_color_dark', '#1A1A1A' );
    $light   = get_theme_mod( 'pakpajoh_color_light_bg', '#F7F5F0' );
    $muted   = get_theme_mod( 'pakpajoh_color_muted', '#6B6B6B' );
    ?>
    <style id="pakpajoh-customizer-css">
        :root {
            --pp-primary: <?php echo esc_attr( $primary ); ?>;
            --pp-accent: <?php echo esc_attr( $accent ); ?>;
            --pp-dark: <?php echo esc_attr( $dark ); ?>;
            --pp-light-bg: <?php echo esc_attr( $light ); ?>;
            --pp-muted: <?php echo esc_attr( $muted ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'pakpajoh_customizer_css' );