<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<main id="main-content">
			<?php while ( have_posts() ) : the_post();?>
			<article <?php post_class(); ?>>
				<div class="container">
					<?php the_content(); ?>	
				</div>
			</article>
			<?php endwhile; ?>
		</main>
		<?php endif; ?>
<?php get_footer(); ?>