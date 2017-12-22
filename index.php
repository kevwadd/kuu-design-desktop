<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<div class="post-filters"></div>
		<section class="post-list">
			<?php while ( have_posts() ) : the_post();?>
			<article <?php post_class(); ?>>
				<?php the_content(); ?>	
			</article>
			<?php endwhile; ?>
		</section>
		<div class="post-pagination"></div>
		<?php endif; ?>
<?php get_footer(); ?>