<?php get_header(); ?>
<!--==========page_body=========== -->
<div class="page_body_bg">
	<div class="main">
    	<div id="page_body">
        	<div class="container">
                <div class="col_1">
                	<h1 class="title">Recent Posts</h1>

					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
	                    	<div class="post">
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	                            	<p class="font_2 top_indent_5px"><strong><?php the_time('F jS, Y') ?> by <?php the_author() ?></strong></p>
	                                <p class="top_indent_10px"><?php the_content('Read the rest of this entry &raquo;'); ?></p>
									<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
	                        </div>
						<?php endwhile; ?>

						<div class="navigation">
							<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
							<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
						</div>
						
				<?php else : ?>
				<?php endif; ?>
                </div>
                <div class="mid maxheight">&nbsp;</div>

				<?php get_sidebar();?>

            </div>
        </div>
    </div>
</div>
<!--========//page_body=========== -->
<!-- -->
<?php get_footer(); ?>