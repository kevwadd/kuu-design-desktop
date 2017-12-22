<?php
/*
Template Name: Info page
*/
?>
<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<?php
		$args = array (
		'child_of' => $post->ID,
		'sort_column' => 'menu_order'
		);
		$related_pgs = get_pages($args);
		?>
		<?php while ( have_posts() ) : the_post();?>
		<article <?php post_class(); ?>>
			<div class="container">
		<?php //echo '<pre>';print_r($releated_pgs);echo '</pre>'; ?>	
			<div class="info-nav">
				<nav class="nav">
					<?php foreach ($related_pgs as $k => $lk) { ?>
					<a href="#<?php echo $lk->post_name; ?>-section"<?php echo ($k == 0) ? ' class="active"':''; ?>><span><?php echo get_the_title($lk->ID); ?></span></a>
					<?php } ?>
				</nav>
			</div>
			<div class="info-content">
			<?php foreach ($related_pgs as $k => $pg) { 
			$c = apply_filters( 'the_content', $pg->post_content );	
			?>
			<section id="<?php echo $pg->post_name; ?>-section" class="sub-page<?php echo ($k == 0) ? ' active-section':''; ?>">
				<div class="imgs"><div class="img"></div><div class="img"></div><div class="img"></div></div>
				<?php echo $c;  ?>
			</section>
			<?php } ?>
			</div>
			</div>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>