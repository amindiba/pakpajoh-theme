<?php
/**
 * PakPajoh — One-time setup (pages + menu + self-cleanup)
 *
 * دسترسی: یک بار به /wp-admin/?pakpajoh_setup=1 بروید.
 * پس از اجرا، این فایل خودش را حذف می‌کند و require آن را از functions.php پاک می‌کند.
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function pakpajoh_maybe_run_setup() {
    if ( ! isset( $_GET['pakpajoh_setup'] ) || '1' !== $_GET['pakpajoh_setup'] ) {
        return;
    }
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // --- Pages ---
    $pages = array(
        'home'      => array( 'title' => 'خانه',       'content' => '' ),
        'services'  => array( 'title' => 'خدمات',      'content' => '' ),
        'portfolio' => array( 'title' => 'نمونه‌کارها', 'content' => '' ),
        'about'     => array( 'title' => 'درباره ما',  'content' => '' ),
        'contact'   => array( 'title' => 'تماس با ما', 'content' => '' ),
    );

    $created = array();
    foreach ( $pages as $slug => $data ) {
        $existing = get_page_by_path( $slug );
        if ( $existing ) {
            $created[ $slug ] = $existing->ID;
            continue;
        }
        $page_id = wp_insert_post( array(
            'post_title'   => $data['title'],
            'post_name'    => $slug,
            'post_content' => $data['content'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ) );
        if ( $page_id && ! is_wp_error( $page_id ) ) {
            $created[ $slug ] = $page_id;
        }
    }

    // --- Set front page ---
    if ( ! empty( $created['home'] ) ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', (int) $created['home'] );
    }

    // --- Create Primary Menu ---
    $menu_name = 'منوی اصلی';
    $menu      = wp_get_nav_menu_object( $menu_name );
    if ( ! $menu ) {
        $menu_id = wp_create_nav_menu( $menu_name );
    } else {
        $menu_id = $menu->term_id;
    }

    if ( $menu_id && ! is_wp_error( $menu_id ) ) {
        foreach ( $pages as $slug => $data ) {
            if ( empty( $created[ $slug ] ) ) {
                continue;
            }
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => $data['title'],
                'menu-item-object'    => 'page',
                'menu-item-object-id' => (int) $created[ $slug ],
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
            ) );
        }

        $locations            = get_theme_mod( 'nav_menu_locations', array() );
        $locations['primary'] = (int) $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );
    }

    // --- Self cleanup: حذف فایل و require از functions.php ---
    $self_cleanup_result = pakpajoh_cleanup_setup_file();

    wp_die(
        '<h2>راه‌اندازی پاک‌پژوه با موفقیت انجام شد.</h2>' .
        '<p>صفحات و منوی اصلی ساخته شدند.</p>' .
        '<p>وضعیت پاک‌سازی خودکار: ' . esc_html( $self_cleanup_result ) . '</p>' .
        '<p><a href="' . esc_url( admin_url() ) . '">بازگشت به پنل</a></p>',
        'PakPajoh Setup',
        array( 'response' => 200 )
    );
}
add_action( 'admin_init', 'pakpajoh_maybe_run_setup' );

/**
 * حذف فایل one-time-setup.php و require آن از functions.php.
 *
 * @return string پیام وضعیت برای نمایش به کاربر.
 */
function pakpajoh_cleanup_setup_file() {
    $messages = array();

    // --- 1) حذف فایل خود ---
    $self_file = __FILE__;
    if ( file_exists( $self_file ) ) {
        if ( @unlink( $self_file ) ) {
            $messages[] = 'فایل setup حذف شد.';
        } else {
            $messages[] = 'حذف فایل setup ممکن نشد (مجوز نوشتن را بررسی کنید).';
        }
    }

    // --- 2) حذف require از functions.php ---
    $functions_file = trailingslashit( get_template_directory() ) . 'functions.php';
    if ( file_exists( $functions_file ) && is_writable( $functions_file ) ) {
        $content = file_get_contents( $functions_file );
        if ( false !== $content ) {
            $pattern = "/require_once\s+PAKPAJOH_DIR\s*\.\s*'\/inc\/one-time-setup\.php'\s*;\s*\r?\n?/";
            $new_content = preg_replace( $pattern, '', $content );
            if ( null !== $new_content && $new_content !== $content ) {
                if ( false !== file_put_contents( $functions_file, $new_content ) ) {
                    $messages[] = 'require از functions.php پاک شد.';
                } else {
                    $messages[] = 'نوشتن در functions.php ممکن نشد.';
                }
            } else {
                $messages[] = 'الگوی require در functions.php یافت نشد.';
            }
        }
    } else {
        $messages[] = 'functions.php قابل نوشتن نیست.';
    }

    return implode( ' ', $messages );
}