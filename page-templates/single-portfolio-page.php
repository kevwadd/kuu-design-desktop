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
		$img_sections = get_field( 'img_sections' );
		?>
		<?php while ( have_posts() ) : the_post();?>
		<article <?php post_class(); ?>>
			<aside class="info-sb">
				<?php if (!empty($img_sections)) { ?>
				<img src="<?php echo $feat_img; ?>" class="img-responsive">
				<?php } ?>
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_content(); ?>
			</aside>
			<div class="portfolio-imgs">
					
					<?php if (empty($img_sections)) { ?>
					<section class="imgs-section imgs-1">
						<img src="<?php echo $feat_img_fl; ?>" class="img-responsive">
					</section>
					<?php } else { ?>
					<?php foreach ($img_sections as $section) { 
					//echo '<pre>';print_r($section);echo '</pre>';
					?>
					<section class="imgs-section <?php echo $section['acf_fc_layout']; ?>">
						<h2 class="caps"><?php echo $section['section_title']; ?></h2>
							<?php foreach ($section['imgs'] as $img) { ?>
							<img src="<?php echo $img['sizes']['medium_large']; ?>">
							<?php } ?>
					</section>
					<?php } ?>
					<?php } ?>
					
				
			</div>
		</article>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>