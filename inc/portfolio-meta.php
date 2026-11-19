<?php
/**
 * فیلدهای سفارشی نمونه‌کارها
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// افزودن متاباکس
function pakpajoh_portfolio_meta_box() {
    add_meta_box( 'pp_portfolio_details', 'جزئیات پروژه', 'pakpajoh_portfolio_meta_callback', 'pp_portfolio', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'pakpajoh_portfolio_meta_box' );

// فرم متاباکس
function pakpajoh_portfolio_meta_callback( $post ) {
    wp_nonce_field( 'pakpajoh_portfolio_meta', 'pakpajoh_portfolio_nonce' );
    $fields = array(
        '_pp_location' => 'محل اجرا',
        '_pp_date' => 'تاریخ اجرا',
        '_pp_level' => 'سطح اجرا',
        '_pp_duration' => 'مدت زمان',
        '_pp_type' => 'نوع پروژه',
        '_pp_satisfaction' => 'رضایت کارفرما',
        '_pp_difficulty' => 'سطح دشواری',
    );
    echo '<table class="form-table">';
    foreach ( $fields as $key => $label ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<tr><th><label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label></th>';
        echo '<td><input type="text" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" class="regular-text"></td></tr>';
    }
    echo '</table>';
}

// ذخیره مقادیر
function pakpajoh_save_portfolio_meta( $post_id ) {
    if ( ! isset( $_POST['pakpajoh_portfolio_nonce'] ) || ! wp_verify_nonce( $_POST['pakpajoh_portfolio_nonce'], 'pakpajoh_portfolio_meta' ) ) { return; }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return; }
    if ( ! current_user_can( 'edit_post', $post_id ) ) { return; }
    $fields = array( '_pp_location', '_pp_date', '_pp_level', '_pp_duration', '_pp_type', '_pp_satisfaction', '_pp_difficulty' );
    foreach ( $fields as $field ) {
        if ( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'pakpajoh_save_portfolio_meta' );
