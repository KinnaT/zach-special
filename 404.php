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
  <div class="fourohfour">
    <div class="text-left">
      <h1>It's dead, Jim.</h1>
    </div>
    <p class="saveme"><a href="javascript:history.go(-1)">
      <span class="dashicons dashicons-undo"></span>Return to safety</a>
    </p>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
