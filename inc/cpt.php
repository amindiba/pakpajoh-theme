<?php
/**
 * CPT: ثبت Custom Post Types
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_register_cpts() {
    register_post_type( 'pp_service', array(
        'labels' => array( 'name' => 'خدمات', 'singular_name' => 'خدمت' ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-admin-tools', 'menu_position' => 20,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'rewrite' => array( 'slug' => 'services' ), 'show_in_rest' => true,
    ) );
    register_post_type( 'pp_equipment', array(
        'labels' => array( 'name' => 'ماشین‌آلات', 'singular_name' => 'دستگاه' ),
        'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-hammer', 'menu_position' => 21,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'rewrite' => array( 'slug' => 'equipment' ), 'show_in_rest' => true,
    ) );
    register_post_type( 'pp_portfolio', array(
        'labels' => array( 'name' => 'نمونه‌کارها', 'singular_name' => 'نمونه‌کار' ),
        'public' => true, 'has_archive' => false, 'menu_icon' => 'dashicons-portfolio', 'menu_position' => 22,
        'supports' => array( 'title', 'thumbnail', 'excerpt' ),
        'rewrite' => array( 'slug' => 'portfolio' ), 'show_in_rest' => true,
    ) );
}
add_action( 'init', 'pakpajoh_register_cpts' );

function pakpajoh_flush_rewrites() { pakpajoh_register_cpts(); flush_rewrite_rules(); }
add_action( 'after_switch_theme', 'pakpajoh_flush_rewrites' );
