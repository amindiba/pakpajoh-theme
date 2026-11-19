<?php
require_once( dirname( __FILE__ ) . '/wp-load.php' );

$page = get_page_by_path( 'services', OBJECT, 'page' );
if ( ! $page ) {
    die( 'برگه services یافت نشد.' );
}

update_post_meta( $page->ID, '_wp_page_template', 'page-services.php' );
wp_cache_flush();

echo 'قالب برگه ' . $page->ID . ' به page-services.php تنظیم شد.';
echo '<br><a href="' . home_url( '/services/' ) . '">مشاهده صفحه</a>';

@unlink( __FILE__ );