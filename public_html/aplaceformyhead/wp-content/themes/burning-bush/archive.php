<?php get_header(); ?>
			 	<div id="content-top">
			 		<div class="title">
						  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						  <?php /* If this is a category archive */ if (is_category()) { ?>
							<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
						  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
						  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
						  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h2>Archive for <?php the_time('F, Y'); ?></h2>
						  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h2>Archive for <?php the_time('Y'); ?></h2>
						  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h2>Author Archive</h2>
						  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h2>Blog Archives</h2>
						  <?php } ?>
			 		</div>
			 	</div>

				<div id="content">
    				<div class="contentbox">
						<?php get_sidebar(); ?>
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
						

					
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									
									<p><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></p>
							<div class="entry">
								<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
													<p class="postmetadata"><small><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small></p>
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
							</div>
							
						</div>
						
						<?php endwhile; endif; ?>
						
						<div class="clear"></div>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

					</div>

				</div>


<?php get_footer(); ?>