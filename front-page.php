<?php get_header(); ?>
		<?php 
		$hp_sub_views = get_field('hp_views', 'options');
		?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();?>
			<article <?php post_class(); ?>>
			<?php get_template_part( 'parts/homepage/hp', 'portfolio' ); ?>
			</article>
			<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>