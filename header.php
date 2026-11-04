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

        <div class="header-contact">
            <a href="tel:+982191092123" class="header-phone" dir="rtl">۰۲۱-۹۱۰۹۲۱۲۳</a>
            <a href="/contact/" class="btn-accent btn-glow">
                <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="btn-text">ثبت درخواست</span>
            </a>
        </div>
        <button class="mobile-menu-toggle" aria-label="باز کردن منو">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
<main id="main" class="site-main">
