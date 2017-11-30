<?php get_template_part( 'parts/global/head', 'html' ); ?>

<body <?php body_class(); ?>>
	<!-- OUTER WRAP -->
	<div class="app">
		
		<?php get_template_part( 'parts/global/header', 'masthead' ); ?>
		
		<main id="main-content" role="main" class="nav-closed">
			
			<nav class="strip-nav nav-closed">
				<?php wp_nav_menu(array( 
				'container' => 'false', 
				'menu' => 'Strip menu', 
				'menu_class'  => 'list-unstyled',
				'fallback_cb' => false 
				) ); 
				?>
			</nav>