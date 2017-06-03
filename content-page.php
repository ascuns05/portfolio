<?php 
$contacts_id = get_the_ID();
?>

<div class="content_header">
	<img src="<?php echo get_the_post_thumbnail_url($contacts_id); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
	<h1><?php echo get_bloginfo('name'); ?></h1>
	<p><?php echo get_bloginfo('description'); ?></p>
</div>
<div class="content_body">
    <?php the_content() ?>
</div>
