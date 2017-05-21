<!-- single page -->

<?php get_header(); ?>
  
  <div class="shim"></div>  
  <!-- start basic posts -->

  <section> 
  <!-- start first post --> 

<?php if(have_posts()) :while(have_posts()) : the_post(); ?>
   <? if ($post->ID != $featured_ID) { ?>

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

<div class="post-content">

  <header class="post-header"> 
      <h1><?php the_title(); ?></h1> 
</header> 

    <p><?php the_content(); ?></p>
    </div>
    
  </article> 

<? } ?>
<?php endwhile ?>


<?php else : ?>
<h2>Not Found</h2>
<p>Sorry... but what you are looking for is not here.</p>

<?php endif; ?>


<div id="comments_template">
<?php comments_template(); ?>
</div>


<div class="shim"></div>
  
  <!-- end basic posts --> 
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>



</body> 
</html>