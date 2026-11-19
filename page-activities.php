<?php
/**
 * Template Name: Activities
 * @package PakPajoh
 */
get_header();
?>
<main id="primary" class="site-main activities-page">
    <?php get_template_part( 'template-parts/activities/hero' ); ?>
    <?php get_template_part( 'template-parts/activities/areas' ); ?>
    <?php get_template_part( 'template-parts/activities/two-cards' ); ?>
<?php get_template_part( 'template-parts/activities/cooperation-process' ); ?>
<?php get_template_part( 'template-parts/activities/last-section' ); ?>
    <?php get_template_part( 'template-parts/activities/integrated-services' ); ?>
    <?php get_template_part( 'template-parts/activities/space-engineering' ); ?>
<?php get_template_part( 'template-parts/activities/area-modal' ); ?>
</main>
<?php
get_footer();
?>

<style>
.space-eng-section, .integrated-section { opacity: 0; transform: translateY(40px); transition: opacity 0.7s ease, transform 0.7s ease; }
.space-eng-section.revealed, .integrated-section.revealed { opacity: 1; transform: translateY(0); }
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('revealed'); obs.unobserve(e.target); }
        });
    }, { threshold: 0.15 });
    document.querySelectorAll('.space-eng-section, .integrated-section').forEach(function (el) { obs.observe(el); });
});
</script>
