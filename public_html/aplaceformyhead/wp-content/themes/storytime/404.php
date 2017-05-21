<?php get_header(); ?>

<div id="block">

<div id="block_content">

<h1>404 - page not found</h1>
<p>Sorry, the page you’re looking for has gotten lost! Either keep looking, or try to find what you were after below.</p>
<div class="separator"></div>
</div>

<div class="content_area">
<h4>Sitemap</h4>
<ul><?php wp_get_archives('type=postbypost'); ?></ul>
<div class="separator"></div>

<h4>Search the Site</h4>
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
<div class="separator"></div>
</div>

<div class="content_area">
<h4>Pages</h4>
<ul><?php wp_list_pages('title_li='); ?></ul>
</div>

</div>

</div>

<?php get_sidebar(); ?>

<!-- a Clearing DIV to clear the DIV’s because overflow:auto doesn’t work here -->
<div style="clear:both"></div>

<?php get_footer(); ?>