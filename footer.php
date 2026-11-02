<?php
/**
 * فوتر قالب
 */
?>
</main>
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <h2 class="footer-logo">P.P</h2>
                <p class="footer-desc">ارائه دهنده خدمات تخصصی نظافت صنعتی. نظافت مدرن با فناوری، شوینده‌های بایو و نظارت مستمر.</p>
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
                    <li>تهران، خیابان ...</li>
                    <li><a href="tel:+982112345678" dir="rtl">۰۲۱-۱۲۳۴۵۶۷۸</a></li>
                    <li><a href="mailto:info@pakpajoh.ir">info@pakpajoh.ir</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> پاک‌پژوه — تمامی حقوق محفوظ است.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>