<?php

if (!defined('ABSPATH')) {
    exit;
}

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="lw-topbar">
    <div class="container">
        <div class="lw-topbar-inner">
            <div class="lw-topbar-left">
                <span class="lw-topbar-badge">Trusted partner in business excellence</span>
                <a class="lw-topbar-link" href="#">Join us now</a>
            </div>
            <div class="lw-topbar-right">
                <span class="lw-topbar-item">
                    <span class="lw-topbar-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" stroke="currentColor" stroke-width="2"/></svg>
                    </span>
                    Mon - Friday from 9:00 - 18:00
                </span>
                <a class="lw-topbar-item" href="mailto:support@lexwell.co.in">
                    <span class="lw-topbar-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16v16H4V4Z" stroke="currentColor" stroke-width="2"/><path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    support@lexwell.co.in
                </a>
            </div>
        </div>
    </div>
</div>

<header class="lw-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg lw-navbar" aria-label="Primary navigation">
            <a class="navbar-brand m-0" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<span class="fw-bold">' . esc_html(get_bloginfo('name')) . '</span>';
                }
                ?>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="primaryNav">
                <div class="lw-navbar-pill mx-lg-auto">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav lw-primary-menu',
                            'fallback_cb'    => '__return_false',
                            'depth'          => 2,
                            'walker'         => new Lexwell_Bootstrap_Navwalker(),
                        ]);
                    } else {
                        echo '<ul class="navbar-nav lw-primary-menu">'
                            . '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">Home</a></li>'
                            . '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/about/')) . '">About</a></li>'
                            . '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/services/')) . '">Services</a></li>'
                            . '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>'
                            . '</ul>';
                    }
                    ?>
                </div>

                <div class="lw-navbar-actions ms-lg-auto">
                    <a class="lw-explore" href="#">Explore</a>
                    <button class="lw-icon-btn" type="button" data-bs-toggle="collapse" data-bs-target="#lwHeaderSearch" aria-controls="lwHeaderSearch" aria-expanded="false" aria-label="Toggle search">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 19a8 8 0 1 1 0-16 8 8 0 0 1 0 16Z" stroke="currentColor" stroke-width="2"/><path d="m21 21-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </button>
                    <a class="btn btn-dark lw-cta-btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
                        <span class="lw-cta-plus" aria-hidden="true">+</span>
                        Get in touch
                    </a>
                </div>

                <div class="collapse lw-header-search" id="lwHeaderSearch">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </div>
</header>
