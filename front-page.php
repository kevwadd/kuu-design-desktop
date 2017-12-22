<?php get_header(); ?>
		<?php 
		$hp_sub_views = get_field('hp_views', 'options');
		?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();?>
			<?php get_template_part( 'parts/homepage/hp', 'portfolio' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>