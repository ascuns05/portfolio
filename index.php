<?php get_header(); ?>
<?php if ( is_front_page() && is_home() ) :?>
<?php
//Вывод записей
$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => -1
);
$portfolio = new WP_Query( $args );
?>

<?php if( $portfolio->have_posts() ) : while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
	
	<a class="<?php 
		$tags = wp_get_post_tags($post->ID);
		if ($tags) {
			foreach($tags as $tag) {
				echo transliterate($tag->name) . " ";
			}
		}			
	 ?>" href="<?php
	echo get_post_permalink();
	?>" data-description="<?php the_title(); ?>">
	<img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/dummy.png" data-original="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>"/></a>
	<!-- Записи -->
	

<?php endwhile; else: ?>

	<h3>Записей нет</h3>
	<!-- Нету записей -->

<?php endif ?> 
<?php endif ?>
<?php if ( !is_front_page() && !is_home() ) :?>
	<div class="post"> 
	<h1><?php the_title();?></h1>
	<hr>
	<?php the_post(); ?>	
	<?php the_content();?>
	</div>
<?php endif ?>

<?php get_footer(); ?>