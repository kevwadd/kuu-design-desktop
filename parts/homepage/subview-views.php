<?php  
global $hp_sub_views;		
?>

<div id="sub-view" class="inner-wrap">
	
	<?php foreach ($hp_sub_views as $sv_item) { 
	$pg_id = $sv_item['page'];
	$slug = get_post_field( 'post_name', $pg_id);
	$content = get_post_field('post_content', $pg_id);
	$content = apply_filters('the_content', $content);
	?>
	<div id="sub-view-<?php echo $slug; ?>" class="sub-view-content hidden">
		<div class="txt-wrapper">
			<div class="inner-wrapper">
				<h2><?php echo get_the_title($pg_id); ?></h2>
				<?php echo $content; ?>
			</div>
		</div>
		<div class="sub-view-btns">
			<button class="sub-view-back-btn"><span>Back</span></button>
			<a href="<?php echo get_permalink($pg_id); ?>" title="View work: <?php echo get_the_title($pg_id); ?>" class="view-more">View Work</a>
		</div>
	</div>
	<?php } ?>
		
</div>
		