<?php get_template_part( 'parts/global/head', 'html' ); ?>

<body <?php body_class(); ?>>
	<!-- OUTER WRAP -->
	<div class="app">
		
		<?php get_template_part( 'parts/global/header', 'masthead' ); ?>
		
		<div id="main-content" role="main">
			<?php if (!is_front_page()) { ?>
			<nav class="strip-nav nav-closed">
				<?php wp_nav_menu(array( 
				'container' => 'false', 
				'menu' => 'Strip menu', 
				'menu_class'  => 'list-unstyled',
				'fallback_cb' => false 
				) ); 
				?>
			</nav>
			<?php } ?>
			