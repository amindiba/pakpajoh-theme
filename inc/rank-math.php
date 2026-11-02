<?php
/**
 * سازگاری قالب با Rank Math
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// حذف تگ‌های اضافی Rank Math در هدر
add_filter( 'rank_math/frontend/remove_credit_notice', '__return_true' );
add_filter( 'rank_math/frontend/breadcrumb/args', function( $args ) {
    $args['wrap_before'] = '<nav class="rank-math-breadcrumb container">';
    $args['wrap_after']  = '</nav>';
    return $args;
});

// افزودن Breadcrumb به صفحات داخلی
add_action( 'wp_body_open', function() {
    if ( is_singular() && ! is_front_page() && function_exists( 'rank_math_the_breadcrumbs' ) ) {
        echo '<div class="breadcrumb-wrapper" style="padding: 1rem 0; background: #f4f4f4; font-size: 0.9rem;">';
        rank_math_the_breadcrumbs();
        echo '</div>';
    }
});