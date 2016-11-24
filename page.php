<?php get_header(); ?>
  <div id="primary" class="page-content">
    <div id="content" role="main">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
