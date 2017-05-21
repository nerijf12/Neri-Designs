<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>
			 	<div id="content-top">
			 		<div class="title">
			 			<h2><?php the_title(); ?></h2>
			 		</div>
			 	</div>

				<div id="content">
    				<div class="contentbox">
						<?php get_sidebar(); ?>
							
							<h2>Links:</h2>
							<ul>
							<?php wp_list_bookmarks(); ?>
							</ul>
						
						<div class="clear"></div>

					</div>

				</div>


<?php get_footer(); ?>