<?php get_header(); ?>
<div class="content page">
  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page-content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; endif; ?>
</div>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
