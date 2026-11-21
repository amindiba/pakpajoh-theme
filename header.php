<?php
/**
 * Header — PakPajoh Theme (v3.0)
 * طراحی: موکاپ کارفرما | پالت: سبز (DESIGN-SYSTEM.md)
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
    <div class="header-container">
        <!-- لوگو (راست‌چین) -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="پاک پژوه - صفحه اصلی">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="پاک پژوه" class="site-logo-img" width="140" height="50" loading="eager">
        </a>

        <!-- منوی اصلی (وسط) -->
        <nav class="main-navigation" aria-label="منوی اصلی">
            <ul class="primary-menu">
                <li class="menu-item has-mega">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>>
                        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="menu-item has-mega">
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" <?php echo ( is_page( 'services' ) || is_singular( 'pp_service' ) || is_post_type_archive( 'pp_service' ) ) ? 'aria-current="page"' : ''; ?>>
                        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                        <span>خدمات ما</span>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-inner">
                            <div class="mega-col">
                                <h4>نظافت صنعتی</h4>
                                <ul>
                                    <li><a href="#">نظافت کارخانه‌ها</a></li>
                                    <li><a href="#">نظافت انبارها</a></li>
                                    <li><a href="#">نظافت پالایشگاه</a></li>
                                </ul>
                            </div>
                            <div class="mega-col">
                                <h4>نظافت تجاری</h4>
                                <ul>
                                    <li><a href="#">نظافت مراکز خرید</a></li>
                                    <li><a href="#">نظافت هتل‌ها</a></li>
                                    <li><a href="#">نظافت بیمارستان‌ها</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="menu-item has-mega">
                    <a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>" <?php echo is_page( 'activities' ) ? 'aria-current="page"' : ''; ?>>
                        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        <span>حوزه‌های فعالیت</span>
                    </a>
                </li>
                <li class="menu-item has-mega">
                    <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" <?php echo is_page( 'process' ) ? 'aria-current="page"' : ''; ?>>
                        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>روش کار ما</span>
                    </a>
                </li>
                <li class="menu-item has-mega">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php echo is_page( 'about' ) ? 'aria-current="page"' : ''; ?>>
                        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                        <span>درباره پاک پژوه</span>
                    </a>
                </li>
                <li class="menu-item has-mega">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" <?php echo is_page( 'contact' ) ? 'aria-current="page"' : ''; ?>>
                        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span>تماس با ما</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- دکمه CTA (چپ) -->
        <div class="header-actions">
            <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="btn-header-cta" aria-label="درخواست بازدید اولیه">
                <svg class="cta-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
                <span>درخواست بازدید اولیه</span>
            </a>
        </div>

        <!-- دکمه منوی موبایل -->
        <button class="mobile-menu-toggle" type="button" aria-label="باز کردن منو" aria-expanded="false" aria-controls="mobile-drawer">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- دراور موبایل -->
<button class="mobile-drawer-overlay" type="button" aria-label="بستن منو" aria-hidden="true" tabindex="-1"></button>
<aside id="mobile-drawer" class="mobile-drawer" role="dialog" aria-modal="true" aria-labelledby="mobile-drawer-title" aria-hidden="true" tabindex="-1">
    <div class="mobile-drawer-header">
        <div class="mobile-drawer-brand">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="پاک پژوه" class="mobile-logo-img" width="100" height="36" loading="lazy">
            <span id="mobile-drawer-title">منوی اصلی</span>
        </div>
        <button class="mobile-drawer-close" type="button" aria-label="بستن منو">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
    <nav class="mobile-drawer-nav" aria-label="پیمایش موبایل">
        <ul class="mobile-menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>>صفحه اصلی<span class="mobile-nav-arrow" aria-hidden="true">←</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" <?php echo ( is_page( 'services' ) || is_singular( 'pp_service' ) || is_post_type_archive( 'pp_service' ) ) ? 'aria-current="page"' : ''; ?>>خدمات ما<span class="mobile-nav-arrow" aria-hidden="true">←</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>" <?php echo is_page( 'activities' ) ? 'aria-current="page"' : ''; ?>>حوزه‌های فعالیت<span class="mobile-nav-arrow" aria-hidden="true">←</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" <?php echo is_page( 'process' ) ? 'aria-current="page"' : ''; ?>>روش کار ما<span class="mobile-nav-arrow" aria-hidden="true">←</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php echo is_page( 'about' ) ? 'aria-current="page"' : ''; ?>>درباره پاک پژوه<span class="mobile-nav-arrow" aria-hidden="true">←</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" <?php echo is_page( 'contact' ) ? 'aria-current="page"' : ''; ?>>تماس با ما<span class="mobile-nav-arrow" aria-hidden="true">←</span></a></li>
        </ul>
    </nav>
    <div class="mobile-drawer-footer">
        <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="btn-header-cta mobile-cta" aria-label="درخواست بازدید اولیه">
            <svg class="cta-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            <span>درخواست بازدید اولیه</span>
        </a>
    </div>
</aside>

<main id="main" class="site-main">



