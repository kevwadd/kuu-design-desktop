<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<main id="main-content">
			<section class="post-list">
			<?php while ( have_posts() ) : the_post();?>
			<article <?php post_class(); ?>>
				<?php the_content(); ?>	
			</article>
			<?php endwhile; ?>
			</section>
		</main>
		<?php endif; ?>
<?php get_footer(); ?>