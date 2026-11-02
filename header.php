<?php
/**
 * هدر قالب
 */
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

<header id="masthead" class="site-header">
    <div class="header-inner">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-text">PAKPAJOH</a>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>
        <div class="header-contact">
            <a href="tel:+982112345678" class="header-phone">+98 21 1234 5678</a>
            <a href="/contact/" class="btn-accent">درخواست کارشناسی</a>
        </div>
    </div>
</header>