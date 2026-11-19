<?php
/**
 * ردیابی آمار بازدید صفحات
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// ===== ۱. ثبت بازدید با AJAX =====
add_action( 'wp_ajax_pakpajoh_track_view', 'pakpajoh_track_view' );
add_action( 'wp_ajax_nopriv_pakpajoh_track_view', 'pakpajoh_track_view' );
function pakpajoh_track_view() {
    if ( ! isset( $_POST['page_url'] ) ) { wp_die(); }
    global $wpdb;
    $table = $wpdb->prefix . 'pakpajoh_page_views';
    $page_url = sanitize_text_field( $_POST['page_url'] );

    $exists = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM $table WHERE page_url = %s", $page_url ) );
    if ( $exists ) {
        $wpdb->query( $wpdb->prepare( "UPDATE $table SET visit_count = visit_count + 1, last_visited = NOW() WHERE page_url = %s", $page_url ) );
    } else {
        $wpdb->insert( $table, array( 'page_url' => $page_url, 'visit_count' => 1 ) );
    }
    wp_die();
}

// ===== ۲. افزودن اسکریپت ردیابی به فوتر سایت =====
add_action( 'wp_footer', 'pakpajoh_track_view_script' );
function pakpajoh_track_view_script() {
    if ( is_admin() ) { return; }
    ?>
    <script>
    (function() {
        var pageUrl = window.location.pathname;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('action=pakpajoh_track_view&page_url=' + encodeURIComponent(pageUrl));
    })();
    </script>
    <?php
}