<?php
/**
 * Custom Post Types — خدمات و ماشین‌آلات
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function pakpajoh_register_cpts() {

    register_post_type( 'pp_service', array(
        'labels' => array(
            'name'          => __( 'خدمات', 'pakpajoh' ),
            'singular_name' => __( 'خدمت', 'pakpajoh' ),
            'add_new'       => __( 'افزودن خدمت', 'pakpajoh' ),
            'add_new_item'  => __( 'افزودن خدمت جدید', 'pakpajoh' ),
            'edit_item'     => __( 'ویرایش خدمت', 'pakpajoh' ),
            'all_items'     => __( 'همه خدمات', 'pakpajoh' ),
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-admin-tools',
        'menu_position' => 20,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'rewrite'       => array( 'slug' => 'services', 'with_front' => false ),
        'show_in_rest'  => true,
    ) );

    register_post_type( 'pp_equipment', array(
        'labels' => array(
            'name'          => __( 'ماشین‌آلات', 'pakpajoh' ),
            'singular_name' => __( 'دستگاه', 'pakpajoh' ),
            'add_new'       => __( 'افزودن دستگاه', 'pakpajoh' ),
            'add_new_item'  => __( 'افزودن دستگاه جدید', 'pakpajoh' ),
            'edit_item'     => __( 'ویرایش دستگاه', 'pakpajoh' ),
            'all_items'     => __( 'همه ماشین‌آلات', 'pakpajoh' ),
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-hammer',
        'menu_position' => 21,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'rewrite'       => array( 'slug' => 'equipment', 'with_front' => false ),
        'show_in_rest'  => true,
    ) );

    register_taxonomy( 'pp_service_cat', 'pp_service', array(
        'labels' => array(
            'name'          => __( 'دسته‌بندی خدمات', 'pakpajoh' ),
            'singular_name' => __( 'دسته خدمت', 'pakpajoh' ),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'service-category' ),
    ) );
}
add_action( 'init', 'pakpajoh_register_cpts' );

function pakpajoh_flush_rewrites() {
    pakpajoh_register_cpts();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'pakpajoh_flush_rewrites' );