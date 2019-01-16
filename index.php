<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<?php get_template_part( 'parts/blog/post', 'filters' ); ?>
		<section class="post-list">
			<?php //echo '<pre>';print_r($dd_cats);echo '</pre>'; ?>
			<?php while ( have_posts() ) : the_post();?>
			<?php
			$feat_img = get_the_post_thumbnail_url($post->ID, 'size_600_400');	
			?>
			<article <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>">
					<span class="img" style="background-image: url(<?php echo $feat_img; ?>)"></span>
					<span class="title-wrap"><span><?php the_title(); ?></span></span>
				</a>
			</article>
			<?php endwhile; ?>
		</section>
		<div class="post-pagination">
			<?php 
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) ); ?>
		</div>
		<?php endif; ?>
<?php get_footer(); ?>