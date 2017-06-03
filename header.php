<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru" class="no-js"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/img/favicon/favicon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Marck+Script|Open+Sans:100,200,300,400,500,600,700,800|Pangolin|Pattaya|Playfair+Display|Press+Start+2P|Raleway+Dots|Rubik+Mono+One" rel="stylesheet">

	<?php wp_head(); ?>

</head>

<body <?php if ( !is_front_page() && !is_home() ) :?> class="inside" <?php endif ?>>
	<aside class="left_side">
		
		<div class="btn_mnu" title="Меню">
			<div class="btn_row"></div>
			<div class="btn_row"></div>
			<div class="btn_row"></div>
		</div>
		<div class="aside_content">
			
			<div class="user_info">
				<img src="<?php echo get_the_post_thumbnail_url(url_to_postid("/about/")); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
				<h2><?php echo get_bloginfo('name'); ?></h2>
				<p><?php echo get_bloginfo('description'); ?></p>
			</div>
			<nav>

				<?php wp_nav_menu( 'menu=left_mnu' ) ?>

			</nav>
		</div>
	</aside>
	
	<div class="content<?php if ( is_front_page() && is_home() ) :?> gallery<?php endif ?>">
