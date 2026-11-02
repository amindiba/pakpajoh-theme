<div class="contact-form-wrapper reveal-up">
    <h2 class="section-title">ارسال درخواست</h2>
    <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="pakpajoh-form">
        <input type="hidden" name="action" value="pakpajoh_contact_form">
        <?php wp_nonce_field( 'pakpajoh_contact_nonce', 'pakpajoh_nonce' ); ?>
        <div class="form-group">
            <label for="name">نام و نام خانوادگی</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="phone">شماره تماس</label>
            <input type="tel" name="phone" id="phone" required>
        </div>
        <div class="form-group">
            <label for="message">توضیحات</label>
            <textarea name="message" id="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn-accent">ارسال درخواست</button>
    </form>
</div>