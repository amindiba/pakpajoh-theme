<?php
/**
 * فوتر قالب
 */
?>
</main>
<footer id="colophon" class="site-footer">
    <div class="footer-top">
        <div class="footer-brand">
            <div class="footer-logo-wrapper">
                <span class="brand-pp">P.P</span>
                <div class="brand-text-group">
                    <span class="brand-name">شرکت پاک‌پژوه</span>
                    <span class="brand-url">pakpajoh.ir</span>
                </div>
            </div>
            <p class="footer-desc">ارائه دهنده خدمات تخصصی نظافت صنعتی با فناوری‌های نوین، شوینده‌های بایو و نظارت مستمر.</p>
            <div class="footer-socials">
                <a href="#" aria-label="اینستاگرام"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg></a>
                <a href="#" aria-label="لینکدین"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
                <a href="#" aria-label="تلگرام"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 3L2 10.5l7 2.5 2.5 7L22 3z"/><path d="M9 13l10-6"/></svg></a>
            </div>
        </div>
        <div class="footer-links">
            <h3 class="footer-title">دسترسی سریع</h3>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
        <div class="footer-contact-info">
            <h3 class="footer-title">تماس با ما</h3>
            <ul>
                <li><svg class="footer-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> تهران، خیابان کریمخان، کوچه آبگان، پلاک ۴، واحد ۱</li>
                <li><svg class="footer-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> <a href="tel:+982191092123" dir="rtl">۰۲۱-۹۱۰۹۲۱۲۳</a></li>
                <li><svg class="footer-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> <a href="tel:+989121156868" dir="rtl">۰۹۱۲۱۱۵۶۸۶۸</a></li>
                <li><svg class="footer-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> <a href="mailto:info@pakpajoh.ir">info@pakpajoh.ir</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> پاک‌پژوه — تمامی حقوق محفوظ است.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
