<?php
/**
 * مدیریت نمونه‌کارها
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_portfolio_page() {
    wp_enqueue_media();
    
    $action = isset( $_GET['action'] ) ? sanitize_text_field( $_GET['action'] ) : 'list';
    $post_id = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

    if ( isset( $_POST['pakpajoh_portfolio_save'] ) ) {
        if ( ! wp_verify_nonce( $_POST['pakpajoh_portfolio_nonce'], 'pakpajoh_portfolio_save' ) ) { wp_die( 'خطای امنیتی' ); }
        $data = array(
            'post_title'   => sanitize_text_field( $_POST['post_title'] ),
            'post_content' => wp_kses_post( $_POST['post_content'] ),
            'post_excerpt' => sanitize_textarea_field( $_POST['post_excerpt'] ),
            'post_type'    => 'pp_portfolio',
            'post_status'  => 'publish',
        );
        if ( $post_id > 0 ) { $data['ID'] = $post_id; wp_update_post( $data ); }
        else { $post_id = wp_insert_post( $data ); }
        if ( $post_id ) {
            $meta_fields = array( '_pp_location', '_pp_date', '_pp_level', '_pp_duration', '_pp_type', '_pp_satisfaction', '_pp_difficulty' );
            foreach ( $meta_fields as $field ) { if ( isset( $_POST[ $field ] ) ) { update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) ); } }
            if ( isset( $_POST['pakpajoh_thumbnail_id'] ) ) { $thumb_id = intval( $_POST['pakpajoh_thumbnail_id'] ); if ( $thumb_id > 0 ) { set_post_thumbnail( $post_id, $thumb_id ); } else { delete_post_thumbnail( $post_id ); } }
            if ( isset( $_POST['pakpajoh_gallery_ids'] ) ) { update_post_meta( $post_id, '_pp_gallery', sanitize_text_field( $_POST['pakpajoh_gallery_ids'] ) ); }
        }
        echo '<div class="notice notice-success"><p>نمونه‌کار ذخیره شد.</p></div>';
        $action = 'list';
    }

    if ( $action === 'delete' && $post_id > 0 ) {
        wp_delete_post( $post_id, true );
        echo '<div class="notice notice-success"><p>نمونه‌کار حذف شد.</p></div>';
        $action = 'list';
    }

    if ( $action === 'add' || $action === 'edit' ) {
        $post = $post_id > 0 ? get_post( $post_id ) : null;
        $thumb_id = $post_id ? get_post_thumbnail_id( $post_id ) : 0;
        $thumb_url = $thumb_id ? wp_get_attachment_image_url( $thumb_id, 'medium' ) : '';
        $gallery_ids = $post_id ? get_post_meta( $post_id, '_pp_gallery', true ) : '';
        $gallery_arr = $gallery_ids ? explode( ',', $gallery_ids ) : array();
        ?>
        <div class="wrap">
            <h1><?php echo $post_id > 0 ? 'ویرایش نمونه‌کار' : 'افزودن نمونه‌کار جدید'; ?></h1>
            <form method="post">
                <?php wp_nonce_field( 'pakpajoh_portfolio_save', 'pakpajoh_portfolio_nonce' ); ?>
                <input type="hidden" name="pakpajoh_portfolio_save" value="1">
                <table class="form-table">
                    <tr><th><label for="post_title">عنوان</label></th><td><input type="text" id="post_title" name="post_title" value="<?php echo esc_attr( $post ? $post->post_title : '' ); ?>" class="regular-text" required></td></tr>
                    <tr><th><label for="post_excerpt">توضیح کوتاه</label></th><td><textarea id="post_excerpt" name="post_excerpt" rows="3" class="large-text"><?php echo esc_textarea( $post ? $post->post_excerpt : '' ); ?></textarea></td></tr>
                    <tr><th><label for="post_content">توضیحات کامل</label></th><td><?php wp_editor( $post ? $post->post_content : '', 'post_content', array( 'textarea_rows' => 8 ) ); ?></td></tr>
                    <tr><th><label for="_pp_location">موقعیت</label></th><td><input type="text" id="_pp_location" name="_pp_location" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_location', true ) : '' ); ?>" class="regular-text"></td></tr>
                    <tr><th><label for="_pp_date">تاریخ</label></th><td><input type="text" id="_pp_date" name="_pp_date" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_date', true ) : '' ); ?>" class="regular-text" placeholder="۱۴۰۴/۰۱/۰۱"></td></tr>
                    <tr><th><label for="_pp_level">سطح</label></th><td><input type="text" id="_pp_level" name="_pp_level" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_level', true ) : '' ); ?>" class="regular-text" placeholder="صنعتی / تجاری / اداری"></td></tr>
                    <tr><th><label for="_pp_duration">مدت اجرا</label></th><td><input type="text" id="_pp_duration" name="_pp_duration" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_duration', true ) : '' ); ?>" class="regular-text" placeholder="۳ روز"></td></tr>
                    <tr><th><label for="_pp_type">نوع خدمت</label></th><td><input type="text" id="_pp_type" name="_pp_type" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_type', true ) : '' ); ?>" class="regular-text" placeholder="نظافت عمیق"></td></tr>
                    <tr><th><label for="_pp_satisfaction">رضایت مشتری</label></th><td><input type="text" id="_pp_satisfaction" name="_pp_satisfaction" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_satisfaction', true ) : '' ); ?>" class="regular-text" placeholder="۱۰۰٪"></td></tr>
                    <tr><th><label for="_pp_difficulty">درجه سختی</label></th><td><input type="text" id="_pp_difficulty" name="_pp_difficulty" value="<?php echo esc_attr( $post_id ? get_post_meta( $post_id, '_pp_difficulty', true ) : '' ); ?>" class="regular-text" placeholder="بالا / متوسط / پایین"></td></tr>
                </table>

                <h2>تصویر شاخص</h2>
                <div class="pakpajoh-card" style="margin-bottom:20px;">
                    <div id="pakpajoh-thumbnail-preview" style="margin-bottom:10px;"><?php if ( $thumb_url ) : ?><img src="<?php echo esc_url( $thumb_url ); ?>" style="max-width:200px;border-radius:8px;"><?php endif; ?></div>
                    <input type="hidden" name="pakpajoh_thumbnail_id" id="pakpajoh-thumbnail-id" value="<?php echo esc_attr( $thumb_id ); ?>">
                    <button type="button" class="button" id="pakpajoh-upload-thumbnail">انتخاب تصویر شاخص</button>
                    <button type="button" class="button" id="pakpajoh-remove-thumbnail" style="<?php echo $thumb_id ? '' : 'display:none;'; ?>">حذف تصویر</button>
                </div>

                <h2>گالری تصاویر</h2>
                <div class="pakpajoh-card" style="margin-bottom:20px;">
                    <div id="pakpajoh-gallery-preview" style="display:flex;flex-wrap:wrap;gap:10px;margin-bottom:10px;">
                        <?php foreach ( $gallery_arr as $gid ) : $gurl = wp_get_attachment_image_url( $gid, 'thumbnail' ); if ( $gurl ) : ?>
                            <div class="pakpajoh-gallery-item" data-id="<?php echo esc_attr( $gid ); ?>" style="position:relative;"><img src="<?php echo esc_url( $gurl ); ?>" style="width:80px;height:80px;object-fit:cover;border-radius:6px;"><button type="button" class="pakpajoh-remove-gallery-item" style="position:absolute;top:-5px;right:-5px;background:#D32F2F;color:#fff;border:none;border-radius:50%;width:20px;height:20px;cursor:pointer;">×</button></div>
                        <?php endif; endforeach; ?>
                    </div>
                    <input type="hidden" name="pakpajoh_gallery_ids" id="pakpajoh-gallery-ids" value="<?php echo esc_attr( $gallery_ids ); ?>">
                    <button type="button" class="button" id="pakpajoh-add-gallery">افزودن تصویر به گالری</button>
                </div>

                <?php submit_button( 'ذخیره نمونه‌کار' ); ?>
                <a href="?page=pakpajoh-portfolio" class="button">بازگشت</a>
            </form>
        </div>
        <script>
        jQuery(document).ready(function($) {
            $('#pakpajoh-upload-thumbnail').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({ title: 'انتخاب تصویر شاخص', multiple: false, library: { type: 'image' } });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#pakpajoh-thumbnail-id').val(attachment.id);
                    $('#pakpajoh-thumbnail-preview').html('<img src="' + attachment.url + '" style="max-width:200px;border-radius:8px;">');
                    $('#pakpajoh-remove-thumbnail').show();
                });
                frame.open();
            });
            $('#pakpajoh-remove-thumbnail').on('click', function() { $('#pakpajoh-thumbnail-id').val(''); $('#pakpajoh-thumbnail-preview').html(''); $(this).hide(); });
            $('#pakpajoh-add-gallery').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({ title: 'افزودن به گالری', multiple: true, library: { type: 'image' } });
                frame.on('select', function() {
                    var selection = frame.state().get('selection');
                    selection.each(function(attachment) {
                        var a = attachment.toJSON();
                        var currentIds = $('#pakpajoh-gallery-ids').val();
                        var idsArray = currentIds ? currentIds.split(',') : [];
                        if (idsArray.indexOf(String(a.id)) === -1) {
                            idsArray.push(a.id);
                            $('#pakpajoh-gallery-ids').val(idsArray.join(','));
                            $('#pakpajoh-gallery-preview').append('<div class="pakpajoh-gallery-item" data-id="' + a.id + '" style="position:relative;"><img src="' + a.url + '" style="width:80px;height:80px;object-fit:cover;border-radius:6px;"><button type="button" class="pakpajoh-remove-gallery-item" style="position:absolute;top:-5px;right:-5px;background:#D32F2F;color:#fff;border:none;border-radius:50%;width:20px;height:20px;cursor:pointer;">×</button></div>');
                        }
                    });
                });
                frame.open();
            });
            $(document).on('click', '.pakpajoh-remove-gallery-item', function() {
                var item = $(this).closest('.pakpajoh-gallery-item');
                var id = item.data('id');
                var currentIds = $('#pakpajoh-gallery-ids').val().split(',');
                var newIds = currentIds.filter(function(i) { return i !== String(id); });
                $('#pakpajoh-gallery-ids').val(newIds.join(','));
                item.remove();
            });
        });
        </script>
        <?php
        return;
    }

    $portfolio_items = get_posts( array( 'post_type' => 'pp_portfolio', 'posts_per_page' => -1, 'post_status' => 'any' ) );
    ?>
    <div class="wrap">
        <h1>مدیریت نمونه‌کارها</h1>
        <p style="color:#5A6B7D;margin-bottom:20px;font-size:0.9rem;">در این بخش، نمونه‌کارهای شرکت (پروژه‌های انجام‌شده) را مدیریت می‌کنید. می‌توانید نمونه‌کار جدید اضافه کنید، عنوان، توضیحات، موقعیت، تاریخ، نوع خدمت، تصویر شاخص و گالری تصاویر را ویرایش کنید و در صورت نیاز، نمونه‌کار را حذف کنید.</p>
        
        <div style="margin-bottom:20px;display:flex;gap:8px;flex-wrap:wrap;align-items:center;">
            <a href="?page=pakpajoh-portfolio&action=add" class="button button-primary" style="border-radius:50px;">افزودن نمونه‌کار جدید</a>
            <input type="text" id="pakpajoh-portfolio-search" placeholder="جستجوی زنده..." style="flex:1;min-width:200px;padding:8px 14px;border-radius:50px;border:1.5px solid #E0E4E8;">
            <a href="?page=pakpajoh-portfolio" class="button" style="border-radius:50px;">حذف فیلترها</a>
        </div>

        <?php if ( empty( $portfolio_items ) ) : ?>
            <p>هنوز نمونه‌کاری ثبت نشده است.</p>
        <?php else : ?>
            <table class="wp-list-table widefat fixed striped" id="pakpajoh-portfolio-table">
                <thead><tr><th>عنوان</th><th>موقعیت</th><th>تاریخ</th><th>نوع</th><th>عملیات</th></tr></thead>
                <tbody>
                    <?php foreach ( $portfolio_items as $item ) : ?>
                        <tr>
                            <td><?php echo esc_html( $item->post_title ); ?></td>
                            <td><?php echo esc_html( get_post_meta( $item->ID, '_pp_location', true ) ); ?></td>
                            <td><?php echo esc_html( get_post_meta( $item->ID, '_pp_date', true ) ); ?></td>
                            <td><?php echo esc_html( get_post_meta( $item->ID, '_pp_type', true ) ); ?></td>
                            <td>
                                <a href="?page=pakpajoh-portfolio&action=edit&id=<?php echo $item->ID; ?>" class="pakpajoh-icon-btn edit" data-tooltip="ویرایش نمونه‌کار و گالری تصاویر">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                </a>
                                <a href="#" class="pakpajoh-icon-btn delete" data-tooltip="حذف نمونه‌کار و تصاویر مرتبط" onclick="openDeletePortfolioModal(<?php echo $item->ID; ?>, '<?php echo esc_js( $item->post_title ); ?>'); return false;">
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
        var searchInput = document.getElementById('pakpajoh-portfolio-search');
        var table = document.getElementById('pakpajoh-portfolio-table');
        if (!table) return;
        var rows = table.querySelectorAll('tbody tr');
        searchInput.addEventListener('input', function() {
            var query = this.value.toLowerCase();
            rows.forEach(function(row) {
                var text = row.textContent.toLowerCase();
                row.style.display = text.indexOf(query) !== -1 ? '' : 'none';
            });
        });
    });

    function openDeletePortfolioModal(id, title) {
        var html = '<h3 style="margin-bottom:12px;color:#D32F2F;">حذف نمونه‌کار</h3>';
        html += '<p style="color:#333;margin-bottom:8px;">آیا از حذف نمونه‌کار <strong>' + title + '</strong> مطمئن هستید؟</p>';
        html += '<p style="color:#888;font-size:0.85rem;margin-bottom:24px;">این عمل غیرقابل بازگشت است و تصاویر مرتبط نیز حذف می‌شوند.</p>';
        html += '<div style="display:flex;gap:12px;justify-content:flex-end;">';
        html += '<a href="?page=pakpajoh-portfolio&action=delete&id=' + id + '" class="button button-primary" style="background:#D32F2F;border-color:#D32F2F;">بله، حذف کن</a>';
        html += '<button type="button" onclick="pakpajohCloseModal()" class="button">خیر، حذف نکن</button>';
        html += '</div>';
        pakpajohOpenModal(html);
    }
    </script>
    <?php
}