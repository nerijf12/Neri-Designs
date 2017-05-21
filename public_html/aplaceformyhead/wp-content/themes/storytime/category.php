<?php get_header(); ?>

  
  <div class="shim"></div>  
  <!-- start basic posts -->

  <section> 
  <!-- start first post --> 
<div class="separator"></div>
<h4 id="categories">Categories of <?php wp_title(' ', true, ''); ?></h4>
<div class="separator"></div>

<ul id="list-categories">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>


<div class="shim"></div>
<!-- post the pagination -->

<div id="posts_navigation">
   <p><?php previous_posts_link(); ?> 
   <?php next_posts_link(); ?></p>
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