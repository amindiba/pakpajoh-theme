<?php
/**
 * پنل مدیریت پاک‌پژوه — ساختار پایه
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'admin_menu', 'pakpajoh_admin_menu' );
function pakpajoh_admin_menu() {
    // منوی اصلی
    add_menu_page(
        'مدیریت پاک‌پژوه',
        'مدیریت پاک‌پژوه',
        'manage_options',
        'pakpajoh-panel',
        'pakpajoh_panel_dashboard',
        'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" stroke="#FFFFFF" stroke-width="1.5"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" stroke="#4CAF50" stroke-width="1.5"/></svg>'),
        2
    );

    // زیرمنوها
    add_submenu_page( 'pakpajoh-panel', 'داشبورد', 'داشبورد', 'manage_options', 'pakpajoh-panel', 'pakpajoh_panel_dashboard' );
    add_submenu_page( 'pakpajoh-panel', 'سرنخ‌ها', 'سرنخ‌ها', 'manage_options', 'pakpajoh-leads', 'pakpajoh_leads_page' );
    add_submenu_page( 'pakpajoh-panel', 'مشتریان', 'مشتریان', 'manage_options', 'pakpajoh-customers', 'pakpajoh_customers_page' );
    add_submenu_page( 'pakpajoh-panel', 'ویرایش جملات', 'ویرایش جملات', 'manage_options', 'pakpajoh-texts', 'pakpajoh_texts_page' );
    add_submenu_page( 'pakpajoh-panel', 'نمونه‌کارها', 'نمونه‌کارها', 'manage_options', 'pakpajoh-portfolio', 'pakpajoh_portfolio_page' );
    // زیرمنوی نوشته‌ها (لینک مستقیم به بخش مقالات وردپرس)
    add_submenu_page( 'pakpajoh-panel', 'نوشته‌ها', 'نوشته‌ها', 'edit_posts', 'edit.php?post_type=post', null );
    // زیرمنوی دسته‌بندی‌ها (لینک مستقیم به مدیریت دسته‌بندی‌های وردپرس)
    add_submenu_page( 'pakpajoh-panel', 'دسته‌بندی‌ها', 'دسته‌بندی‌ها', 'manage_categories', 'edit-tags.php?taxonomy=category', null );
    add_submenu_page( 'pakpajoh-panel', 'پنل پیامکی', 'پنل پیامکی', 'manage_options', 'pakpajoh-sms', 'pakpajoh_sms_page' );
    
}

// داشبورد پریمیوم
/**
 * تبدیل اعداد لاتین به فارسی
 */
function pakpajoh_fa_num( $number ) {
    $fa_digits = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
    $en_digits = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
    return str_replace( $en_digits, $fa_digits, (string) $number );
}

