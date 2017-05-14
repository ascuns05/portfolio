<?php get_header(); ?>

	<div class="content_header">
		<h1><?php the_title() ?></h1>
		<hr>
	</div>
	<div class="content_body">
	<div class="socicons">
		<a href="<?php echo get_post_meta($post->ID, 'vk', true); ?>" class="icon vk"></a>
		<a href="<?php echo get_post_meta($post->ID, 'instagram', true); ?>" class="icon instagram"></a>
		<a href="<?php echo get_post_meta($post->ID, 'telegram', true); ?>" class="icon telegram"></a>
		<a href="<?php echo get_post_meta($post->ID, 'twitter', true); ?>" class="icon twitter"></a>
		<a href="<?php echo get_post_meta($post->ID, 'github', true); ?>" class="icon github"></a>
		<a href="mailto:<?php echo get_post_meta($post->ID, 'mailto', true); ?>" class="icon mailto"></a>
	</div>
	
	</div>

<?php get_footer(); ?>