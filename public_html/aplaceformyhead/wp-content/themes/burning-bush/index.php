<?php get_header(); ?>
			 	<div id="content-top">
					<div class="title">
						<h2>Welcome!</h2>
					</div>
				</div>
			 	<div id="content">
    				
    				<div class="contentbox">
						<?php get_sidebar(); ?>
						<?php if (have_posts()) : ?>
					
							<?php while (have_posts()) : the_post(); ?>
								
								<div class="post" id="post-<?php the_ID(); ?>">
					
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									
									<p><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></p>
									
									<div class="entry">
										<?php the_content('Read the rest of this entry &raquo;'); ?>
									</div>
					
									<p class="postmetadata"><small><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small></p>
									
								</div>
					
							<?php endwhile; ?>
					
							<div class="navigation">
								<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
								<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
							</div>
					
						<?php else : ?>
					
							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
							<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					
						<?php endif; ?>
						
						<div class="clear"></div>
						

					</div>

				</div>



<?php get_footer(); ?>