function pakpajoh_panel_dashboard() {
    global $wpdb;
    $leads_table = $wpdb->prefix . 'pakpajoh_leads';
    $customers_table = $wpdb->prefix . 'pakpajoh_customers';
    
    $leads_count = $wpdb->get_var( "SELECT COUNT(*) FROM $leads_table" );
    $customers_count = $wpdb->get_var( "SELECT COUNT(*) FROM $customers_table" );
    $posts_count = wp_count_posts( 'post' )->publish;
    $portfolio_count = wp_count_posts( 'pp_portfolio' )->publish;
    ?>
    <div class="wrap">
        <h1>مدیریت پاک‌پژوه</h1>
        <p style="color:#5A6B7D;margin-bottom:24px;">به پنل مدیریت اختصاصی پاک‌پژوه خوش آمدید.</p>

        <!-- آمار بازدید صفحات -->
        <?php
        global $wpdb;
        $views_table = $wpdb->prefix . 'pakpajoh_page_views';
        $clicks_table = $wpdb->prefix . 'pakpajoh_button_clicks';
        $total_views = $wpdb->get_var( "SELECT SUM(visit_count) FROM $views_table" );
        $total_clicks = $wpdb->get_var( "SELECT SUM(click_count) FROM $clicks_table" );
        $top_pages = $wpdb->get_results( "SELECT page_url, visit_count FROM $views_table ORDER BY visit_count DESC LIMIT 5" );
        ?>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;margin-bottom:30px;">
            <div class="pakpajoh-card" style="display:flex;align-items:center;gap:16px;padding:24px;">
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#0A2540,#005E80);border-radius:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <div>
                    <div style="font-size:1.8rem;font-weight:800;color:#0A2540;line-height:1;"><?php echo pakpajoh_fa_num( intval( $total_views ) ); ?></div>
                    <div style="font-size:0.85rem;color:#5A6B7D;margin-top:4px;">کل بازدید صفحات</div>
                </div>
            </div>
            <div class="pakpajoh-card" style="display:flex;align-items:center;gap:16px;padding:24px;">
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#C9A96E,#B08D5A);border-radius:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="1.5"><path d="M9 12l2 2 4-4"/><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                </div>
                <div>
                    <div style="font-size:1.8rem;font-weight:800;color:#B08D5A;line-height:1;"><?php echo pakpajoh_fa_num( intval( $total_clicks ) ); ?></div>
                    <div style="font-size:0.85rem;color:#5A6B7D;margin-top:4px;">کل کلیک دکمه‌ها</div>
                </div>
            </div>
        </div>

        <!-- پربازدیدترین صفحات -->
        <?php if ( ! empty( $top_pages ) ) : ?>
        <h2 style="font-size:1.2rem;font-weight:800;color:#005E80;margin-bottom:16px;">پربازدیدترین صفحات</h2>
        <div class="pakpajoh-card" style="margin-bottom:30px;">
            <table class="wp-list-table widefat fixed striped">
                <thead><tr><th>صفحه</th><th>تعداد بازدید</th></tr></thead>
                <tbody>
                    <?php foreach ( $top_pages as $page ) : ?>
                        <tr>
                            <td><?php echo esc_html( $page->page_url ); ?></td>
                            <td><?php echo pakpajoh_fa_num( intval( $page->visit_count ) ); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>

        <!-- کارت‌های آمار -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px;margin-bottom:30px;">
            <div class="pakpajoh-card" style="display:flex;align-items:center;gap:16px;padding:24px;">
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#1B5E4A,#2E7D32);border-radius:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div>
                    <div style="font-size:1.8rem;font-weight:800;color:#1B5E4A;line-height:1;"><?php echo esc_html( pakpajoh_fa_num( $leads_count ) ); ?></div>
                    <div style="font-size:0.85rem;color:#5A6B7D;margin-top:4px;">سرنخ‌ها</div>
                </div>
            </div>
            <div class="pakpajoh-card" style="display:flex;align-items:center;gap:16px;padding:24px;">
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#005E80,#0A2540);border-radius:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <div>
                    <div style="font-size:1.8rem;font-weight:800;color:#005E80;line-height:1;"><?php echo esc_html( pakpajoh_fa_num( $customers_count ) ); ?></div>
                    <div style="font-size:0.85rem;color:#5A6B7D;margin-top:4px;">مشتریان</div>
                </div>
            </div>
            <div class="pakpajoh-card" style="display:flex;align-items:center;gap:16px;padding:24px;">
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#C9A96E,#B08D5A);border-radius:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <div>
                    <div style="font-size:1.8rem;font-weight:800;color:#B08D5A;line-height:1;"><?php echo esc_html( pakpajoh_fa_num( $posts_count ) ); ?></div>
                    <div style="font-size:0.85rem;color:#5A6B7D;margin-top:4px;">مقالات</div>
                </div>
            </div>
            <div class="pakpajoh-card" style="display:flex;align-items:center;gap:16px;padding:24px;">
                <div style="width:56px;height:56px;background:linear-gradient(135deg,#388E3C,#4CAF50);border-radius:16px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#FFF" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
                <div>
                    <div style="font-size:1.8rem;font-weight:800;color:#388E3C;line-height:1;"><?php echo esc_html( pakpajoh_fa_num( $portfolio_count ) ); ?></div>
                    <div style="font-size:0.85rem;color:#5A6B7D;margin-top:4px;">نمونه‌کارها</div>
                </div>
            </div>
        </div>

        <!-- لینک‌های سریع -->
        <h2 style="font-size:1.2rem;font-weight:800;color:#005E80;margin-bottom:16px;">دسترسی سریع</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;">
            <a href="<?php echo admin_url('admin.php?page=pakpajoh-leads'); ?>" class="pakpajoh-card" style="text-decoration:none;display:flex;align-items:center;gap:12px;padding:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                <span style="font-weight:700;color:#1B5E4A;">مدیریت سرنخ‌ها</span>
            </a>
            <a href="<?php echo admin_url('admin.php?page=pakpajoh-customers'); ?>" class="pakpajoh-card" style="text-decoration:none;display:flex;align-items:center;gap:12px;padding:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#005E80" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <span style="font-weight:700;color:#005E80;">مدیریت مشتریان</span>
            </a>
            <a href="<?php echo admin_url('admin.php?page=pakpajoh-texts'); ?>" class="pakpajoh-card" style="text-decoration:none;display:flex;align-items:center;gap:12px;padding:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#B08D5A" stroke-width="1.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                <span style="font-weight:700;color:#B08D5A;">ویرایش جملات</span>
            </a>
            <a href="<?php echo admin_url('admin.php?page=pakpajoh-portfolio'); ?>" class="pakpajoh-card" style="text-decoration:none;display:flex;align-items:center;gap:12px;padding:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#388E3C" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                <span style="font-weight:700;color:#388E3C;">مدیریت نمونه‌کارها</span>
            </a>
            <a href="<?php echo admin_url('admin.php?page=pakpajoh-sms'); ?>" class="pakpajoh-card" style="text-decoration:none;display:flex;align-items:center;gap:12px;padding:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                <span style="font-weight:700;color:#4CAF50;">پنل پیامکی</span>
            </a>
            <a href="<?php echo admin_url('edit.php?post_type=post'); ?>" class="pakpajoh-card" style="text-decoration:none;display:flex;align-items:center;gap:12px;padding:20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                <span style="font-weight:700;color:#C9A96E;">مدیریت نوشته‌ها</span>
            </a>
        </div>
    </div>
    <?php
}

