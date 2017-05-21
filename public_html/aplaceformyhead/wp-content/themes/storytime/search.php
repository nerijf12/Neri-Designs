<?php get_header(); ?>

  
  <div class="shim"></div>  
  <!-- start basic posts -->

  <section> 
  <!-- start first post --> 
<div class="separator"></div>
<h4 id="search-header">Search results for '<?php echo($s); ?>'.</h4>
<div class="separator"></div>

<?php if(have_posts()) :while(have_posts()) : the_post(); ?>


  <article class="post-article">
   
      
    <aside class="post-leftsidebar">
    <div class="post-meta">
    <p class="date"><a><?php the_time('j'); ?></a></p>
        <p class="month"><a><?php the_time('F Y'); ?></a></p>
        <p class="author">by <?php the_author_posts_link(); ?></p> 
      </div>  
      <h4>Posted in</h4>
      <p class="catagory"><?php the_category(', '); ?></p>
      <h4>Tags:</h4>
      <p class="tags"><?php the_tags(''); ?></p> 
     
    </aside>
   
  <header class="post-header"> 
      <h1><?php the_title(); ?></h1> 
</header> 

  <div class="post-content">
    <p><?php the_content('-Continue'); ?></p>
    </div>
    
  </article> 
  

<?php endwhile ?>

<div class="shim"></div>
<!-- post the pagination -->

<div id="posts_navigation">
   <a><?php previous_posts_link(); ?></a>
   <a>|<?php next_posts_link(); ?></a>
</div>

<?php else : ?>
<h2>Not Found</h2>
<p>Sorry... but what you are looking for is not here.</p>
<?php endif; ?>


  
  <!-- end basic posts --> 
</section>  

<?php get_sidebar(); ?>

<?php get_footer(); ?>



</body> 
</html>