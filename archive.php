<?php get_header(); ?>
<div class="content archive">
	<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="archive-post">
			<h2 class="archive-post-title"><?php the_title(); ?></h2>
			<p class="archive-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
 			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
</div>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
