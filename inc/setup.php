<?php
/**
 * PakPajoh — Setup helpers
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Fallback menu when no menu is assigned.
 */
function pakpajoh_primary_menu_fallback() {
    $items = array(
        home_url( '/' )        => __( 'خانه', 'pakpajoh' ),
        home_url( '/services' ) => __( 'خدمات', 'pakpajoh' ),
        home_url( '/portfolio' ) => __( 'نمونه‌کارها', 'pakpajoh' ),
        home_url( '/about' )   => __( 'درباره ما', 'pakpajoh' ),
        home_url( '/contact' ) => __( 'تماس', 'pakpajoh' ),
    );

    echo '<ul>';
    foreach ( $items as $url => $label ) {
        printf(
            '<li><a href="%s">%s</a></li>',
            esc_url( $url ),
            esc_html( $label )
        );
    }
    echo '</ul>';
}

/**
 * Custom logo markup for header part.
 */
function pakpajoh_logo_markup() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        return wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'pp-logo__img' ) );
    }
    return '<span class="pp-logo__mark" aria-hidden="true">P.P</span>';
}

/**
 * Convert Latin digits to Persian digits in a string.
 *
 * @param string $text Input text.
 * @return string
 */
function pakpajoh_to_persian_digits( $text ) {
    $en = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
    $fa = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
    return str_replace( $en, $fa, (string) $text );
}

/**
 * Filter content to convert digits to Persian on frontend.
 */
function pakpajoh_filter_persian_digits( $content ) {
    if ( is_admin() || is_feed() ) {
        return $content;
    }
    return pakpajoh_to_persian_digits( $content );
}
add_filter( 'the_content', 'pakpajoh_filter_persian_digits', 20 );
