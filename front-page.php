<?php get_header(); ?>
		<?php 
		$hp_sub_views_active = get_field('hp_sub_views_active', 'options');	
		$hp_sub_views = get_field('hp_views', 'options');
		?>
		<?php if ( have_posts() ) : ?>
		<main id="main-content">
			<?php while ( have_posts() ) : the_post();?>
			<article <?php post_class(); ?>>
			
			<?php if ($hp_sub_views_active) { ?>
			<?php get_template_part( 'parts/homepage/subview', 'links' ); ?>
			<?php } ?>
			
			<div class="container">
				<div class="row">
					<div class="col-xs-7">
						<div class="intro">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-xs-4 col-xs-offset-1">
						<?php get_template_part( 'parts/homepage/contact', 'info' ); ?>
					</div>
				</div>
			</div>
			
			</article>
			<?php endwhile; ?>
		</main>
		<?php endif; ?>
<?php get_footer(); ?>