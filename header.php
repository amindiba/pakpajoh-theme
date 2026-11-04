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

<header id="masthead" class="site-header sticky-header">
    <div class="header-inner">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
                <span class="brand-pp">P.P</span>
                <span class="brand-text-group">
                    <span class="brand-name">شرکت پاک‌پژوه</span>
                    <span class="brand-url">pakpajoh.ir</span>
                </span>
                <span class="status-dot"></span>
            </a>
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

        <div class="header-actions">
            <a href="tel:+982191092123" class="btn-header btn-header-phone">
                <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                <span class="btn-text">۰۲۱-۹۱۰۹۲۱۲۳</span>
            </a>
            <a href="/request/" class="btn-header btn-header-primary">
                <span class="btn-text">ثبت درخواست</span>
                <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
        <button class="mobile-menu-toggle" aria-label="باز کردن منو">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
<main id="main" class="site-main">
