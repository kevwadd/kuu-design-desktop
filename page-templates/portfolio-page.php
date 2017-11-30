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
		?>
		<?php while ( have_posts() ) : the_post();?>
		<article <?php post_class(); ?>>
			<?php echo '<pre>';print_r($selected_works);echo '</pre>'; ?>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>