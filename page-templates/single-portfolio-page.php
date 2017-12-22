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
		$pg_col = get_field('pg_col');
		$portfolio_imgs = get_field( 'portfolio_imgs' );
		$skills = get_field('skills'); 
		$apps = get_field('applications');
		$img_counter = 0;
		?>
		<?php while ( have_posts() ) : the_post();?>
		<article <?php post_class(); ?>>
			<aside class="info-sb<?php echo (!empty($pg_col)) ? ' '.$pg_col: ''; ?>">
				<img src="<?php echo $feat_img; ?>" class="img-responsive">
				<?php the_title('<h1>', '</h1>'); ?>
				<?php the_content(); ?>
				<?php if (!empty($skills)) { ?>
				<h3 class="caps">Skills</h3>
				<ul class="list-style-gone">
				<?php foreach ($skills as $skill) { ?>
					<li><?php echo $skill['icon']; ?> <?php echo $skill['skill']; ?></li>
				<?php } ?>
				</ul>
				<?php } ?>
				<?php if (!empty($apps)) { ?>
				<h3 class="caps">Applications</h3>
				<ul class="list-style-gone">
					<?php foreach ($apps as $app) { ?>
					<li><?php echo $app['icon']; ?> <?php echo $app['app']; ?></li>
					<?php } ?>
				</ul>
				<?php } ?>
			</aside>
			<?php if (!empty($portfolio_imgs)) { ?>
			<div class="portfolio-imgs">	
				<?php 
				//echo '<pre>';print_r($portfolio_imgs);echo '</pre>';	
				foreach ($portfolio_imgs as $k => $img) {  ?>
				<div class="img-wrap<?php echo ($k == 0) ? ' img-active':''; ?>">
					<div class="inner-img-wrap <?php echo $img['alt']; ?>">
						<img src="<?php echo $img['url']; ?>">
					</div>
					<?php if (!empty($img['caption'])) { ?>
					<div class="caption"><?php echo $img['caption']; ?></div>
					<?php } ?>
					<button class="view-img">
						<span class="btn-bar"><span class="btn-bar"></span></span>
					</button>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</article>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>