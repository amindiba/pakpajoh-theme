<?php
/**
 * Service Modal — PakPajoh Theme
 */
?>
<div class="svc-modal" id="svcModal" aria-hidden="true">
    <div class="svc-modal-overlay" data-close="1"></div>
    <div class="svc-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="svcModalTitle" tabindex="-1">
        <button class="svc-modal-close" type="button" data-close="1" aria-label="بستن">×</button>
        <h2 class="svc-modal-title" id="svcModalTitle"></h2>
        <p class="svc-modal-desc" id="svcModalDesc"></p>
        <h3 class="svc-modal-sub">مسئله‌ای که خدمت حل می‌کند</h3>
        <p class="svc-modal-problem" id="svcModalProblem"></p>
        <h3 class="svc-modal-sub">فعالیت‌های اصلی</h3>
        <ul class="svc-modal-list" id="svcModalActivities"></ul>
        <h3 class="svc-modal-sub">خروجی‌های قابل تحویل</h3>
        <ul class="svc-modal-list" id="svcModalOutputs"></ul>
        <div class="svc-modal-actions">
            <a href="<?php echo esc_url( home_url( '/#request-form' ) ); ?>" class="svc-modal-btn" id="svcModalBtn">درخواست مشاوره</a>
        </div>
    </div>
