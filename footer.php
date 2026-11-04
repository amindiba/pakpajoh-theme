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
                <a href="#" aria-label="اینستاگرام">IG</a>
                <a href="#" aria-label="لینکدین">IN</a>
                <a href="#" aria-label="تلگرام">TG</a>
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
                <li>تهران، خیابان کریمخان، کوچه آبگان، پلاک ۴، واحد ۱</li>
                <li><a href="tel:+982191092123" dir="rtl">۰۲۱-۹۱۰۹۲۱۲۳</a></li>
                <li><a href="tel:+989121156868" dir="rtl">۰۹۱۲۱۱۵۶۸۶۸</a></li>
                <li><a href="mailto:info@pakpajoh.ir">info@pakpajoh.ir</a></li>
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
