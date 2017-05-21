<?php get_header(); ?>
			 	<div id="content-top">
					<div class="title">
						<h2>Search Results</h2>
					</div>
				</div>
			 	
			 	<div id="content">
    				
    				<div class="contentbox">
						
						<?php get_sidebar(); ?>
							
							<?php if (have_posts()) : ?>
						
								<div class="navigation">
									<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
									<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
								</div>
						
						
								<?php while (have_posts()) : the_post(); ?>
						
									<div class="post">
										<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
										<small><?php the_time('l, F jS, Y') ?></small>
						
										<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
									</div>
						
								<?php endwhile; ?>
						
								<div class="navigation">
									<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
									<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
								</div>
						
							<?php else : ?>
								<div class="post">
									<p>Apparently, your search didn't find anything worth looking at. Bummer!</p><br />
									<?php include (TEMPLATEPATH . '/searchform.php'); ?>
								</div>
						
							<?php endif; ?>
						
						<div class="clear"></div>
						</div>
						
					</div>

				</div>

<?php get_footer(); ?>