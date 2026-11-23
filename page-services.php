<?php
/**
 * Template Name: صفحه خدمات ما
 */
get_header();
?>
<?php get_template_part( 'template-parts/activities/hero-services' ); ?>
<?php get_template_part( 'template-parts/activities/services-cards' ); ?>
<?php get_template_part( 'template-parts/activities/service-modal' ); ?>
<?php get_template_part( 'template-parts/activities/process-services' ); ?>
<?php get_template_part( 'template-parts/activities/doc-samples' ); ?>
<?php get_template_part( 'template-parts/activities/cooperation-scope' ); ?>
<?php get_template_part( 'template-parts/activities/difference-section' ); ?>
<style>
.sv-cards-title, .process-title, .doc-samples-title, .diff-title, .coop-title, .svc-modal-title { font-size: 26px; font-weight: 800; color: #003b73; }

@media (max-width: 1024px) {
    .services-page-hero { min-height: 390px; padding: 28px 0; }
    .services-page-hero .hero-content { width: 100%; max-width: 560px; text-align: right; }
    .sv-cards-section { padding: 38px 0; }
    .sv-cards-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 30px 14px; }
    .process-services-section { padding: 24px 16px; }
    .process-services-container { padding: 20px 16px; border-radius: 18px; }
    .process-header { margin-bottom: 20px; }
    .process-timeline { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
    .process-arrow { display: none; }
    .process-step { display: grid; grid-template-columns: 36px minmax(0, 1fr); align-items: center; gap: 6px; min-width: 0; }
    .process-icon { width: 36px; height: 36px; margin: 0; border-width: 1px; }
    .process-icon svg { width: 22px; height: 22px; }
    .process-card { width: auto; min-width: 0; padding: 9px 7px; }
    .process-step-title { font-size: 0.78rem; line-height: 1.45; }
    .process-step-desc { font-size: 0.68rem; line-height: 1.45; }
    .doc-samples-section { padding: 24px 14px; }
    .doc-samples-wrapper { padding: 20px; border-radius: 18px; }
    .doc-samples-body { gap: 14px; }
    .doc-samples-scope { width: 100%; min-height: 0; }
    .doc-samples-cards-parent { padding: 16px; }
    .doc-samples-cards { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
    .doc-card-image-wrap { height: 90px; }
    .scope-list { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 2px 12px; padding: 0; margin: 0; list-style: none; }
    .scope-list li { font-size: 0.78rem; line-height: 1.5; gap: 7px; padding: 5px 0; }
    .scope-list li:last-child { grid-column: 1 / -1; }
    .coop-section, .diff-section { padding: 24px 14px; }
    .coop-container, .diff-container { padding: 22px; border-radius: 18px; }
    .coop-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
    .coop-card { padding: 14px; border-radius: 12px; }
    .coop-card-title { font-size: 0.86rem; line-height: 1.5; }
    .coop-card-desc { font-size: 0.76rem; line-height: 1.65; }
    .diff-columns { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
    .diff-column { padding: 10px; }
    .diff-column:not(:last-child)::after { display: none; }
    .svc-modal-dialog { width: min(100% - 32px, 600px); max-height: calc(100vh - 32px); max-height: calc(100dvh - 32px); overflow-y: auto; padding: 24px; }
}

@media (max-width: 768px) {
    .services-page-hero { min-height: 0; padding: 26px 0 22px; }
    .services-page-hero .hero-container { justify-content: flex-start; padding: 0 16px; }
    .services-page-hero .hero-content { max-width: 540px; padding: 14px 0; }
    .services-page-hero .hero-slide .hero-overlay { background: linear-gradient(90deg, rgba(255,255,255,0.93), rgba(255,255,255,0.84)); }
    .services-page-hero .hero-title { font-size: clamp(1.25rem, 5vw, 1.55rem); line-height: 1.5; letter-spacing: 0; margin-bottom: 7px; }
    .services-page-hero .hero-desc { max-width: 460px; font-size: 0.78rem; font-weight: 500; line-height: 1.75; margin: 0 0 12px; }
    .services-page-hero .hero-actions { flex-direction: row; align-items: stretch; gap: 8px; margin: 0; }
    .services-page-hero .btn { width: auto; min-height: 40px; padding: 7px 8px; border-radius: 11px; font-size: 0.72rem; line-height: 1.45; }
    .services-page-hero .hero-pagination { display: none; }
    .sv-cards-section { padding: 25px 0 22px; }
    .sv-cards-container { padding: 0 14px; }
    .sv-cards-title { max-width: 100%; margin: 0 0 20px; font-size: 1.05rem !important; line-height: 1.5; }
    .sv-cards-title::before, .sv-cards-title::after { display: none; }
    .sv-cards-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 28px 10px; margin-top: 22px; }
    .sv-card { min-width: 0; padding: 28px 8px 8px; border-radius: 12px; box-shadow: 0 3px 12px rgba(0,0,0,0.05); }
    .sv-card-icon-circle { top: -17px; width: 40px; height: 40px; }
    .sv-card-icon-circle svg { width: 22px; height: 22px; }
    .sv-card-title { font-size: 0.76rem; line-height: 1.45; }
    .sv-card-desc { font-size: 0.68rem; line-height: 1.5; margin: 4px 0 7px; }
    .sv-card-image-wrap { padding: 5px; border-radius: 9px; }
    .sv-card-image-wrap img { height: 76px; border-radius: 6px; }
    .sv-card-overlay { left: 5px; right: 5px; bottom: 5px; height: 24px; gap: 4px; border-radius: 6px; }
    .sv-card-more { font-size: 0.64rem; }
    .sv-card-arrow { font-size: 0.75rem; }
    .sv-card:active { transform: scale(0.99); }
    .sv-card:focus-visible { outline: 3px solid #35BA38; outline-offset: 3px; }
    .process-services-section { padding: 18px 12px; }
    .process-services-container { padding: 14px 10px; border-radius: 15px; }
    .process-title { font-size: 1.05rem !important; line-height: 1.5; }
    .process-header { margin-bottom: 14px; }
    .process-timeline { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; }
    .process-step { grid-template-columns: 28px minmax(0, 1fr); gap: 5px; }
    .process-icon { width: 28px; height: 28px; }
    .process-icon svg { width: 18px; height: 18px; }
    .process-card { padding: 7px 5px; border-radius: 9px; }
    .process-step-title { font-size: 0.68rem; line-height: 1.45; }
    .process-step-desc { font-size: 0.62rem; }
    .doc-samples-section { padding: 16px 10px; }
    .doc-samples-wrapper { padding: 0; border-radius: 0; }
    .doc-samples-body { gap: 10px; }
    .doc-samples-scope { border-radius: 12px; }
    .scope-content { padding: 10px 12px; margin: 9px; border-radius: 9px; }
    .scope-title { font-size: 0.9rem; margin-bottom: 5px; }
    .scope-list { gap: 0 8px; }
    .scope-list li { font-size: 0.68rem; line-height: 1.45; gap: 5px; padding: 4px 0; }
    .scope-check { width: 17px; height: 17px; font-size: 0.6rem; }
    .doc-samples-cards-parent { padding: 12px; border-radius: 12px; }
    .doc-samples-header { margin-bottom: 10px; }
    .doc-samples-title { font-size: 0.95rem !important; line-height: 1.5; margin-bottom: 3px; }
    .doc-samples-subtitle { font-size: 0.7rem; line-height: 1.5; }
    .doc-samples-cards { gap: 8px; }
    .doc-card { border-radius: 10px; cursor: default; }
    .doc-card-image-wrap { height: 72px; }
    .doc-card-badge { top: 5px; left: 5px; font-size: 0.58rem; padding: 3px 5px; transform: none; }
    .doc-card-title { font-size: 0.69rem; line-height: 1.45; margin: 7px 6px 2px; }
    .doc-card-desc { font-size: 0.63rem; line-height: 1.4; margin: 0 6px 7px; }
    .coop-section, .diff-section { padding: 16px 10px; }
    .coop-container, .diff-container { padding: 14px 12px; border-radius: 14px; }
    .coop-title, .diff-title { font-size: 0.98rem !important; line-height: 1.5; margin-bottom: 8px; }
    .coop-desc { font-size: 0.73rem; line-height: 1.65; margin-bottom: 12px; }
    .coop-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; }
    .coop-card { padding: 10px; border-radius: 10px; }
    .coop-card:last-child { grid-column: 1 / -1; }
    .coop-card-title { font-size: 0.75rem; line-height: 1.5; margin-bottom: 4px; }
    .coop-card-desc { font-size: 0.68rem; line-height: 1.6; }
    .diff-columns { gap: 7px; }
    .diff-column { padding: 8px 6px; border: 1px solid rgba(0,68,100,0.08); border-radius: 10px; background: rgba(255,255,255,0.55); }
    .diff-icon-wrapper { width: 34px; height: 34px; margin-bottom: 6px; }
    .diff-icon-wrapper svg { width: 20px; height: 20px; }
    .diff-column-title { font-size: 0.72rem; line-height: 1.45; margin-bottom: 3px; }
    .diff-column-desc { font-size: 0.64rem; line-height: 1.45; }
    .svc-modal-dialog { width: calc(100% - 24px); max-height: calc(100vh - 24px); max-height: calc(100dvh - 24px); padding: 20px 15px 15px; border-radius: 15px; }
    .svc-modal-close { top: 8px; left: 8px; width: 32px; height: 32px; font-size: 19px; }
    .svc-modal-title { padding-left: 32px; font-size: 1rem !important; line-height: 1.5; }
    .svc-modal-desc, .svc-modal-problem { font-size: 0.76rem; line-height: 1.65; }
    .svc-modal-sub { font-size: 0.8rem; margin: 10px 0 4px; }
    .svc-modal-list { padding-right: 17px; font-size: 0.72rem; line-height: 1.65; }
    .svc-modal-actions { margin-top: 14px; }
    .svc-modal-btn { padding: 8px 16px; font-size: 0.76rem; }
}

@media (max-width: 380px) {
    .services-page-hero .hero-title { font-size: 1.2rem; }
    .services-page-hero .hero-desc { font-size: 0.74rem; }
    .sv-cards-container { padding: 0 11px; }
    .sv-card { padding-right: 6px; padding-left: 6px; }
    .sv-card-title { font-size: 0.72rem; }
    .sv-card-desc { font-size: 0.64rem; }
    .process-timeline { gap: 6px; }
    .process-step { grid-template-columns: 24px minmax(0, 1fr); gap: 4px; }
    .process-icon { width: 24px; height: 24px; }
    .process-icon svg { width: 16px; height: 16px; }
    .process-step-title { font-size: 0.64rem; }
    .scope-list li { font-size: 0.64rem; }
    .coop-card { padding: 8px; }
}

@media (prefers-reduced-motion: reduce) {
    .services-page-hero *, .sv-card, .process-card, .doc-card { animation: none !important; transition: none !important; }
}
</style>
<?php get_footer(); ?>
