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
								
								<p class="postmetadata"><small><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small></p>
								
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
							</div>
							
						</div>
						
						<?php endwhile; endif; ?>
						
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						
						<div class="post-borderless">
						<p>
							<small>
								This entry was posted
								<?php /* This is commented, because it requires a little adjusting sometimes.
									You'll need to download this plugin, and follow the instructions:
									http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
									/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
								on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
								and is filed under <?php the_category(', ') ?>.
								You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
		
								<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
									// Both Comments and Pings are open ?>
									You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
		
								<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
									// Only Pings are Open ?>
									Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
		
								<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
									// Comments are open, Pings are not ?>
									You can skip to the end and leave a response. Pinging is currently not allowed.
		
								<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
									// Neither Comments, nor Pings are open ?>
									Both comments and pings are currently closed.
		
								<?php } edit_post_link('Edit this entry','','.'); ?>
		
							</small>
						</p>
												
						<?php comments_template(); ?>
						
						</div>

						<div class="clear"></div>
						

					</div>

				</div>



<?php get_footer(); ?>