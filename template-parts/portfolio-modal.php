<?php
/**
 * Portfolio Modal (مشترک بین صفحه اصلی و آرشیو)
 */
?>
<div id="portfolio-modal" class="portfolio-modal" style="display:none;">
    <div class="portfolio-modal-overlay"></div>
    <div class="portfolio-modal-content">
        <div class="portfolio-modal-header">
            <h2 id="modal-title">عنوان پروژه</h2>
            <button class="portfolio-modal-close" aria-label="بستن">✕</button>
        </div>
        <div class="portfolio-modal-divider"></div>
        <div class="portfolio-modal-body">
            <div class="portfolio-modal-image"><img id="modal-image" src="" alt=""></div>
            <p id="modal-excerpt"></p>
            <div class="portfolio-modal-details">
                <div class="modal-detail-item"><strong>محل اجرا:</strong> <span id="modal-location">-</span></div>
                <div class="modal-detail-item"><strong>تاریخ اجرا:</strong> <span id="modal-date">-</span></div>
                <div class="modal-detail-item"><strong>سطح اجرا:</strong> <span id="modal-level">-</span></div>
                <div class="modal-detail-item"><strong>مدت زمان:</strong> <span id="modal-duration">-</span></div>
                <div class="modal-detail-item"><strong>نوع پروژه:</strong> <span id="modal-type">-</span></div>
                <div class="modal-detail-item"><strong>رضایت کارفرما:</strong> <span id="modal-satisfaction">-</span></div>
                <div class="modal-detail-item"><strong>سطح دشواری:</strong> <span id="modal-difficulty">-</span></div>
            </div>
        </div>
    </div>
</div>
