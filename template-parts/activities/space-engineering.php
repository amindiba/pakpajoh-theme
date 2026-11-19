<?php
/**
 * Space Engineering Section — PakPajoh Theme
 */
?>
<section class="space-eng-section">
    <div class="space-eng-container">
        <div class="space-eng-grid">

            <div class="space-card" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/space-engineering-bg.jpg' ); ?>'); background-size: cover; background-position: center;">
                <div>
                    <h2 class="space-card-title" style="font-size: 24px;">شناسنامه مهندسی فضا؛<br>نقطه شروع برنامه‌ریزی دقیق</h2>
                    <p class="space-card-desc">درک و تصویر هر فضا پیش از ارائه خدمات، از نظر ویژگی‌های فیزیکی، کاربری و نیازهای نگهداری بررسی می‌شود و شناسنامه‌های دقیق برای آن تهیه می‌گردند.</p>
                </div>
                <div>
                    <a href="/#space-passport" class="space-btn">آشنایی با شناسنامه فضا <span class="space-arrow">←</span></a>
                </div>
            </div>

            <div class="space-card" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/factors-card-bg.jpg' ); ?>'); background-size: cover; background-position: center;">
                <div>
                    <h2 class="space-card-title" style="font-size: 24px;">چه عواملی در طراحی برنامه پاکیزگی مؤثر است؟</h2>
                    <ul class="space-list">
                        <li><span class="space-check">✓</span><span>نوع فعالیت و کاربری محیط</span></li>
                        <li><span class="space-check">✓</span><span>میزان تردد و استفاده از فضاها</span></li>
                        <li><span class="space-check">✓</span><span>نوع سطوح و تجهیزات</span></li>
                        <li><span class="space-check">✓</span><span>ملاحظات ایمنی و بهداشتی</span></li>
                        <li><span class="space-check">✓</span><span>انتظارات کارفرما از کیفیت خدمات</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.space-eng-section { padding: 60px 20px; background: #FFFFFF; }
.space-eng-container { max-width: 1400px; margin: 0 auto; padding: 0 24px; }
.space-eng-grid { display: grid; grid-template-columns: 1fr; gap: 24px; }
@media (min-width: 768px) { .space-eng-grid { grid-template-columns: 1fr 1fr; } }
.space-card { background: #ffffff; border-radius: 24px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); border: 1px solid #f3f4f6; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden; text-align: right; transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease; }
.space-card:hover { transform: translateY(-5%); box-shadow: 0 16px 30px rgba(0,102,179,0.25); border-color: #35BA38; }
.space-badge { display: inline-block; background: #059669; color: #fff; font-size: 12px; font-weight: 500; padding: 4px 12px; border-radius: 6px; margin-bottom: 16px; }
.space-card-title { color: #1e293b; font-weight: 700; font-size: 18px; margin-bottom: 12px; }
.space-card-desc { color: #0066b3; font-size: 15px; font-weight: 700; line-height: 1.9; margin-bottom: 24px; max-width: 55%; }
.space-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 16px; }
.space-list li { display: flex; align-items: center; color: #0066b3; font-size: 15px; font-weight: 700; }
.space-check { width: 24px; height: 24px; margin-left: 12px; flex-shrink: 0; border-radius: 50%; background: #35BA38; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 12px; }
.space-btn { display: inline-flex; align-items: center; justify-content: center; text-align: center; background: linear-gradient(135deg, #0f172a, #1e3a8a); color: #fff; font-size: 12px; font-weight: 500; padding: 12px 24px; border-radius: 999px; text-decoration: none; transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease; }
.space-btn:hover { transform: translateY(-3px) scale(1.03); box-shadow: 0 8px 18px rgba(30,58,138,0.4); background: linear-gradient(135deg, #1e3a8a, #312e81); }
.space-arrow { margin-right: 8px; }
</style>
