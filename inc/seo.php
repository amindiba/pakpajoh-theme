<?php
/**
 * PakPajoh — SEO (Rank Math friendly)
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add Organization schema on front page (in case Rank Math is inactive).
 */
function pakpajoh_organization_schema() {
    if ( is_admin() || ! is_front_page() ) {
        return;
    }

    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => __( 'شرکت پاک‌پژوه', 'pakpajoh' ),
        'legalName'   => __( 'آتیه مهرگان انعکاس', 'pakpajoh' ),
        'url'         => home_url( '/' ),
        'description' => __( 'ارائه‌دهنده خدمات تخصصی نظافت صنعتی', 'pakpajoh' ),
        'foundingDate' => '2025',
    );

    printf(
        '<script type="application/ld+json">%s</script>',
        wp_json_encode( $schema )
    );
}
add_action( 'wp_head', 'pakpajoh_organization_schema', 5 );

/**
 * Add breadcrumb placeholder (Rank Math handles when active).
 */
function pakpajoh_breadcrumb() {
    if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
        rank_math_the_breadcrumbs();
    }
}
