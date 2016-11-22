<?php get_header(); ?>
<div class="fourohfour">
    <div class="center">
    <h4>It's dead, Jim.</h4>
    </div>
<div class="sidebar">
    <div id="search-2" class="widget widget_search">
        <form method="get" id="search-form" action="<?php bloginfo('url'); ?>" _lpchecked="1">
            <input type="text" id="search-text" class="input-text waterfall" name="s" placeholder="Search …">
            <button type="submit" id="search-button"><i class="icon-search"></i></button>
        </form>
    </div>
    <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
