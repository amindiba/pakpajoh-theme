<?php
/**
 * PakPajoh A4Site Theme — fallback template
 *
 * @package PakPajoh
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<main id="primary" class="site-main" style="padding:4rem 2rem;max-width:1200px;margin:0 auto;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_title( '<h1>', '</h1>' );
            the_content();
        endwhile;
    else :
        echo '<p>' . esc_html__( 'محتوایی یافت نشد.', 'pakpajoh' ) . '</p>';
    endif;
    ?>
</main>
<?php wp_footer(); ?>
</body>
</html>