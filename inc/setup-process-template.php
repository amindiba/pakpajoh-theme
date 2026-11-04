<?php
add_action( 'init', function() {
    if ( ! isset( $_GET['setup_process_template'] ) || '1' !== $_GET['setup_process_template'] ) { return; }
    $page = get_page_by_path( 'process' );
    if ( ! $page ) { echo '<p>❌ صفحه «مراحل همکاری» یافت نشد.</p>'; exit; }
    update_post_meta( $page->ID, '_wp_page_template', 'page-process.php' );
    echo '<p>✅ قالب «صفحه مراحل همکاری» تنظیم شد. (ID: ' . $page->ID . ')</p>';
    echo '<p><a href="/process/">رفتن به صفحه مراحل</a></p>';
    exit;
});