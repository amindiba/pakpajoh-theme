<?php
/**
 * پنل پیامکی — نسخه کامل
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_sms_page() {
    global $wpdb;
    $leads_table = $wpdb->prefix . 'pakpajoh_leads';
    $customers_table = $wpdb->prefix . 'pakpajoh_customers';
    
    $leads = $wpdb->get_results( "SELECT name, phone FROM $leads_table WHERE phone != '' ORDER BY created_at DESC" );
    $customers = $wpdb->get_results( "SELECT company_name as name, phone FROM $customers_table WHERE phone != '' ORDER BY created_at DESC" );
    ?>
    <div class="wrap">
        <h1>پنل پیامکی</h1>
        <p style="color:#5A6B7D;margin-bottom:20px;font-size:0.9rem;">در این بخش، پیامک‌های ارسالی و دریافتی را مدیریت می‌کنید. می‌توانید به سرنخ‌ها، مشتریان یا شماره دلخواه پیامک ارسال کنید، متن پیامک را با شمارنده پیامک بنویسید، تنظیمات پنل پیامکی را پیکربندی کنید و تاریخچه پیامک‌ها را مشاهده کنید.</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:20px;margin-top:20px;">
            <!-- کارت ارسال پیامک -->
            <div class="pakpajoh-card">
                <h3 style="margin-bottom:16px;color:#005E80;">ارسال پیامک</h3>
                <form method="post" onsubmit="return false;">
                    <div style="display:flex;gap:8px;margin-bottom:12px;flex-wrap:wrap;">
                        <button type="button" class="button pakpajoh-sms-tab active" data-tab="leads" style="border-radius:50px;">سرنخ‌ها</button>
                        <button type="button" class="button pakpajoh-sms-tab" data-tab="customers" style="border-radius:50px;">مشتریان</button>
                        <button type="button" class="button pakpajoh-sms-tab" data-tab="custom" style="border-radius:50px;">شماره دلخواه</button>
                    </div>
                    <div id="pakpajoh-sms-search-wrapper" style="margin-bottom:12px;">
                        <input type="text" id="pakpajoh-sms-search" placeholder="جستجوی زنده..." style="width:100%;padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
                    </div>
                    <div class="pakpajoh-sms-recipient-list" id="pakpajoh-sms-leads-list">
                        <div style="max-height:200px;overflow-y:auto;border:1px solid #E0E4E8;border-radius:10px;padding:8px;">
                            <?php foreach ( $leads as $lead ) : ?>
                                <label class="pakpajoh-sms-recipient-item" style="display:flex;align-items:center;gap:8px;padding:6px;border-radius:6px;cursor:pointer;" data-name="<?php echo esc_attr( $lead->name ); ?>" data-phone="<?php echo esc_attr( $lead->phone ); ?>">
                                    <input type="radio" name="sms_to_lead" value="<?php echo esc_attr( $lead->phone ); ?>">
                                    <span><?php echo esc_html( $lead->name . ' - ' . $lead->phone ); ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="pakpajoh-sms-recipient-list" id="pakpajoh-sms-customers-list" style="display:none;">
                        <div style="max-height:200px;overflow-y:auto;border:1px solid #E0E4E8;border-radius:10px;padding:8px;">
                            <?php foreach ( $customers as $customer ) : ?>
                                <label class="pakpajoh-sms-recipient-item" style="display:flex;align-items:center;gap:8px;padding:6px;border-radius:6px;cursor:pointer;" data-name="<?php echo esc_attr( $customer->name ); ?>" data-phone="<?php echo esc_attr( $customer->phone ); ?>">
                                    <input type="radio" name="sms_to_customer" value="<?php echo esc_attr( $customer->phone ); ?>">
                                    <span><?php echo esc_html( $customer->name . ' - ' . $customer->phone ); ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="pakpajoh-sms-recipient-list" id="pakpajoh-sms-custom-list" style="display:none;">
                        <input type="text" name="sms_custom_phone" id="pakpajoh-sms-custom-phone" placeholder="شماره موبایل..." style="width:100%;padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
                    </div>
                    <div style="margin-top:12px;">
                        <textarea name="sms_text" id="sms_text" rows="4" placeholder="متن پیامک..." style="width:100%;padding:10px 14px;border-radius:12px;border:1.5px solid #E0E4E8;" oninput="updateSmsCounter()"></textarea>
                        <span id="sms_counter" style="display:block;margin-top:4px;font-size:0.85rem;color:#888;">۰ پیامک</span>
                    </div>
                    <p style="margin-top:12px;"><button type="button" class="button button-primary" disabled style="border-radius:50px;">ارسال (به‌زودی)</button></p>
                </form>
            </div>

            <!-- کارت پیامک‌های ارسالی -->
            <div class="pakpajoh-card">
                <h3 style="margin-bottom:16px;color:#005E80;">پیامک‌های ارسالی</h3>
                <div style="padding:20px;background:#F9F9F9;border-radius:10px;text-align:center;color:#888;">
                    <p>هنوز پیامکی ارسال نشده است.</p>
                </div>
            </div>

            <!-- کارت تنظیمات -->
            <div class="pakpajoh-card">
                <h3 style="margin-bottom:16px;color:#005E80;">تنظیمات پنل پیامکی</h3>
                <p style="color:#888;margin-bottom:16px;">پیکربندی اتصال به سرویس پیامکی</p>
                <p><button type="button" class="button" id="pakpajoh-open-sms-settings" style="border-radius:50px;">باز کردن تنظیمات</button></p>
            </div>
        </div>

        <div style="margin-top:30px;padding:16px;background:#fff3cd;border:1px solid #ffeeba;border-radius:12px;">
            <p style="margin:0;"><strong>توجه:</strong> برای فعال‌سازی کامل این بخش، لطفاً اطلاعات پنل پیامکی را ارائه دهید.</p>
        </div>
    </div>

    <script>
    function updateSmsCounter() {
        var text = document.getElementById('sms_text').value;
        var len = text.length;
        var count = Math.ceil(len / 70);
        if (count === 0) count = 0;
        document.getElementById('sms_counter').textContent = count + ' پیامک';
    }

    document.querySelectorAll('.pakpajoh-sms-tab').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.pakpajoh-sms-tab').forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            var tab = this.dataset.tab;
            document.getElementById('pakpajoh-sms-leads-list').style.display = tab === 'leads' ? 'block' : 'none';
            document.getElementById('pakpajoh-sms-customers-list').style.display = tab === 'customers' ? 'block' : 'none';
            document.getElementById('pakpajoh-sms-custom-list').style.display = tab === 'custom' ? 'block' : 'none';
            var searchWrapper = document.getElementById('pakpajoh-sms-search-wrapper');
            if (searchWrapper) { searchWrapper.style.display = tab === 'custom' ? 'none' : 'block'; }
        });
    });

    document.getElementById('pakpajoh-sms-search').addEventListener('input', function() {
        var query = this.value.toLowerCase();
        document.querySelectorAll('.pakpajoh-sms-recipient-item').forEach(function(item) {
            var name = item.dataset.name.toLowerCase();
            var phone = item.dataset.phone.toLowerCase();
            var match = name.indexOf(query) !== -1 || phone.indexOf(query) !== -1;
            item.style.display = match ? 'flex' : 'none';
        });
    });

    document.getElementById('pakpajoh-open-sms-settings').addEventListener('click', function() {
        var html = '<h3 style="margin-bottom:20px;color:#005E80;">تنظیمات پنل پیامکی</h3>';
        html += '<p><label>نام کاربری</label><br><input type="text" style="width:100%;padding:8px;border-radius:8px;border:1px solid #ddd;" disabled></p>';
        html += '<p><label>رمز عبور</label><br><input type="password" style="width:100%;padding:8px;border-radius:8px;border:1px solid #ddd;" disabled></p>';
        html += '<p><label>شماره فرستنده</label><br><input type="text" style="width:100%;padding:8px;border-radius:8px;border:1px solid #ddd;" disabled></p>';
        html += '<p><button type="button" class="button" disabled>ذخیره تنظیمات (به‌زودی)</button></p>';
        pakpajohOpenModal(html);
    });
    </script>
    <?php
}