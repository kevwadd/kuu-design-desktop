		<footer id="footer-info">
			<div class="container">
				<small>&copy; <?php bloginfo('name'); ?> 2015 - every thing on this site is mine, so keep your hands off!!</small>
			</div>
		</footer>
		</div><!-- MAIN VIEW -->
		
		<?php 
		global $hp_sub_views_active;
		if ( $hp_sub_views_active && is_front_page() ) { ?>
		<?php get_template_part( 'parts/homepage/subview', 'views' ); ?>
		<?php } ?>
		
	</div><!-- OUTER WRAP -->
	
	<?php wp_footer(); ?>
	</body>
</html>