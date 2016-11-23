<?php

function zach_special_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'zach_special_wp_title' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'zach_special_wp_title', 10, 2 );


if ( ! function_exists( 'zach_setup' ) ) :
function zach_setup() {
	load_theme_textdomain( 'zach' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'zach' ),
		'footer' => __( 'Footer Menu', 'zach' )
	) );
}
endif;
add_action( 'after_setup_theme', 'zach_setup' );

function zach_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zach_content_width', 840 );
}
add_action( 'after_setup_theme', 'zach_content_width', 0 );

if ( ! function_exists( 'zach_fonts_url' ) ) :
function zach_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	if ( 'off' !== _x( 'on', 'Raleway font: on or off', 'zach' ) ) {
		$fonts[] = 'Raleway:400,700';
	}
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}
	return $fonts_url;
}
endif;
function zach_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'zach-fonts', zach_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'zach-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pretty', get_template_directory_uri() . '/css/pretty.css' );

	wp_enqueue_script( 'zach-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );
}
add_action( 'wp_enqueue_scripts', 'zach_scripts' );
/**
 * Converts a HEX value to RGB.
 */
function zach_hex2rgb( $color ) {
	$color = trim( $color, '#' );
	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}
	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
