 <!-- start feature post -->


<?php
   $featured = new WP_Query();
   $featured->query('showposts=1');
   while($featured->have_posts()) : $featured->the_post();
      $wp_query->in_the_loop = true;
      $featured_ID = $post->ID;
?>

 
  <article class="feature-article">  

<footer class="feature-footer"> 

<?php if (get_post_meta($post->ID, 'large_preview', true)) { ?> <div class="feature-image"> <img src="<?php echo get_post_meta($post-> ID,'large_preview', true); ?>" class="responsiveimage" alt="post_image" /> </div> <?php } ?>

	<p>Posted in <?php the_category(', '); ?> | Tags: <?php the_tags(' '); ?></p> 
       
</footer> 

 <div class="feature-content">  
    
    <header class="feature-header"> 

      <h1><a href="<?php the_permalink(); ?>" class="feature-title"><?php the_title(); ?></a></h1> 

      <div class="feature-meta"> 
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p> 
      </div> 

    </header> 

<div class="continue">
	<p> 
	<?php the_content('-Continue'); ?>
	</p>
</div>

     </div> 

  </article> 

<?php endwhile; ?>

  <!-- end feature post -->