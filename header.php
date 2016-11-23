<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page">
        <div class="header">
            <!-- This isn't totally mobile-friendly right now. -->
            <div id="header-star"></div>
            <div id="header-star"></div>
            <div class="nav"><?php wp_nav_menu(); ?></div>
            <div id="header-star" class="right"></div>
            <div id="header-star" class="right"></div>
        </div>
