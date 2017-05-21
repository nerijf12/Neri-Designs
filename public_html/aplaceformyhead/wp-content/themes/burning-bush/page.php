<?php get_header(); ?>
			 	<div id="content-top">
			 		<div class="title">
			 			<h2><?php the_title(); ?></h2>
			 		</div>
			 	</div>

				<div id="content">
    				<div class="contentbox">
						<?php get_sidebar(); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="entry">
								<p><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></p>
								<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
							</div>
							
						</div>
						
						<?php endwhile; endif; ?>
						
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						
						<?php comments_template(); ?>
						
						<div class="clear"></div>

					</div>

				</div>


<?php get_footer(); ?>