<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="wrap">
            <div class="header-star"></div>
            <div class="header-star"></div>
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav class="main-navigation nav" role="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'menu-header',
                    'menu_class'     => 'menu'
                ));
                ?>
                </nav>
            <?php endif; ?>
            <div class="header-star"></div>
            <div class="header-star"></div>
        </div>
    </div>
    <div id="page">
