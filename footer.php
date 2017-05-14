</div>
	<?php if ( is_front_page() && is_home() ) :?>
	<div class="filter_items">
		<button class="filter_label active">Все</button>

			<?php
			$tags = get_tags();
			if ($tags) {
			foreach ($tags as $tag) {
				echo "<button class=\"filter_label\" data-filter=\"." . transliterate($tag->name) . "\">$tag->name</button>";
				}
			}
			?> 
		

	</div>
	<?php endif ?>
	<div class="hidden"></div>
	<div class="loader">
		<div class="loader_inner">
			<h1>ASCUNS</h1><div class="dot"></div>
		</div>
	</div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<?php wp_footer(); ?>	
</body>
</html>