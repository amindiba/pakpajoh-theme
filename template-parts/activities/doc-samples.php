<?php
/**
 * Document Samples Section — PakPajoh Theme
 */
?>
<section class="doc-samples-section" aria-label="نمونه مستندات و گزارش‌ها">
    <div class="doc-samples-wrapper">

        <div class="doc-samples-body">

            <div class="doc-samples-scope" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/service-execution-management.jpg' ); ?>'); background-size: cover; background-position: center;">
                <div class="scope-content">
                    <h3 class="scope-title">محدوده خدمات ما</h3>
                    <ul class="scope-list">
                        <li><span class="scope-check">✓</span> محیط‌های صنعتی و تولیدی</li>
                        <li><span class="scope-check">✓</span> انبارها و مراکز لجستیکی</li>
                        <li><span class="scope-check">✓</span> ادارات و سازمان‌ها</li>
                        <li><span class="scope-check">✓</span> مراکز تجاری و خدمتی</li>
                        <li><span class="scope-check">✓</span> محیط‌های تخصصی و حساس</li>
                    </ul>
                </div>
            </div>

            <div class="doc-samples-cards-parent">
                <div class="doc-samples-header">
                    <h2 class="doc-samples-title">نمونه مستندات و گزارش‌ها</h2>
                    <p class="doc-samples-subtitle">آنچه مدیریت می‌شود، باید ثبت و ارزیابی باشد.</p>
                </div>
                <div class="doc-samples-cards">

                    <div class="doc-card">
                        <div class="doc-card-image-wrap">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a1.jpg' ); ?>" alt="گزارش عملکرد خدمات" loading="lazy">
                            <span class="doc-card-badge">نمونه نمایشی</span>
                        </div>
                        <h3 class="doc-card-title">گزارش عملکرد خدمات</h3>
                        <p class="doc-card-desc">نتایج و تغییرات</p>
                    </div>

                    <div class="doc-card">
                        <div class="doc-card-image-wrap">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a2.jpg' ); ?>" alt="گزارش نقص و اصلاحات" loading="lazy">
                            <span class="doc-card-badge">نمونه نمایشی</span>
                        </div>
                        <h3 class="doc-card-title">گزارش نقص و اصلاحات</h3>
                        <p class="doc-card-desc">ثبت و پیگیری موارد</p>
                    </div>

                    <div class="doc-card">
                        <div class="doc-card-image-wrap">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a3.jpg' ); ?>" alt="چک‌لیست کیفیت" loading="lazy">
                            <span class="doc-card-badge">نمونه نمایشی</span>
                        </div>
                        <h3 class="doc-card-title">چک‌لیست کیفیت</h3>
                        <p class="doc-card-desc">معیارها و نتایج ارزیابی</p>
                    </div>

                    <div class="doc-card">
                        <div class="doc-card-image-wrap">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a4.jpg' ); ?>" alt="برنامه نظافت" loading="lazy">
                            <span class="doc-card-badge">نمونه نمایشی</span>
                        </div>
                        <h3 class="doc-card-title">برنامه نظافت</h3>
                        <p class="doc-card-desc">فعالیت‌ها و زمان‌بندی</p>
                    </div>

                </div>
                </div>

        </div>

    </div>
</section>

<style>
.doc-samples-section { padding: 40px 20px; background: #fff; }
.doc-samples-wrapper { max-width: 1400px; margin: 0 auto; padding: 40px 32px; background: #fff; border-radius: 24px; }
.doc-samples-body { display: flex; gap: 24px; align-items: flex-start; }
.doc-samples-cards-parent { flex: 1; background: #e8f4fc; border-radius: 16px; padding: 24px; }
.doc-samples-header { text-align: center; margin-bottom: 24px; }
.doc-samples-title { font-size: 26px; font-weight: 800; color: #003b73; margin: 0 0 8px; }
.doc-samples-subtitle { font-size: 14px; color: #444; margin: 0; }
.doc-samples-cards { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.doc-card { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease; }
.doc-card:hover { transform: translateY(-8px); box-shadow: 0 18px 35px rgba(0,102,179,0.2); }
.doc-card-image-wrap { position: relative; height: 110px; overflow: hidden; }
.doc-card-image-wrap img { width: 100%; height: 100%; object-fit: cover; display: block; }
.doc-card-badge { position: absolute; top: 10px; left: 10px; background: #35BA38; color: #fff; font-size: 11px; font-weight: 700; padding: 4px 10px; border-radius: 6px; transform: rotate(-8deg); }
.doc-card-title { font-size: 15px; font-weight: 800; color: #003b73; margin: 12px 12px 2px; text-align: center; }
.doc-card-desc { font-size: 12px; color: #666; margin: 0 12px 12px; text-align: center; }
.doc-samples-scope { width: 320px; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); position: relative; min-height: 300px; }
.scope-content { padding: 16px 20px; background: linear-gradient(to left, rgba(255,255,255,0.95), rgba(255,255,255,0.5)); border-radius: 12px; margin: 16px; }
.scope-title { font-size: 18.4px; font-weight: 800; color: #002244; margin: 0 0 12px; }
.scope-list li { display: flex; align-items: center; gap: 10px; font-size: 14.3px; color: #002244; font-weight: 700; padding: 6px 0; border-bottom: 1px solid #f0f0f0; }
.scope-list li:last-child { border-bottom: none; }
.scope-check { display: inline-flex; align-items: center; justify-content: center; width: 22px; height: 22px; background: #35BA38; color: #fff; border-radius: 50%; font-size: 12px; font-weight: 700; flex-shrink: 0; }
@media (max-width: 1024px) {
    .doc-samples-body { flex-direction: column; }
    .doc-samples-cards { grid-template-columns: repeat(2, 1fr); }
    .doc-samples-scope { width: 100%; }
}
@media (max-width: 600px) {
    .doc-samples-cards { grid-template-columns: 1fr; }
}
</style>
