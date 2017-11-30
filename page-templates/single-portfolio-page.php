<?php
/*
Template Name: Single Porfolio page
*/
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php
		$feat_img = get_the_post_thumbnail_url($post->ID, 'medium');
		$feat_img_fl = get_the_post_thumbnail_url($post->ID, 'full');
		?>
		<?php while ( have_posts() ) : the_post();?>
		<article <?php post_class(); ?>>
			<aside class="info-sb">
				<img src="<?php echo $feat_img; ?>" class="img-responsive">
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_content(); ?>
			</aside>
			<div class="porfolio-imgs">
				<section class="imgs-section imgs-1">
					<h2 class="caps">Desktop</h2>
					<img src="<?php echo $feat_img_fl; ?>" class="img-responsive">
				</section>
			</div>
		</article>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>