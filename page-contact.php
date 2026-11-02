<?php
/**
 * قالب برگه تماس با ما
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">تماس با ما</h1>
        <p class="page-subtitle">درخواست کارشناسی رایگان و ارتباط با ما</p>
    </div>
</section>
<section class="section">
    <div class="container content-wrap" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem;">
        <div class="contact-info">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="entry-content"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <div style="margin-top: 2rem;">
                <h3 style="color: var(--pp-dark);">اطلاعات تماس</h3>
                <ul style="margin-top: 1rem;">
                    <li style="margin-bottom: 0.5rem;">تلفن: <a href="tel:+982112345678" dir="rtl">۰۲۱-۱۲۳۴۵۶۷۸</a></li>
                    <li style="margin-bottom: 0.5rem;">ایمیل: <a href="mailto:info@pakpajoh.ir">info@pakpajoh.ir</a></li>
                    <li>آدرس: تهران، خیابان ...</li>
                </ul>
            </div>
        </div>
        <div class="contact-form-container">
            <?php get_template_part( 'template-parts/contact-form' ); ?>
        </div>
    </div>
</section>
<?php
get_footer();