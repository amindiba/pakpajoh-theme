<?php
/**
 * PakPajoh Modern Theme functions
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'PAKPAJOH_VERSION', '2.0.0' );
define( 'PAKPAJOH_DIR', get_template_directory() );
define( 'PAKPAJOH_URI', get_template_directory_uri() );

// بارگذاری ماژول‌های اصلی
require_once PAKPAJOH_DIR . '/inc/setup.php';
require_once PAKPAJOH_DIR . '/inc/enqueue.php';
require_once PAKPAJOH_DIR . '/inc/cpt.php';
require_once PAKPAJOH_DIR . '/inc/forms.php';
require_once PAKPAJOH_DIR . '/inc/seo.php';
require_once PAKPAJOH_DIR . '/inc/security.php';
require_once PAKPAJOH_DIR . '/inc/performance.php';
