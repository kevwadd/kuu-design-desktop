		</div>
		
		<footer class="site-info">
			<div class="copyright">&copy; Kuu creative <?php echo date('Y'); ?></div>
			<div class="footer-menus">
			<?php wp_nav_menu(array( 
			'container' => 'false', 
			'menu' => 'Footer menu', 
			'menu_class'  => 'footer-links list-inline',
			'fallback_cb' => false 
			) ); 
			?>
			<?php wp_nav_menu(array( 
			'container' => 'false', 
			'menu' => 'Social menu', 
			'menu_class'  => 'social-links list-inline',
			'fallback_cb' => false 
			) ); 
			?>
			</div>
		</footer>
		
	</div><!-- OUTER WRAP -->
	
	<?php wp_footer(); ?>
	</body>
</html>