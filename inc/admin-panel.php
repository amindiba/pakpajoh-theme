<?php
/**
 * پنل مدیریت پاک‌پژوه
 * تمام محتوای صفحه خدمات از این پنل قابل ویرایش است.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// ===== ۱. افزودن منوی مدیریت =====
add_action( 'admin_menu', 'pakpajoh_admin_menu' );
function pakpajoh_admin_menu() {
    add_menu_page(
        'مدیریت پاک‌پژوه',
        'مدیریت پاک‌پژوه',
        'manage_options',
        'pakpajoh-panel',
        'pakpajoh_panel_page',
        "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSI+PHBhdGggZD0iTTExIDIwQTcgNyAwIDAgMSA5LjggNi4xQzE1LjUgNSAxNyA0LjQ4IDE5IDJjMSAyIDIgNC4xOCAyIDggMCA1LjUtNC43OCAxMC0xMCAxMFoiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjxwYXRoIGQ9Ik0yIDIxYzAtMyAxLjg1LTUuMzYgNS4wOC02QzkuNSAxNC41MiAxMiAxMyAxMyAxMiIgc3Ryb2tlPSIjNENBRjUwIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PC9zdmc+",
        2
    );
}

// ===== ۲. ثبت تنظیمات =====
add_action( 'admin_init', 'pakpajoh_register_settings' );
function pakpajoh_register_settings() {
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_hero_title' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_hero_desc' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_hero_btn1' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_hero_btn2' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_cards_title' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_passport_title' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_passport_desc' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_scope_title' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_scope_desc' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_docs_title' );
    register_setting( 'pakpajoh_panel_group', 'pakpajoh_docs_subtitle' );
}

// ===== ۳. صفحه تنظیمات =====
function pakpajoh_panel_page() {
    ?>
    <div class="wrap">
        <h1>مدیریت پاک‌پژوه</h1>
        <p>از این پنل می‌توانید محتوای صفحه خدمات را ویرایش کنید.</p>
        <form method="post" action="options.php">
            <?php settings_fields( 'pakpajoh_panel_group' ); ?>
            <h2>بخش هیرو</h2>
            <table class="form-table">
                <tr><th><label for="hero_title">عنوان هیرو</label></th>
                <td><input type="text" id="hero_title" name="pakpajoh_hero_title" value="<?php echo esc_attr( get_option( 'pakpajoh_hero_title', 'خدمات طراحی، مدیریت و اجرای پاکیزگی' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><label for="hero_desc">توضیحات هیرو</label></th>
                <td><textarea id="hero_desc" name="pakpajoh_hero_desc" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'pakpajoh_hero_desc', 'پاک پژوه با شناخت شرایط هر محیط...' ) ); ?></textarea></td></tr>
                <tr><th><label for="hero_btn1">متن دکمه اول</label></th>
                <td><input type="text" id="hero_btn1" name="pakpajoh_hero_btn1" value="<?php echo esc_attr( get_option( 'pakpajoh_hero_btn1', 'درخواست بازدید اولیه رایگان' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><label for="hero_btn2">متن دکمه دوم</label></th>
                <td><input type="text" id="hero_btn2" name="pakpajoh_hero_btn2" value="<?php echo esc_attr( get_option( 'pakpajoh_hero_btn2', 'مشاهده خدمات' ) ); ?>" class="regular-text"></td></tr>
            </table>
            <h2>بخش چهار محور</h2>
            <table class="form-table">
                <tr><th><label for="cards_title">عنوان بخش</label></th>
                <td><input type="text" id="cards_title" name="pakpajoh_cards_title" value="<?php echo esc_attr( get_option( 'pakpajoh_cards_title', 'چهار محور یک نظام یکپارچه پاکیزگی' ) ); ?>" class="regular-text"></td></tr>
            </table>
            <h2>بخش شناسنامه فضا</h2>
            <table class="form-table">
                <tr><th><label for="passport_title">عنوان</label></th>
                <td><input type="text" id="passport_title" name="pakpajoh_passport_title" value="<?php echo esc_attr( get_option( 'pakpajoh_passport_title', 'شناسنامه فضا؛ نقطه شروع برنامه‌ریزی دقیق' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><label for="passport_desc">توضیحات</label></th>
                <td><textarea id="passport_desc" name="pakpajoh_passport_desc" rows="4" class="large-text"><?php echo esc_textarea( get_option( 'pakpajoh_passport_desc', 'برای تدوین برنامه‌ای متناسب با هر محیط...' ) ); ?></textarea></td></tr>
            </table>
            <h2>بخش محدوده همکاری</h2>
            <table class="form-table">
                <tr><th><label for="scope_title">عنوان</label></th>
                <td><input type="text" id="scope_title" name="pakpajoh_scope_title" value="<?php echo esc_attr( get_option( 'pakpajoh_scope_title', 'خدمات متناسب با نیاز هر سازمان تعریف می‌شوند' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><label for="scope_desc">توضیحات</label></th>
                <td><textarea id="scope_desc" name="pakpajoh_scope_desc" rows="3" class="large-text"><?php echo esc_textarea( get_option( 'pakpajoh_scope_desc', 'دامنه خدمات پاک پژوه بر اساس نوع فعالیت سازمان...' ) ); ?></textarea></td></tr>
            </table>
            <h2>بخش نمونه مستندات</h2>
            <table class="form-table">
                <tr><th><label for="docs_title">عنوان</label></th>
                <td><input type="text" id="docs_title" name="pakpajoh_docs_title" value="<?php echo esc_attr( get_option( 'pakpajoh_docs_title', 'آنچه مدیریت می‌شود، باید ثبت و ارزیابی باشد' ) ); ?>" class="regular-text"></td></tr>
                <tr><th><label for="docs_subtitle">زیرعنوان</label></th>
                <td><input type="text" id="docs_subtitle" name="pakpajoh_docs_subtitle" value="<?php echo esc_attr( get_option( 'pakpajoh_docs_subtitle', 'نمونه مستنداتی که در فرایند خدمات پاک پژوه تولید می‌شود.' ) ); ?>" class="regular-text"></td></tr>
            </table>
            <?php submit_button( 'ذخیره تغییرات' ); ?>
        </form>
    </div>
    <?php
}

// ===== ۴. فونت وزیرمتن برای کل پنل مدیریت =====
add_action( 'admin_head', 'pakpajoh_admin_font' );
function pakpajoh_admin_font() {
    $font_url = get_template_directory_uri() . '/assets/fonts/Vazirmatn-Regular.woff2';
    ?>
    <style>
        @font-face {
            font-family: 'Vazirmatn';
            src: url('<?php echo esc_url( $font_url ); ?>') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        body, #adminmenu, #adminmenu a, #wpadminbar, #wpadminbar a,
        .wp-core-ui, .wp-core-ui .button, .wp-core-ui .button-primary,
        input, textarea, select, .wrap h1, .wrap h2, .wrap h3,
        .form-table th, .form-table td, .notice, .updated, .error {
            font-family: 'Vazirmatn', Tahoma, sans-serif !important;
        }
    </style>
    <?php
}
