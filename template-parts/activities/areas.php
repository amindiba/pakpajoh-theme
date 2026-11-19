<?php
/**
 * Areas Section — PakPajoh Theme
 */
?>
<section class="areas-section">
    <div class="areas-container">
        <h2 class="areas-title">پنج حوزه اصلی فعالیت ما</h2>
        <div class="areas-grid">

            <div class="card1" data-area="manufacturing">
                <div class="card1-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/industrial-concrete-giants-stockcake.jpg' ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="card1-icon">
                    <svg viewBox="0 0 24 24"><path d="M22,2V5H18V2ZM18,7h4V22H2V10L8,7v3l6-3v3h4ZM8,17H5v2H8Zm0-4H5v2H8Zm6,4H10v2h4Zm0-4H10v2h4Zm5,4H16v2h3Zm0-4H16v2h3Z"/></svg>
                </div>
                <div class="card1-content">
                    <h3 class="card1-title">کارخانه‌ها و محیط‌های تولیدی</h3>
                    <p class="card1-desc">پاکیزگی در قلب تولید</p>
                    <div class="card1-footer">
                        <span>مشاهده جزئیات</span>
                        <span>←</span>
                    </div>
                </div>
            </div>

            <div class="card1" data-area="warehousing">
                <div class="card1-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/warehouse-goods-storage.jpg' ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="card1-icon">
                    <svg viewBox="0 0 512 512"><path d="M328.594,42.031v95.844L164.297,42.031v95.844L0,42.031v427.938h164.297h19.109h145.188h19.109H512V149.016 L328.594,42.031z M205.813,324.25h-68.266V256h68.266V324.25z M374.453,324.25h-68.266V256h68.266V324.25z"/></svg>
                </div>
                <div class="card1-content">
                    <h3 class="card1-title">انبارها و مراکز نگهداری کالا</h3>
                    <p class="card1-desc">پاکیزگی مدیریت‌شده برای انبارها</p>
                    <div class="card1-footer">
                        <span>مشاهده جزئیات</span>
                        <span>←</span>
                    </div>
                </div>
            </div>

            <div class="card1" data-area="logistics">
                <div class="card1-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logistics-distribution-center.jpg' ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="card1-icon">
                    <svg viewBox="0 0 24 24"><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
                </div>
                <div class="card1-content">
                    <h3 class="card1-title">مراکز لجستیکی و توزیع</h3>
                    <p class="card1-desc">پاکیزگی هماهنگ با جریان عملیات</p>
                    <div class="card1-footer">
                        <span>مشاهده جزئیات</span>
                        <span>←</span>
                    </div>
                </div>
            </div>

            <div class="card1" data-area="healthcare">
                <div class="card1-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hospital-clinic-support.jpg' ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="card1-icon">
                    <svg viewBox="0 0 512 512"><path d="M373.328,138.672V0H138.672v138.672H0V512h208V366.438h96V512h208V138.672H373.328z M131.469,414.188H91.406 v-47.766h40.063V414.188z M131.469,308.188H91.406v-47.766h40.063V308.188z M276.031,308.188h-40.063v-47.766h40.063V308.188z M318.656,150.813h-40.281v40.281h-44.75v-40.281h-40.281v-44.766h40.281V65.75h44.75v40.297h40.281V150.813z M380.453,260.422 h37.563v47.766h-37.563V260.422z M420.594,414.188h-40.063v-47.766h40.063V414.188z"/></svg>
                </div>
                <div class="card1-content">
                    <h3 class="card1-title">بیمارستان‌ها و درمانگاه‌ها</h3>
                    <p class="card1-desc">پاکیزگی تعمیر و نگهداری</p>
                    <div class="card1-footer">
                        <span>مشاهده جزئیات</span>
                        <span>←</span>
                    </div>
                </div>
            </div>

            <div class="card1" data-area="hospitality">
                <div class="card1-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hotel-accommodation-services.jpg' ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="card1-icon">
                    <svg viewBox="0 0 14 14"><path d="M 0.625,3 C 0.25,3 0,3.25 0,3.75 l 0,7.25 1.25,0 0,-1.75 c 0,0 10.380697,0.01892 11.5,0 L 12.75,11 14,11 14,8.625 14,4.75 C 14,4.4202582 13.86199,4 13.375,4 12.88801,4 12.75,4.4202582 12.75,4.75 l 0,3.25 -11.5,0 0,-4.25 C 1.25,3.25 1,3 0.625,3 z M 3.5,4 C 2.671573,4 2,4.671573 2,5.5 2,6.328427 2.671573,7 3.5,7 4.328427,7 5,6.328427 5,5.5 5,4.671573 4.328427,4 3.5,4 z m 2,1 0,2 6.5,0 C 12,6 10.963825,5 10,5 z"/></svg>
                </div>
                <div class="card1-content">
                    <h3 class="card1-title">هتل‌ها و مراکز اقامتی</h3>
                    <p class="card1-desc">پاکیزگی خدمات مهمان‌نوازی</p>
                    <div class="card1-footer">
                        <span>مشاهده جزئیات</span>
                        <span>←</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.areas-title { text-align: center; font-size: 26px; font-weight: 800; color: #003b73; margin-bottom: 40px; position: relative; display: inline-block; }
.areas-title::before, .areas-title::after { content: ''; position: absolute; top: 50%; width: 16vw; height: 3px; transform: translateY(-50%); }
.areas-title::before { left: 100%; margin-left: 12px; background: linear-gradient(to right, #35BA38, transparent); }
.areas-title::after { right: 100%; margin-right: 12px; background: linear-gradient(to left, #35BA38, transparent); }
.areas-grid { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
.areas-section { padding: 60px 20px; background: #fff; }
.areas-container { text-align: center; }
.card1 { background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); width: 230px; display: flex; flex-direction: column; position: relative; border: 1px solid #eef0f2; overflow: hidden; cursor: pointer; transition: box-shadow 0.4s ease, transform 0.4s ease, border-color 0.4s ease; }
.card1:hover { transform: translateY(-5%); box-shadow: 0 16px 30px rgba(0,102,179,0.25); border-color: #35BA38; }
.card1-image { width: 100%; height: 160px; overflow: hidden; transition: border-radius 0.4s cubic-bezier(0.34,1.56,0.64,1); }
.card1:hover .card1-image { border-bottom-left-radius: 50% 24px; border-bottom-right-radius: 50% 24px; }
.card1-image img { width: 100%; height: 100%; object-fit: cover; display: block; }
.card1-icon { width: 54px; height: 54px; margin: -27px auto 8px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 1.5px solid #d0dce5; box-shadow: 0 2px 10px rgba(0,0,0,0.08); position: relative; z-index: 2; }
.card1-icon svg { width: 34px; height: 34px; fill: #0066b3; }
.card1-content { padding: 8px 15px 15px; text-align: center; display: flex; flex-direction: column; flex-grow: 1; }
.card1-title { font-size: 19px; font-weight: 800; color: #003b73; margin-bottom: 4px; line-height: 1.5; }
.card1-desc { font-size: 11px; font-weight: 800; color: #0066b3; line-height: 1.6; margin-bottom: 14px; }
.card1-footer { display: flex; justify-content: center; align-items: center; gap: 6px; border-top: 1px solid #f0f0f0; padding-top: 12px; font-size: 11.5px; color: #0066b3; font-weight: 600; margin-top: auto; }
@media (max-width: 768px) { .card1 { width: calc(50% - 10px); } }
</style>
