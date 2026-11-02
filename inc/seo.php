<?php
/**
 * بهینه‌سازی سئو و اسکیما
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// افزودن اسکیما برای شرکت (Organization)
function pakpajoh_schema_organization() {
    if ( is_front_page() ) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type'    => 'Organization',
            'name'     => 'شرکت پاک‌پژوه',
            'url'      => home_url( '/' ),
            'logo'     => get_template_directory_uri() . '/assets/images/logo.png',
            'description' => 'ارائه دهنده خدمات تخصصی نظافت صنعتی',
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'telephone' => '+982112345678',
                'contactType' => 'customer service',
                'areaServed' => 'IR',
                'availableLanguage' => 'Persian',
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
    }
}
add_action( 'wp_head', 'pakpajoh_schema_organization' );

// افزودن hreflang برای ترجمه (در صورت استفاده از Translera)
function pakpajoh_hreflang() {
    if ( function_exists( 'translera_get_hreflang' ) ) {
        echo translera_get_hreflang();
    }
}
add_action( 'wp_head', 'pakpajoh_hreflang' );

// حذف اطلاعات اضافی از هدر
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );