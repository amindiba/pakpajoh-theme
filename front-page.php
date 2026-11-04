<?php
/**
 * صفحه اصلی
 */
get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/commitments' );
get_template_part( 'template-parts/services' );
get_template_part( 'template-parts/portfolio' );
get_template_part( 'template-parts/testimonials' );
get_template_part( 'template-parts/cta' );

get_footer();
