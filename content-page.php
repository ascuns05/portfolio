<div class="content_header">
	<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
	<h1><?php echo get_bloginfo('name'); ?></h1>
	<p><?php echo get_bloginfo('description'); ?></p>
	<h1><?php echo $postid ?></h1>
</div>
<div class="content_body">
    <?php the_content() ?>
</div>