// بارگذاری فایل‌های زیرمنو
require_once __DIR__ . '/install.php';
require_once __DIR__ . '/modal-system.php';
require_once __DIR__ . '/leads.php';
require_once __DIR__ . '/customers.php';
require_once __DIR__ . '/texts.php';
require_once __DIR__ . '/portfolio.php';
require_once __DIR__ . '/sms.php';

// ===== بارگذاری CSS اختصاصی پنل =====
add_action( 'admin_enqueue_scripts', 'pakpajoh_admin_enqueue_styles' );
function pakpajoh_admin_enqueue_styles() {
    $uri = get_template_directory_uri();
    wp_enqueue_style( 'pakpajoh-admin', $uri . '/assets/css/admin/admin-panel.css', array(), '1.0' );
}

// ===== تبدیل پیشخوان وردپرس به داشبورد اختصاصی =====
add_filter( 'login_redirect', 'pakpajoh_login_redirect', 10, 3 );
function pakpajoh_login_redirect( $redirect_to, $requested_redirect_to, $user ) {
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        if ( in_array( 'administrator', $user->roles ) ) {
            return admin_url( 'admin.php?page=pakpajoh-panel' );
        }
    }
    return $redirect_to;
}

// حذف ویجت‌های پیشخوان پیش‌فرض
add_action( 'wp_dashboard_setup', 'pakpajoh_remove_dashboard_widgets' );
function pakpajoh_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
}