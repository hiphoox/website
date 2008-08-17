<form method="get" id="head_form" action="<?php bloginfo('url'); ?>/">
	
<div class="box_1"><input type="text" <?php the_search_query(); ?>/></div>
<div class="box_2">
	<a href="#" onclick="getElementById('head_form').submit()">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/head_form_submit.jpg" alt="" />
	</a>
</div>
<p><a href="#">advanced search</a></p>

</div>
</form>
