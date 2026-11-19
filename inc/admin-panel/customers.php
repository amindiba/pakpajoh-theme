<?php
/**
 * مدیریت مشتریان و CRM
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_customers_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'pakpajoh_customers';
    $notes_table = $wpdb->prefix . 'pakpajoh_crm_notes';

    $action = isset( $_GET['action'] ) ? sanitize_text_field( $_GET['action'] ) : 'list';
    $customer_id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

    // ذخیره مشتری (افزودن/ویرایش)
    if ( isset( $_POST['pakpajoh_customer_save'] ) ) {
        if ( ! wp_verify_nonce( $_POST['pakpajoh_customer_nonce'], 'pakpajoh_customer_save' ) ) { wp_die( 'خطای امنیتی' ); }
        $data = array(
            'company_name' => sanitize_text_field( $_POST['company_name'] ),
            'contact_name' => sanitize_text_field( $_POST['contact_name'] ),
            'phone'        => sanitize_text_field( $_POST['phone'] ),
            'email'        => sanitize_email( $_POST['email'] ),
            'address'      => sanitize_textarea_field( $_POST['address'] ),
            'city'         => sanitize_text_field( $_POST['city'] ),
            'industry'     => sanitize_text_field( $_POST['industry'] ),
            'status'       => sanitize_text_field( $_POST['status'] ),
            'notes'        => sanitize_textarea_field( $_POST['notes'] ),
        );
        if ( $customer_id > 0 ) { $wpdb->update( $table, $data, array( 'id' => $customer_id ) ); }
        else { $wpdb->insert( $table, $data ); $customer_id = $wpdb->insert_id; }
        echo '<div class="notice notice-success"><p>مشتری ذخیره شد.</p></div>';
        $action = 'list';
    }

    // ذخیره یادداشت CRM
    if ( isset( $_POST['pakpajoh_note_save'] ) ) {
        if ( ! wp_verify_nonce( $_POST['pakpajoh_note_nonce'], 'pakpajoh_note_save' ) ) { wp_die( 'خطای امنیتی' ); }
        $wpdb->insert( $notes_table, array(
            'customer_id' => $customer_id,
            'note_type'   => sanitize_text_field( $_POST['note_type'] ),
            'content'     => sanitize_textarea_field( $_POST['note_content'] ),
        ) );
        echo '<div class="notice notice-success"><p>یادداشت ثبت شد.</p></div>';
    }

    // حذف مشتری
    if ( $action === 'delete' && $customer_id > 0 ) {
        $wpdb->delete( $table, array( 'id' => $customer_id ) );
        $wpdb->delete( $notes_table, array( 'customer_id' => $customer_id ) );
        echo '<div class="notice notice-success"><p>مشتری حذف شد.</p></div>';
        $action = 'list';
    }

    // فرم افزودن/ویرایش
    if ( $action === 'add' || $action === 'edit' ) {
        $customer = $customer_id > 0 ? $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $customer_id ) ) : null;
        ?>
        <div class="wrap">
            <h1><?php echo $customer_id > 0 ? 'ویرایش مشتری' : 'افزودن مشتری جدید'; ?></h1>
            <form method="post">
                <?php wp_nonce_field( 'pakpajoh_customer_save', 'pakpajoh_customer_nonce' ); ?>
                <input type="hidden" name="pakpajoh_customer_save" value="1">
                <table class="form-table">
                    <tr><th><label for="company_name">نام شرکت</label></th><td><input type="text" id="company_name" name="company_name" value="<?php echo esc_attr( $customer ? $customer->company_name : '' ); ?>" class="regular-text" required></td></tr>
                    <tr><th><label for="contact_name">نام شخص تماس</label></th><td><input type="text" id="contact_name" name="contact_name" value="<?php echo esc_attr( $customer ? $customer->contact_name : '' ); ?>" class="regular-text"></td></tr>
                    <tr><th><label for="phone">تلفن</label></th><td><input type="text" id="phone" name="phone" value="<?php echo esc_attr( $customer ? $customer->phone : '' ); ?>" class="regular-text"></td></tr>
                    <tr><th><label for="email">ایمیل</label></th><td><input type="email" id="email" name="email" value="<?php echo esc_attr( $customer ? $customer->email : '' ); ?>" class="regular-text"></td></tr>
                    <tr><th><label for="address">آدرس</label></th><td><textarea id="address" name="address" rows="3" class="large-text"><?php echo esc_textarea( $customer ? $customer->address : '' ); ?></textarea></td></tr>
                    <tr><th><label for="city">شهر</label></th><td><input type="text" id="city" name="city" value="<?php echo esc_attr( $customer ? $customer->city : '' ); ?>" class="regular-text"></td></tr>
                    <tr><th><label for="industry">صنعت</label></th><td><input type="text" id="industry" name="industry" value="<?php echo esc_attr( $customer ? $customer->industry : '' ); ?>" class="regular-text"></td></tr>
                    <tr><th><label for="status">وضعیت</label></th><td><select id="status" name="status"><option value="active" <?php selected( $customer ? $customer->status : '', 'active' ); ?>>فعال</option><option value="inactive" <?php selected( $customer ? $customer->status : '', 'inactive' ); ?>>غیرفعال</option><option value="potential" <?php selected( $customer ? $customer->status : '', 'potential' ); ?>>بالقوه</option></select></td></tr>
                    <tr><th><label for="notes">یادداشت</label></th><td><textarea id="notes" name="notes" rows="4" class="large-text"><?php echo esc_textarea( $customer ? $customer->notes : '' ); ?></textarea></td></tr>
                </table>
                <?php submit_button( 'ذخیره مشتری' ); ?>
                <a href="?page=pakpajoh-customers" class="button">بازگشت</a>
            </form>
        </div>
        <?php
        return;
    }

    // نمایش جزئیات مشتری و CRM
    if ( $action === 'view' && $customer_id > 0 ) {
        $customer = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $customer_id ) );
        $notes = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $notes_table WHERE customer_id = %d ORDER BY created_at DESC", $customer_id ) );
        ?>
        <div class="wrap">
            <h1>جزئیات مشتری: <?php echo esc_html( $customer->company_name ); ?></h1>
            <p><a href="?page=pakpajoh-customers" class="button">← بازگشت به لیست</a> <a href="?page=pakpajoh-customers&action=edit&id=<?php echo $customer_id; ?>" class="button">ویرایش</a></p>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:20px;">
                <div class="pakpajoh-card">
                    <h3>اطلاعات مشتری</h3>
                    <p><strong>شرکت:</strong> <?php echo esc_html( $customer->company_name ); ?></p>
                    <p><strong>شخص تماس:</strong> <?php echo esc_html( $customer->contact_name ); ?></p>
                    <p><strong>تلفن:</strong> <?php echo esc_html( $customer->phone ); ?></p>
                    <p><strong>ایمیل:</strong> <?php echo esc_html( $customer->email ); ?></p>
                    <p><strong>آدرس:</strong> <?php echo esc_html( $customer->address ); ?></p>
                    <p><strong>شهر:</strong> <?php echo esc_html( $customer->city ); ?></p>
                    <p><strong>صنعت:</strong> <?php echo esc_html( $customer->industry ); ?></p>
                    <p><strong>وضعیت:</strong> <?php echo esc_html( $customer->status ); ?></p>
                    <p><strong>یادداشت:</strong> <?php echo esc_html( $customer->notes ); ?></p>
                </div>
                <div class="pakpajoh-card">
                    <h3>ثبت یادداشت جدید</h3>
                    <form method="post">
                        <?php wp_nonce_field( 'pakpajoh_note_save', 'pakpajoh_note_nonce' ); ?>
                        <input type="hidden" name="pakpajoh_note_save" value="1">
                        <p><select name="note_type"><option value="call">تماس تلفنی</option><option value="meeting">جلسه</option><option value="email">ایمیل</option><option value="note">یادداشت</option></select></p>
                        <p><textarea name="note_content" rows="4" class="large-text" placeholder="متن یادداشت..."></textarea></p>
                        <?php submit_button( 'ثبت یادداشت', 'secondary' ); ?>
                    </form>
                </div>
            </div>
            <h2 style="margin-top:30px;">تاریخچه ارتباط (CRM)</h2>
            <?php if ( empty( $notes ) ) : ?>
                <p>هنوز یادداشتی ثبت نشده است.</p>
            <?php else : ?>
                <table class="wp-list-table widefat fixed striped">
                    <thead><tr><th>نوع</th><th>متن</th><th>تاریخ</th></tr></thead>
                    <tbody>
                        <?php foreach ( $notes as $note ) : ?>
                            <tr><td><?php echo esc_html( $note->note_type ); ?></td><td><?php echo esc_html( $note->content ); ?></td><td><?php echo esc_html( $note->created_at ); ?></td></tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <?php
        return;
    }

    // لیست مشتریان
    $search = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
    $status_filter = isset( $_GET['status_filter'] ) ? sanitize_text_field( $_GET['status_filter'] ) : '';
    $where = "WHERE 1=1";
    if ( $search ) { $where .= $wpdb->prepare( " AND (company_name LIKE %s OR contact_name LIKE %s OR phone LIKE %s OR email LIKE %s)", "%$search%", "%$search%", "%$search%", "%$search%" ); }
    if ( $status_filter ) { $where .= $wpdb->prepare( " AND status = %s", $status_filter ); }
    $customers = $wpdb->get_results( "SELECT * FROM $table $where ORDER BY created_at DESC" );
    ?>
    <div class="wrap">
        <h1>مدیریت مشتریان</h1>
        <p style="color:#5A6B7D;margin-bottom:20px;font-size:0.9rem;">در این بخش، اطلاعات کامل مشتریان (نام شرکت، شخص تماس، تلفن، ایمیل، آدرس، صنعت و وضعیت) را مدیریت می‌کنید. می‌توانید مشتری جدید اضافه کنید، اطلاعات را ویرایش کنید، تاریخچه ارتباط (CRM) را ثبت و مشاهده کنید و در صورت نیاز، مشتری را حذف کنید.</p>
        
        <div style="margin-bottom:20px;display:flex;gap:8px;flex-wrap:wrap;align-items:center;">
            <a href="?page=pakpajoh-customers&action=add" class="button button-primary" style="border-radius:50px;">افزودن مشتری جدید</a>
            <input type="text" id="pakpajoh-customers-search" placeholder="جستجوی زنده..." style="flex:1;min-width:200px;padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
            <select id="pakpajoh-customers-status" style="padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
                <option value="">همه وضعیت‌ها</option>
                <option value="active">فعال</option>
                <option value="inactive">غیرفعال</option>
                <option value="potential">بالقوه</option>
            </select>
            <a href="?page=pakpajoh-customers" class="button" style="border-radius:50px;">حذف فیلترها</a>
        </div>

        <?php if ( empty( $customers ) ) : ?>
            <p>هنوز مشتری‌ای ثبت نشده است.</p>
        <?php else : ?>
            <table class="wp-list-table widefat fixed striped" id="pakpajoh-customers-table">
                <thead><tr><th>نام شرکت</th><th>شخص تماس</th><th>تلفن</th><th>ایمیل</th><th>وضعیت</th><th>عملیات</th></tr></thead>
                <tbody>
                    <?php foreach ( $customers as $c ) : ?>
                        <tr data-status="<?php echo esc_attr( $c->status ); ?>">
                            <td><?php echo esc_html( $c->company_name ); ?></td>
                            <td><?php echo esc_html( $c->contact_name ); ?></td>
                            <td><?php echo esc_html( $c->phone ); ?></td>
                            <td><?php echo esc_html( $c->email ); ?></td>
                            <td><?php echo esc_html( $c->status ); ?></td>
                            <td>
                                <a href="?page=pakpajoh-customers&action=view&id=<?php echo $c->id; ?>" class="pakpajoh-icon-btn view" data-tooltip="مشاهده جزئیات و تاریخچه CRM">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </a>
                                <a href="?page=pakpajoh-customers&action=edit&id=<?php echo $c->id; ?>" class="pakpajoh-icon-btn edit" data-tooltip="ویرایش اطلاعات مشتری">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </a>
                                <a href="#" class="pakpajoh-icon-btn delete" data-tooltip="حذف مشتری" onclick="openDeleteCustomerModal(<?php echo $c->id; ?>, '<?php echo esc_js( $c->company_name ); ?>', '<?php echo esc_js( $c->status ); ?>'); return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var searchInput = document.getElementById('pakpajoh-customers-search');
        var statusSelect = document.getElementById('pakpajoh-customers-status');
        var table = document.getElementById('pakpajoh-customers-table');
        if (!table) return;
        var rows = table.querySelectorAll('tbody tr');
        function filterTable() {
            var query = searchInput.value.toLowerCase();
            var status = statusSelect.value;
            rows.forEach(function(row) {
                var text = row.textContent.toLowerCase();
                var rowStatus = row.getAttribute('data-status');
                var match = text.indexOf(query) !== -1;
                if (status) match = match && (rowStatus === status);
                row.style.display = match ? '' : 'none';
            });
        }
        searchInput.addEventListener('input', filterTable);
        statusSelect.addEventListener('change', filterTable);
    });

    function openDeleteCustomerModal(id, name, status) {
        var html = '<h3 style="margin-bottom:12px;color:#D32F2F;">حذف مشتری</h3>';
        html += '<p style="color:#333;margin-bottom:8px;">آیا از حذف مشتری <strong>' + name + '</strong> با وضعیت <strong>' + status + '</strong> مطمئن هستید؟</p>';
        html += '<p style="color:#888;font-size:0.85rem;margin-bottom:24px;">این عمل غیرقابل بازگشت است.</p>';
        html += '<div style="display:flex;gap:12px;justify-content:flex-end;">';
        html += '<a href="?page=pakpajoh-customers&action=delete&id=' + id + '" class="button button-primary" style="background:#D32F2F;border-color:#D32F2F;">بله، حذف کن</a>';
        html += '<button type="button" onclick="pakpajohCloseModal()" class="button">خیر، حذف نکن</button>';
        html += '</div>';
        pakpajohOpenModal(html);
    }
    </script>
    <?php
}