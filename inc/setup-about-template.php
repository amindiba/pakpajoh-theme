<?php
/**
 * تنظیم خودکار قالب برگه درباره ما
 */
add_action( 'init', function() {
    if ( ! isset( $_GET['setup_about_template'] ) || '1' !== $_GET['setup_about_template'] ) { return; }
    $page = get_page_by_path( 'about' );
    if ( ! $page ) { echo '<p>❌ صفحه «درباره ما» یافت نشد. ابتدا آن را بسازید.</p>'; exit; }
    update_post_meta( $page->ID, '_wp_page_template', 'page-about.php' );
    echo '<p>✅ قالب «صفحه درباره ما» روی برگه «درباره ما» تنظیم شد. (ID: ' . $page->ID . ')</p>';
    echo '<p><a href="/about/">رفتن به صفحه درباره ما</a></p>';
    exit;
});