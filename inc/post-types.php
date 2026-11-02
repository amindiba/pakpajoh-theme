<?php
/**
 * PakPajoh — Custom Post Types (FSE Native)
 *
 * @package PakPajoh
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_register_custom_post_types() {
    register_post_type( 'pp_service', array(
        'labels' => array( 'name' => 'خدمات', 'singular_name' => 'خدمت' ),
        'public' => true, 'has_archive' => true, 'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-admin-tools',
    ) );
    register_post_type( 'pp_equipment', array(
        'labels' => array( 'name' => 'ناوگان تجهیزات', 'singular_name' => 'تجهیز' ),
        'public' => true, 'has_archive' => true, 'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-car',
    ) );
}
add_action( 'init', 'pakpajoh_register_custom_post_types' );