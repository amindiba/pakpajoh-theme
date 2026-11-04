<?php
/**
 * Setup: پشتیبانی‌ها و منوها
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'pakpajoh_theme_support' );

function pakpajoh_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'منوی اصلی', 'pakpajoh' ),
        'footer'  => __( 'منوی فوتر', 'pakpajoh' ),
    ) );
}
add_action( 'after_setup_theme', 'pakpajoh_register_menus' );
