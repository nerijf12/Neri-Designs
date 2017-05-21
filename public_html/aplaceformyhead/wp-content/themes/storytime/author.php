<?php get_header(); ?>

<?php
if(isset($_GET['author_name'])) : $curauth = get_userdatabylogin($author_name);
else : $curauth = get_userdata(intval($author)); endif; ?>
<h1>About <?php echo $curauth->display_name; ?></h1>
<div id="auth_desc"><?php echo $curauth->description; ?></div>
<div class="separator"></div>
<?php if ($curauth->user_url): ?>
<p><a href="<?php echo $curauth->user_url; ?>"
class="button">Visit <?php echo $curauth->display_name; ?>'s Website</a></p>
<?php endif; ?>
<div class="separator"></div>
  
  <div class="shim"></div>  
  <!-- start basic posts -->

  <section> 
  <!-- start first post --> 
<div class="separator"></div>
<h4>Archive of <?php wp_title(' ', true, ''); ?></h4>
<div class="separator"></div>

<ul>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>


<div class="shim"></div>
<!-- post the pagination -->

<div id="posts_navigation">
   <p><?php previous_posts_link(); ?> |
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