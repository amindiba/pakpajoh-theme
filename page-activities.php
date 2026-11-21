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
<?php get_footer(); ?>
