  <!-- start aside --> 
  <aside id="sidebar">

<!------- search form ------>

<?php include(TEMPLATEPATH.'/searchform.php'); ?>

<!---- end-search form ----->


  <div class="sidebar-olist"> 
      <h3>Categories</h3> 
      <ol> 
      <?php wp_list_categories('title_li=&orderby=name'); ?> 
      </ol> 
    </div> 
    

    <div class="sidebar-ulist"> 
      <h3>Recent Posts</h3> 
      <ul> 
  <?php 
        $recent = new WP_Query(); 
        $recent -> query('showposts=3'); 
        while($recent -> have_posts()) : $recent -> the_post(); 
    ?> 
  <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
    <?php the_title(); ?> 
    </a></li> 
  <?php endwhile; ?> 
</ul>
    </div>
     

    <div class="sidebar-ulist"> 
      <h3>Archives</h3> 
   <ul><?php wp_get_archives('type=monthly&limit=7'); ?></ul> 

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>

    </div> 

  </aside> 
  <!-- end aside -->
  <div class="shim"></div>
</div> <!-- wrapper -->