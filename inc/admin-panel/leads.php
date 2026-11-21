<?php
/**
 * مدیریت سرنخ‌ها
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_lead_status_label( $status ) {
    $labels = array(
        'new'       => 'جدید',
        'contacted' => 'تماس گرفته شده',
        'qualified' => 'واجد شرایط',
        'won'       => 'تبدیل شده به مشتری',
        'lost'      => 'از دست رفته',
    );
    return isset( $labels[ $status ] ) ? $labels[ $status ] : $status;
}

function pakpajoh_lead_status_icon( $status ) {
    $icons = array(
        'new'       => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2196F3" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
        'contacted' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FF9800" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'qualified' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
        'won'       => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
        'lost'      => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#D32F2F" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>',
    );
    return isset( $icons[ $status ] ) ? $icons[ $status ] : '';
}

function pakpajoh_lead_source_label( $source ) {
    $labels = array(
        'site'      => 'فرم سایت',
        'request'   => 'فرم درخواست',
        'modal'     => 'مودال مشاوره',
        'newsletter'=> 'خبرنامه',
    );
    return isset( $labels[ $source ] ) ? $labels[ $source ] : $source;
}

function pakpajoh_leads_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'pakpajoh_leads';
    $customers_table = $wpdb->prefix . 'pakpajoh_customers';

    $action = isset( $_GET['action'] ) ? sanitize_text_field( $_GET['action'] ) : 'list';
    $lead_id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

    // تبدیل سرنخ به مشتری
    if ( $action === 'convert' && $lead_id > 0 ) {
        $lead = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $lead_id ) );
        if ( $lead ) {
            $wpdb->insert( $customers_table, array(
                'company_name' => ! empty( $lead->organization ) ? $lead->organization : $lead->name,
                'contact_name' => $lead->name,
                'phone'        => $lead->phone,
                'email'        => $lead->email,
                'address'      => $lead->address,
                'city'         => '',
                'industry'     => '',
                'status'       => 'active',
                'notes'        => 'تبدیل شده از سرنخ شماره ' . $lead_id,
            ) );
            $wpdb->update( $table, array( 'status' => 'won' ), array( 'id' => $lead_id ) );
            echo '<div class="notice notice-success"><p>سرنخ با موفقیت به مشتری تبدیل شد.</p></div>';
        }
        $action = 'list';
    }

    // تغییر وضعیت
    if ( $action === 'status' && $lead_id > 0 && isset( $_GET['status'] ) ) {
        $new_status = sanitize_text_field( $_GET['status'] );
        $wpdb->update( $table, array( 'status' => $new_status ), array( 'id' => $lead_id ) );
        echo '<div class="notice notice-success"><p>وضعیت سرنخ به‌روزرسانی شد.</p></div>';
        $action = 'list';
    }

    // نمایش جزئیات
    if ( $action === 'view' && $lead_id > 0 ) {
        $lead = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table WHERE id = %d", $lead_id ) );
        if ( $lead ) {
            ?>
            <div class="wrap">
                <h1>جزئیات سرنخ: <?php echo esc_html( $lead->name ); ?></h1>
                <p><a href="?page=pakpajoh-leads" class="button">← بازگشت به لیست</a></p>
                <div class="pakpajoh-card" style="max-width:600px;margin-top:20px;">
                    <table class="form-table">
                        <tr><th>نام:</th><td><?php echo esc_html( $lead->name ); ?></td></tr>
                        <tr><th>تلفن:</th><td><?php echo esc_html( $lead->phone ); ?></td></tr>
                        <tr><th>ایمیل:</th><td><?php echo esc_html( $lead->email ); ?></td></tr>
                        <tr><th>سازمان:</th><td><?php echo esc_html( $lead->organization ); ?></td></tr>
                        <tr><th>سمت:</th><td><?php echo esc_html( $lead->contact_position ); ?></td></tr>
                        <tr><th>نشانی محل بازدید:</th><td><?php echo nl2br( esc_html( $lead->address ) ); ?></td></tr>
                        <tr><th>مساحت تقریبی:</th><td><?php echo esc_html( $lead->site_area ); ?></td></tr>
                        <tr><th>کد ملی:</th><td><?php echo esc_html( $lead->national_id ); ?></td></tr>
                        <tr><th>منبع:</th><td><?php echo esc_html( pakpajoh_lead_source_label( $lead->source ) ); ?></td></tr>
                        <tr><th>نوع خدمت:</th><td><?php echo esc_html( $lead->service ); ?></td></tr>
                        <tr><th>پیام:</th><td><?php echo nl2br( esc_html( $lead->message ) ); ?></td></tr>
                        <tr><th>وضعیت:</th><td><?php echo esc_html( pakpajoh_lead_status_label( $lead->status ) ); ?></td></tr>
                        <tr><th>تاریخ:</th><td><?php echo esc_html( $lead->created_at ); ?></td></tr>
                    </table>
                </div>
            </div>
            <?php
            return;
        }
    }

        // حذف سرنخ
    if ( $action === 'delete' && $lead_id > 0 ) {
        $wpdb->delete( $table, array( 'id' => $lead_id ) );
        echo '<div class="notice notice-success"><p>سرنخ با موفقیت حذف شد.</p></div>';
        $action = 'list';
    }
$search = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
    $status_filter = isset( $_GET['status_filter'] ) ? sanitize_text_field( $_GET['status_filter'] ) : '';
    $source_filter = isset( $_GET['source_filter'] ) ? sanitize_text_field( $_GET['source_filter'] ) : '';

    $where = "WHERE 1=1";
    if ( $search ) { $where .= $wpdb->prepare( " AND (name LIKE %s OR phone LIKE %s OR email LIKE %s)", "%$search%", "%$search%", "%$search%" ); }
    if ( $status_filter ) { $where .= $wpdb->prepare( " AND status = %s", $status_filter ); }
    if ( $source_filter ) { $where .= $wpdb->prepare( " AND source = %s", $source_filter ); }

    $leads = $wpdb->get_results( "SELECT * FROM $table $where ORDER BY created_at DESC" );
    ?>
    <div class="wrap">
        <h1>مدیریت سرنخ‌ها</h1>
        <p style="color:#5A6B7D;margin-bottom:20px;font-size:0.9rem;">در این بخش، تمام فرم‌های تکمیل‌شده در سایت (درخواست‌های مشاوره، تماس، و...) را می‌بینید. می‌توانید جستجو کنید، وضعیت هر سرنخ را تغییر دهید، جزئیات کامل را مشاهده کنید و در صورت نیاز، آن را به مشتری تبدیل کنید.</p>
        
        <div style="margin-bottom:20px;display:flex;gap:8px;flex-wrap:wrap;align-items:center;">
            <input type="text" id="pakpajoh-leads-search" placeholder="جستجوی زنده..." style="flex:1;min-width:200px;padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
            <select id="pakpajoh-leads-status" style="padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
                <option value="">همه وضعیت‌ها</option>
                <option value="new">جدید</option>
                <option value="contacted">تماس گرفته شده</option>
                <option value="qualified">واجد شرایط</option>
                <option value="won">تبدیل شده</option>
                <option value="lost">از دست رفته</option>
            </select>
            <select id="pakpajoh-leads-source" style="padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
                <option value="">همه منابع</option>
                <option value="site">فرم تماس</option>
                <option value="request">فرم درخواست</option>
                <option value="modal">مودال مشاوره</option>
                <option value="newsletter">خبرنامه</option>
            </select>
            <a href="?page=pakpajoh-leads" class="button" style="border-radius:50px;padding:8px 16px;">حذف فیلترها</a>
        </div>

        <?php if ( empty( $leads ) ) : ?>
            <p>هنوز سرنخی ثبت نشده است.</p>
        <?php else : ?>
            <table class="wp-list-table widefat fixed striped" id="pakpajoh-leads-table">
                <thead>
                    <tr>
                        <th>نام</th>
                        <th>تلفن</th>
                        <th>منبع فرم</th>
                        <th>نوع خدمت</th>
                        <th>وضعیت</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $leads as $lead ) : ?>
                        <tr data-status="<?php echo esc_attr( $lead->status ); ?>" data-source="<?php echo esc_attr( $lead->source ); ?>">
                            <td><?php echo esc_html( $lead->name ); ?></td>
                            <td><?php echo esc_html( $lead->phone ); ?></td>
                            <td><?php echo esc_html( pakpajoh_lead_source_label( $lead->source ) ); ?></td>
                            <td><?php echo esc_html( $lead->service ); ?></td>
                            <td style="display:flex;align-items:center;gap:6px;">
                                <?php echo pakpajoh_lead_status_icon( $lead->status ); ?>
                                <?php echo esc_html( pakpajoh_lead_status_label( $lead->status ) ); ?>
                            </td>
                            <td><?php echo esc_html( $lead->created_at ); ?></td>
                            <td>
                                <a href="?page=pakpajoh-leads&action=view&id=<?php echo esc_attr( $lead->id ); ?>" class="pakpajoh-icon-btn view" data-tooltip="مشاهده جزئیات سرنخ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                </a>
                                <?php if ( $lead->status !== 'won' ) : ?>
                                    <a href="?page=pakpajoh-leads&action=convert&id=<?php echo esc_attr( $lead->id ); ?>" class="pakpajoh-icon-btn add" data-tooltip="تبدیل به مشتری" onclick="return confirm('این سرنخ به مشتری تبدیل شود؟');">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                                    </a>
                                <?php endif; ?>
                                <a href="#" class="pakpajoh-icon-btn status-btn" data-tooltip="تغییر وضعیت سرنخ" onclick="openStatusModal(<?php echo esc_attr( $lead->id ); ?>); return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                </a>
                                <a href="#" class="pakpajoh-icon-btn delete" data-tooltip="حذف سرنخ" onclick="openDeleteModal(<?php echo esc_attr( $lead->id ); ?>, '<?php echo esc_js( $lead->name ); ?>', '<?php echo esc_js( pakpajoh_lead_status_label( $lead->status ) ); ?>'); return false;">
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
        var searchInput = document.getElementById('pakpajoh-leads-search');
        var statusSelect = document.getElementById('pakpajoh-leads-status');
        var sourceSelect = document.getElementById('pakpajoh-leads-source');
        var table = document.getElementById('pakpajoh-leads-table');
        if (!table) return;
        var rows = table.querySelectorAll('tbody tr');

        function filterTable() {
            var query = searchInput.value.toLowerCase();
            var status = statusSelect.value;
            var source = sourceSelect.value;
            rows.forEach(function(row) {
                var text = row.textContent.toLowerCase();
                var rowStatus = row.getAttribute('data-status');
                var rowSource = row.getAttribute('data-source');
                var match = text.indexOf(query) !== -1;
                if (status) match = match && (rowStatus === status);
                if (source) match = match && (rowSource === source);
                row.style.display = match ? '' : 'none';
            });
        }
        searchInput.addEventListener('input', filterTable);
        statusSelect.addEventListener('change', filterTable);
        sourceSelect.addEventListener('change', filterTable);
    });

    function openStatusModal(leadId) {
        var html = '<h3 style="margin-bottom:20px;color:#005E80;">تغییر وضعیت سرنخ</h3>';
        html += '<div style="display:flex;flex-direction:column;gap:10px;">';
        var statuses = [
            { value: 'new', label: 'جدید', bg: '#E3F2FD', color: '#2196F3' },
            { value: 'contacted', label: 'تماس گرفته شده', bg: '#FFF3E0', color: '#FF9800' },
            { value: 'qualified', label: 'واجد شرایط', bg: '#E8F5E9', color: '#4CAF50' },
            { value: 'won', label: 'تبدیل شده', bg: '#E8F5E9', color: '#2E7D32' },
            { value: 'lost', label: 'از دست رفته', bg: '#FFEBEE', color: '#D32F2F' }
        ];
        statuses.forEach(function(s) {
            html += '<a href="?page=pakpajoh-leads&action=status&id=' + leadId + '&status=' + s.value + '" style="padding:12px 16px;background:' + s.bg + ';color:' + s.color + ';border-radius:10px;text-decoration:none;font-weight:600;">' + s.label + '</a>';
        });
        html += '</div>';
        pakpajohOpenModal(html);
    }
        function openDeleteModal(leadId, leadName, leadStatus) {
        var html = '<h3 style="margin-bottom:12px;color:#D32F2F;">حذف سرنخ</h3>';
        html += '<p style="color:#333;margin-bottom:8px;">آیا از حذف سرنخ <strong>' + leadName + '</strong> در وضعیت <strong>' + leadStatus + '</strong> مطمئن هستید؟</p>';
        html += '<p style="color:#888;font-size:0.85rem;margin-bottom:24px;">این عمل غیرقابل بازگشت است.</p>';
        html += '<div style="display:flex;gap:12px;justify-content:flex-end;">';
        html += '<a href="?page=pakpajoh-leads&action=delete&id=' + leadId + '" class="button button-primary" style="background:#D32F2F;border-color:#D32F2F;">بله، حذف کن</a>';
        html += '<button type="button" onclick="pakpajohCloseModal()" class="button">خیر، حذف نکن</button>';
        html += '</div>';
        pakpajohOpenModal(html);
    }
</script>
    <?php
}