</div>
<style>
.svc-modal { position: fixed; inset: 0; z-index: 9999; display: none; align-items: center; justify-content: center; }
.svc-modal.is-open { display: flex; }
.svc-modal-dialog { position: relative; z-index: 2; max-width: 640px; width: 90%; background: #fff; border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 60px rgba(0,0,0,0.25); animation: svcFade .25s ease; }
.svc-modal-overlay { position: absolute; inset: 0; background: rgba(0,10,25,0.75); backdrop-filter: blur(6px); }
@keyframes svcFade { from { opacity:0; transform: translateY(20px);} to { opacity:1; transform: translateY(0);} }
.svc-modal-close { position: absolute; top: 12px; left: 12px; width: 36px; height: 36px; border: none; background: #f0f5f9; border-radius: 50%; font-size: 22px; cursor: pointer; color: #003b73; }
.svc-modal-title { font-size: 22px; font-weight: 800; color: #003b73; margin-bottom: 8px; }
.svc-modal-desc { font-size: 14px; color: #444; margin-bottom: 16px; line-height: 1.7; }
.svc-modal-sub { font-size: 16px; font-weight: 800; color: #1e3a8a; margin: 14px 0 6px; }
.svc-modal-problem { font-size: 14px; color: #444; line-height: 1.7; }
.svc-modal-list { margin: 0; padding-right: 20px; color: #444; font-size: 14px; line-height: 1.8; }
.svc-modal-actions { margin-top: 20px; text-align: center; }
.svc-modal-btn { display: inline-block; background: #35BA38; color: #fff; padding: 10px 24px; border-radius: 10px; font-weight: 700; text-decoration: none; }
</style>
<script>
(function(){
  var data = {
    design: {
      title: 'شناخت محیط و تدوین برنامه',
      desc: 'بررسی ویژگی‌ها، نوع فعالیت، شرایط بهره‌برداری و نیازهای هر محیط و تدوین برنامه متناسب با آن.',
      problem: 'فعالیت‌های پراکنده بدون برنامه مشخص و غیرقابل پایش.',
      activities: ['شناخت فضاها و کاربری هر بخش','بررسی نوع سطوح و آلودگی‌های غالب','تعیین روش و تناوب خدمات','تنظیم برنامه زمانی و مسئولیت‌ها'],
      outputs: ['شناسنامه فضا','برنامه خدمات پاکیزگی','برنامه زمان‌بندی']
    },
    execution: {
      title: 'مدیریت و اجرای عملیات',
      desc: 'سازماندهی و هماهنگی اجرای خدمات بر اساس برنامه مصوب و شرایط عملیاتی محیط.',
      problem: 'عدم هماهنگی در اجرا و نبود نظارت مستمر.',
      activities: ['تعیین نیاز منابع انسانی و اجرایی','برنامه‌ریزی شیفت‌ها و فعالیت‌ها','هماهنگی نیروهای داخلی و همکاران قراردادی','نظارت بر اجرای برنامه توافق‌شده'],
      outputs: ['برنامه اجرایی','برنامه تقسیم وظایف','سوابق اجرای خدمات']
    },
    'quality-control': {
      title: 'کنترل کیفیت و پیگیری اصلاحات',
      desc: 'ارزیابی نتایج خدمات بر اساس معیارهای توافق‌شده، ثبت نواقص و پیگیری اقدامات اصلاحی.',
      problem: 'عدم ارزیابی نظام‌مند و عدم پیگیری اصلاحات.',
      activities: ['تعریف معیارهای ارزیابی','کنترل کیفیت فضاها و فعالیت‌ها','ثبت موارد عدم انطباق با برنامه','پیگیری اصلاحات و ثبت نتیجه'],
      outputs: ['چک‌لیست کنترل کیفیت','گزارش نواقص','سوابق اقدامات اصلاحی']
    },
    documentation: {
      title: 'مستندسازی و گزارش‌دهی',
      desc: 'ثبت اطلاعات و نتایج اجرای خدمات برای ایجاد امکان بررسی، پیگیری و تصمیم‌گیری مدیریتی.',
      problem: 'نبود مستندات قابل اتکا برای تصمیم‌گیری.',
      activities: ['ثبت برنامه‌ها و سوابق اجرا','ثبت نتایج ارزیابی','تهیه گزارش وضعیت خدمات','ارائه گزارش‌های دوره‌ای در چارچوب قرارداد'],
      outputs: ['گزارش عملکرد','سوابق اجرای برنامه','گزارش وضعیت و اصلاحات']
    }
  };
  var modal = document.getElementById('svcModal');
  var closeButton = modal.querySelector('.svc-modal-close');
  var activeCard = null;
  var previousOverflow = '';

  function openModal(key, card){
    var d = data[key]; if(!d) return;
    activeCard = card;
    document.getElementById('svcModalTitle').textContent = d.title;
    document.getElementById('svcModalDesc').textContent = d.desc;
    document.getElementById('svcModalProblem').textContent = d.problem;
    var requestUrl = new URL(document.getElementById('svcModalBtn').href, window.location.origin);
    requestUrl.searchParams.set('service', key);
    requestUrl.hash = 'request-form';
    document.getElementById('svcModalBtn').href = requestUrl.toString();
    var a = document.getElementById('svcModalActivities'); a.innerHTML = '';
    d.activities.forEach(function(t){ var li=document.createElement('li'); li.textContent=t; a.appendChild(li); });
    var o = document.getElementById('svcModalOutputs'); o.innerHTML = '';
    d.outputs.forEach(function(t){ var li=document.createElement('li'); li.textContent=t; o.appendChild(li); });
    previousOverflow = document.body.style.overflow;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden','false');
    document.body.style.overflow = 'hidden';
    closeButton.focus();
  }
  function closeModal(){
    if (!modal.classList.contains('is-open')) return;
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden','true');
    document.body.style.overflow = previousOverflow;
    if (activeCard) activeCard.focus();
    activeCard = null;
  }
  document.addEventListener('click', function(e){
    var card = e.target.closest('.sv-card');
    if(card && card.id && data[card.id]){ openModal(card.id, card); return; }
    if(e.target.closest('[data-close="1"]')){ closeModal(); }
  });
  document.addEventListener('keydown', function(e){
    if (modal.classList.contains('is-open')) {
      if (e.key === 'Escape') {
        closeModal();
        return;
      }
      if (e.key === 'Tab') {
        var focusable = modal.querySelectorAll('button:not([disabled]), a[href]');
        var first = focusable[0];
        var last = focusable[focusable.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
      return;
    }

    var card = e.target.closest('.sv-card');
    if (card && data[card.id] && (e.key === 'Enter' || e.key === ' ')) {
      e.preventDefault();
      openModal(card.id, card);
    }
  });
})();
</script>
