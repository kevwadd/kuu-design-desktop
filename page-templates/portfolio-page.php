<?php
/*
Template Name: Porfolio page
*/
?>
<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<?php
		$col = get_field('pg_col');	
		$args = array (
		'child_of' => $post->ID
		);
		$selected_works = get_pages($args);
		//echo '<pre>';print_r($selected_works);echo '</pre>';
		?>
		<?php while ( have_posts() ) : the_post();?>
		<section class="portfolio-section">
			<div class="portfolio-grid">
				<?php foreach ($selected_works as $work) { 
				$feat_img = get_the_post_thumbnail_url($work->ID, 'size_600_400');
				?>
				<div class="grid-item">
					<a href="<?php echo get_the_permalink($work->ID); ?>">
					<span class="img" style="background-image: url(<?php echo $feat_img; ?>)"></span>
					<span class="title-wrap"><span><?php echo get_the_title($work->ID); ?></span></span>
					</a>
				</div>
				<?php } ?>
			</div>
		</section>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>