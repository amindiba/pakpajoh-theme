<?php
/**
 * سیستم مودال یکپارچه پنل مدیریت
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// افزودن مودال به فوتر ادمین
add_action( 'admin_footer', 'pakpajoh_admin_modals' );
function pakpajoh_admin_modals() {
    ?>
    <div id="pakpajoh-modal-overlay" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.7);z-index:999999;align-items:center;justify-content:center;padding:20px;">
        <div id="pakpajoh-modal-box" style="background:#fff;border-radius:20px;padding:32px;width:100%;max-width:480px;position:relative;box-shadow:0 25px 80px rgba(0,0,0,0.4);max-height:90vh;overflow-y:auto;">
            <button type="button" onclick="pakpajohCloseModal()" style="position:absolute;top:16px;left:16px;background:#f0f0f1;border:none;width:36px;height:36px;border-radius:50%;cursor:pointer;font-size:1.1rem;color:#666;">✕</button>
            <div id="pakpajoh-modal-content"></div>
        </div>
    </div>

    <script>
    function pakpajohOpenModal(html) {
        var overlay = document.getElementById('pakpajoh-modal-overlay');
        var content = document.getElementById('pakpajoh-modal-content');
        if (!overlay || !content) return;
        content.innerHTML = html;
        overlay.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function pakpajohCloseModal() {
        var overlay = document.getElementById('pakpajoh-modal-overlay');
        if (!overlay) return;
        overlay.style.display = 'none';
        document.body.style.overflow = '';
    }

    document.addEventListener('DOMContentLoaded', function() {
        var overlay = document.getElementById('pakpajoh-modal-overlay');
        if (overlay) {
            overlay.addEventListener('click', function(e) {
                if (e.target === this) pakpajohCloseModal();
            });
        }
    });
    </script>
    <?php
}