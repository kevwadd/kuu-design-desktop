<nav id="main-nav">
	<div id="nav-header">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-10">
					<?php wp_nav_menu(array( 
					'container' => 'false', 
					'menu' => 'Main menu quick links', 
					'menu_id' => 'quick-links',
					'menu_class'  => 'clearfix list-unstyled',
					'fallback_cb' => false ) ); 
					?>
				</div>
				<div class="col-xs-2">
					<button id="close-nav" class="close-btn">
						<div class="line line-1"></div>
						<div class="line line-2"></div>
						<span class="sr-only">Close menu</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php wp_nav_menu(array( 
	'container' => 'false', 
	'menu' => 'Main menu', 
	'menu_id' => 'main-links',
	'menu_class'  => 'menu clearfix list-unstyled',
	'link_before' => '<span class="container">',
	'link_after' => '</span>',
	'fallback_cb' => false ) ); 
	?>
	<div class="nav-footer">
		<div class="container">
			<div class="logo"></div>
		</div>
	</div>
</nav>