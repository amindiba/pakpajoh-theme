<?php
/**
 * Area Modal — PakPajoh Theme
 */
?>
<div class="area-modal" id="areaModal" aria-hidden="true">
    <div class="area-modal-overlay" data-close="1"></div>
    <div class="area-modal-dialog" role="dialog" aria-modal="true">
        <button class="area-modal-close" data-close="1" aria-label="بستن">×</button>
        <h2 class="area-modal-title" id="areaModalTitle"></h2>
        <p class="area-modal-desc" id="areaModalDesc"></p>
        <h3 class="area-modal-sub">فضاهای قابل بررسی</h3>
        <ul class="area-modal-list" id="areaModalSpaces"></ul>
        <h3 class="area-modal-sub">ملاحظات اختصاصی</h3>
        <ul class="area-modal-list" id="areaModalNotes"></ul>
        <h3 class="area-modal-sub">خدمات مرتبط پاک پژوه</h3>
        <ul class="area-modal-list" id="areaModalServices"></ul>
        <div class="area-modal-actions">
            <a href="/?area=manufacturing#request-form" class="area-modal-btn" id="areaModalBtn">درخواست بررسی</a>
        </div>
    </div>
</div>
<style>
.area-modal { position: fixed; inset: 0; z-index: 9999; display: none; align-items: center; justify-content: center; }
.area-modal.is-open { display: flex; }
.area-modal-overlay { position: absolute; inset: 0; background: rgba(0,10,25,0.75); backdrop-filter: blur(6px); }
.area-modal-dialog { position: relative; z-index: 2; max-width: 720px; width: 92%; background: #fff; border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 60px rgba(0,0,0,0.25); animation: areaFade .25s ease; max-height: 85vh; overflow-y: auto; }
@keyframes areaFade { from { opacity:0; transform: translateY(20px);} to { opacity:1; transform: translateY(0);} }
.area-modal-close { position: absolute; top: 12px; left: 12px; width: 36px; height: 36px; border: none; background: #f0f5f9; border-radius: 50%; font-size: 22px; cursor: pointer; color: #003b73; }
.area-modal-title { font-size: 22px; font-weight: 800; color: #003b73; margin-bottom: 8px; }
.area-modal-desc { font-size: 14px; color: #444; margin-bottom: 16px; line-height: 1.7; }
.area-modal-sub { font-size: 16px; font-weight: 800; color: #1e3a8a; margin: 14px 0 6px; }
.area-modal-list { margin: 0; padding-right: 20px; color: #444; font-size: 14px; line-height: 1.8; }
.area-modal-actions { margin-top: 20px; text-align: center; }
.area-modal-btn { display: inline-block; background: #35BA38; color: #fff; padding: 10px 24px; border-radius: 10px; font-weight: 700; text-decoration: none; }
@media (max-width: 640px) { .area-modal-dialog { margin: 4vh 12px; padding: 24px 18px; } }
</style>
<script>
(function(){
  var data = {
    manufacturing: {
      title: 'کارخانه‌ها و محیط‌های تولیدی',
      desc: 'پاکیزگی برنامه‌ریزی‌شده در محیط‌های تولیدی با توجه به شرایط عملیاتی.',
      spaces: ['سالن‌های تولید','خطوط و ایستگاه‌های کاری','راهروها و مسیرهای تردد','فضاهای انبارش مواد اولیه و محصولات','فضاهای اداری مستقر در کارخانه','رختکن‌ها و فضاهای خدماتی','فضاهای عمومی و پشتیبانی'],
      notes: ['هماهنگی زمان اجرای خدمات با برنامه تولید','توجه به نوع کفپوش، سطوح و تجهیزات','شناسایی نقاط پرتردد و نقاط تجمع آلودگی','تفکیک فعالیت‌های روزانه، دوره‌ای و موردی','تعیین روش و تناوب مناسب پاکیزگی','توجه به محدودیت‌های عملیاتی و ایمنی محیط','تعریف معیارهای ارزیابی کیفیت و ثبت نتایج'],
      services: ['شناخت محیط و طراحی برنامه پاکیزگی','مدیریت و اجرای عملیات پاکیزگی','کنترل کیفیت و پیگیری اصلاحات','مستندسازی و گزارش‌دهی']
    },
    warehousing: {
      title: 'انبارها و مراکز نگهداری کالا',
      desc: 'مدیریت پاکیزگی در انبارها و فضاهای نگهداری.',
      spaces: ['انبار مواد اولیه','انبار محصولات نهایی','انبار قطعات و تجهیزات','سالن‌های نگهداری کالا','راهروهای قفسه‌بندی','محل‌های بارگیری و تخلیه','فضاهای اداری و خدماتی انبار'],
      notes: ['توجه به نوع کالا و شرایط نگهداری آن','برنامه‌ریزی برای راهروها و مسیرهای تردد','هماهنگی عملیات پاکیزگی با جابه‌جایی کالا','شناسایی نقاط تجمع گردوغبار و آلودگی','توجه به نوع سطوح و کفسازی','تعیین زمان‌بندی مناسب برای اجرای فعالیت‌ها','تفکیک فضاهای عملیاتی، عمومی و پشتیبانی'],
      services: ['شناخت و دسته‌بندی فضاهای انبار','طراحی برنامه پاکیزگی','مدیریت اجرای عملیات','ارزیابی کیفیت و ثبت نواقص','گزارش‌دهی و پیگیری اصلاحات']
    },
    logistics: {
      title: 'مراکز لجستیکی و توزیع',
      desc: 'پاکیزگی هماهنگ با جریان عملیات لجستیکی.',
      spaces: ['سالن‌های پردازش و آماده‌سازی کالا','محل‌های بارگیری و تخلیه','مسیرهای حرکت وسایل نقلیه و تجهیزات','محل‌های تفکیک و بسته‌بندی','فضاهای نگهداری موقت','راهروها و مسیرهای ارتباطی','فضاهای اداری و پشتیبانی'],
      notes: ['هماهنگی زمان اجرای خدمات با جریان عملیات','شناسایی مسیرهای پرتردد و نقاط پرکاربرد','تفکیک محدوده‌های عملیاتی و عمومی','تعیین تناوب پاکیزگی متناسب با میزان استفاده','توجه به نقاط تجمع آلودگی','هماهنگی اجرای خدمات با فعالیت تجهیزات جابه‌جایی','ثبت و پیگیری نواقص مشاهده‌شده'],
      services: ['شناخت محیط و طراحی برنامه','مدیریت عملیات پاکیزگی','کنترل کیفیت','ثبت فعالیت‌ها و گزارش‌دهی']
    },
    healthcare: {
      title: 'بیمارستان‌ها، درمانگاه‌ها و مراکز درمانی',
      desc: 'پاکیزگی برنامه‌ریزی‌شده در محیط‌های درمانی.',
      spaces: ['بیمارستان‌ها','درمانگاه‌ها','مراکز درمانی و تخصصی','لابی و فضاهای پذیرش','سالن‌های انتظار','راهروها و فضاهای عمومی','اتاق‌های اداری و پشتیبانی','فضاهای بستری و بخش‌های درمانی'],
      notes: ['تفکیک فضاها بر اساس نوع کاربری و سطح حساسیت','رعایت دستورالعمل‌های بهداشتی و کنترل عفونت مرکز','تعیین روش و تناوب پاکیزگی متناسب با هر بخش','توجه به مواد شوینده و ضدعفونی‌کننده مورد تأیید مرکز','هماهنگی زمان اجرای خدمات با فعالیت بخش‌های درمانی','تعیین چک‌لیست‌های ارزیابی و ثبت نتایج','مشخص‌کردن مسئولیت‌ها و نحوه گزارش‌دهی','توجه به الزامات ایمنی کارکنان و مراجعان'],
      services: ['شناخت فضاها و دسته‌بندی محیط‌های درمانی','طراحی برنامه متناسب با کاربری فضاها','مدیریت اجرای خدمات در دامنه توافق‌شده','ارزیابی کیفیت و ثبت نتایج','مستندسازی و گزارش‌دهی']
    },
    hospitality: {
      title: 'هتل‌ها و مراکز اقامتی',
      desc: 'پاکیزگی منسجم در فضاهای اقامتی و پذیرایی.',
      spaces: ['اتاق‌ها و سوئیت‌های اقامتی','لابی و پذیرش','راهروها و آسانسورها','رستوران‌ها و سالن‌های پذیرایی','سالن‌های همایش و جلسات','فضاهای عمومی و رفاهی','فضاهای اداری و پشتیبانی','فضاهای خدماتی و پشتیبانی هتل'],
      notes: ['هماهنگی عملیات پاکیزگی با ورود و خروج مهمانان','تعیین برنامه آماده‌سازی و پاکیزگی اتاق‌ها','توجه به تفاوت نیازهای فضاهای عمومی و اختصاصی','برنامه‌ریزی متناسب با ساعات فعالیت رستوران و سالن‌ها','تعیین تناوب پاکیزگی فضاهای پرتردد','تعریف معیارهای ارزیابی کیفیت','ثبت نواقص و پیگیری اصلاحات','هماهنگی فعالیت‌ها با برنامه کاری بخش خانه‌داری'],
      services: ['شناخت فضاهای اقامتی و عمومی','طراحی برنامه اختصاصی پاکیزگی','مدیریت اجرای عملیات','کنترل کیفیت و پیگیری اصلاحات','مستندسازی و گزارش‌دهی']
    }
  };
  function openModal(key){
    var d = data[key]; if(!d) return;
    document.getElementById('areaModalTitle').textContent = d.title;
    document.getElementById('areaModalDesc').textContent = d.desc;
    var s = document.getElementById('areaModalSpaces'); s.innerHTML=''; d.spaces.forEach(function(t){var li=document.createElement('li');li.textContent=t;s.appendChild(li);});
    var n = document.getElementById('areaModalNotes'); n.innerHTML=''; d.notes.forEach(function(t){var li=document.createElement('li');li.textContent=t;n.appendChild(li);});
    var sv = document.getElementById('areaModalServices'); sv.innerHTML=''; d.services.forEach(function(t){var li=document.createElement('li');li.textContent=t;sv.appendChild(li);});
    document.getElementById('areaModalBtn').href = '/?area=' + key + '#request-form';
    document.getElementById('areaModal').classList.add('is-open');
    document.getElementById('areaModal').setAttribute('aria-hidden','false');
  }
  function closeModal(){
    document.getElementById('areaModal').classList.remove('is-open');
    document.getElementById('areaModal').setAttribute('aria-hidden','true');
  }
  document.addEventListener('click', function(e){
    var card = e.target.closest('.card1[data-area]');
    if(card){ openModal(card.getAttribute('data-area')); return; }
    if(e.target && e.target.getAttribute && e.target.getAttribute('data-close')){ closeModal(); }
  });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape') closeModal(); });
})();
</script>
