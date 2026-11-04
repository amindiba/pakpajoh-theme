<?php
add_action( 'init', function() {
    if ( ! isset( $_GET['setup_contact_template'] ) || '1' !== $_GET['setup_contact_template'] ) { return; }
    $page = get_page_by_path( 'contact' );
    if ( ! $page ) { echo '<p>❌ صفحه «تماس با ما» یافت نشد.</p>'; exit; }
    update_post_meta( $page->ID, '_wp_page_template', 'page-contact.php' );
    echo '<p>✅ قالب «صفحه تماس با ما» روی برگه تنظیم شد. (ID: ' . $page->ID . ')</p>';
    echo '<p><a href="/contact/">رفتن به صفحه تماس</a></p>';
    exit;
});