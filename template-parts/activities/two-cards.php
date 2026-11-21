<?php
/**
 * Two Cards Section — PakPajoh Theme
 */
?>
<section class="twocards-section">
    <div class="twocards-container">
        <div class="twocards-grid">
            <div class="twocard" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/ste22.png' ); ?>');">
                <div class="twocard-overlay"></div>
                <div class="twocard-content">
                    <h2 class="twocard-title">یک برنامه یکسان، پاسخگوی همه محیط‌ها نیست</h2>
                    <p class="twocard-desc">نوع فعالیت، ساختار فیزیکی، میزان استفاده از فضاها و شرایط بهره‌برداری تعیین می‌کند که چه برنامه‌ای برای هر محیط مناسب است.</p>
                    <ul class="twocard-list">
                        <li><span class="twocard-check">✓</span> نوع فعالیت و کاربری محیط</li>
                        <li><span class="twocard-check">✓</span> وسعت و تقسیم‌بندی فضاها</li>
                        <li><span class="twocard-check">✓</span> نوع کف، دیوار، سطوح و تجهیزات</li>
                        <li><span class="twocard-check">✓</span> میزان تردد کارکنان، مراجعان و تجهیزات</li>
                    </ul>
                    <p class="twocard-end">برنامه پاکیزگی باید از شناخت واقعی محیط آغاز شود.</p>
                </div>
            </div>
            <div class="twocard" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/dsss221.png' ); ?>');">
                <div class="twocard-overlay"></div>
                <div class="twocard-content">
                    <h2 class="twocard-title">در هر محیط، چهار خدمت در یک مسیر یکپارچه</h2>
                    <p class="twocard-desc">نوع محیط تعیین می‌کند چه برنامه‌ای برای پاکیزگی مناسب است؛ اما اجرای مؤثر آن به ارتباط میان طراحی، مدیریت عملیات، ارزیابی کیفیت و مستندسازی وابسته است.</p>
                    <ul class="twocard-list">
                        <li><span class="twocard-check">✓</span> شناخت محیط و طراحی برنامه پاکیزگی</li>
                        <li><span class="twocard-check">✓</span> مدیریت و اجرای عملیات پاکیزگی</li>
                        <li><span class="twocard-check">✓</span> کنترل کیفیت و پیگیری اصلاحات</li>
                        <li><span class="twocard-check">✓</span> مستندسازی و گزارش‌دهی</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="twocard-btn">مشاهده جزئیات خدمات</a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.twocards-section { padding: 40px 20px; background: #fff; }
.twocards-container { max-width: 1400px; margin: 0 auto; }
.twocards-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
.twocard { position: relative; border-radius: 16px; overflow: hidden; min-height: 320px; background-size: cover; background-position: center; transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer; }
.twocard:hover { transform: translateY(-6px); box-shadow: 0 18px 35px rgba(0,0,0,0.2); }
.twocard-overlay { position: absolute; inset: 0; background: linear-gradient(to left, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.6) 60%, rgba(255,255,255,0) 100%); }
.twocard-content { position: relative; z-index: 2; padding: 32px 28px; text-align: right; direction: rtl; }
.twocard-title { font-size: 22px; font-weight: 800; color: #003b73; margin-bottom: 10px; }
.twocard-desc { font-size: 15px; font-weight: 700; color: #002244; line-height: 1.7; margin-bottom: 16px; }
.twocard-list { list-style: none; padding: 0; margin: 0 0 16px; }
.twocard-list li { display: flex; align-items: center; gap: 10px; font-size: 14px; font-weight: 700; color: #002244; padding: 4px 0; justify-content: flex-start; }
.twocard-check { display: inline-flex; align-items: center; justify-content: center; width: 20px; height: 20px; background: #35BA38; color: #fff; border-radius: 50%; font-size: 11px; font-weight: 700; flex-shrink: 0; }
.twocard-end { font-size: 13px; font-weight: 700; color: #1e3a8a; margin: 0; }
.twocard-btn { display: inline-block; background: linear-gradient(to top, #1e7a33, #35BA38); color: #fff; padding: 10px 24px; border-radius: 999px; font-weight: 700; text-decoration: none; transition: all 0.3s ease; }
.twocard-btn:hover { filter: brightness(1.15); box-shadow: 0 6px 18px rgba(53,186,56,0.4); transform: translateY(-2px); }
@media (max-width: 768px) { .twocards-grid { grid-template-columns: 1fr; } }
</style>
