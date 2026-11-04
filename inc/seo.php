<?php
/**
 * SEO: سازگاری با Rank Math
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// اسکیما Organization
function pakpajoh_schema_organization() {
    if ( is_front_page() ) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type'    => 'Organization',
            'name'     => 'شرکت پاک‌پژوه',
            'legalName' => 'آتیه مهرگان انعکاس',
            'url'      => home_url( '/' ),
            'description' => 'ارائه دهنده خدمات تخصصی نظافت صنعتی',
            'address' => array(
                '@type' => 'PostalAddress',
                'streetAddress' => 'خیابان کریمخان، کوچه آبگان، پلاک ۴، واحد ۱',
                'addressLocality' => 'تهران',
                'addressCountry' => 'IR',
            ),
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'telephone' => '+982191092123',
                'contactType' => 'customer service',
                'areaServed' => 'IR',
                'availableLanguage' => 'Persian',
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
    }
}
add_action( 'wp_head', 'pakpajoh_schema_organization' );

// اسکیما Breadcrumb
function pakpajoh_schema_breadcrumb() {
    if ( is_singular() && ! is_front_page() && function_exists( 'rank_math_the_breadcrumbs' ) ) {
        echo '<div class="breadcrumb-wrapper container">';
        rank_math_the_breadcrumbs();
        echo '</div>';
    }
}
add_action( 'wp_body_open', 'pakpajoh_schema_breadcrumb', 5 );

// حذف نسخه وردپرس
add_filter( 'the_generator', '__return_empty_string' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
