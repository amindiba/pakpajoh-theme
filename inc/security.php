<?php
/**
 * PakPajoh — Security hardening
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Remove WordPress version from head & feeds.
 */
function pakpajoh_remove_version() {
    return '';
}
add_filter( 'the_generator', 'pakpajoh_remove_version' );

/**
 * Disable XML-RPC.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Remove X-Pingback header.
 */
function pakpajoh_remove_pingback_header( $headers ) {
    if ( isset( $headers['X-Pingback'] ) ) {
        unset( $headers['X-Pingback'] );
    }
    return $headers;
}
add_filter( 'wp_headers', 'pakpajoh_remove_pingback_header' );

/**
 * Sanitize output helper — esc_html shorthand.
 */
function pakpajoh_esc( $value ) {
    return esc_html( (string) $value );
}

/**
 * Sanitize URL output helper.
 */
function pakpajoh_esc_url( $value ) {
    return esc_url( (string) $value );
}
