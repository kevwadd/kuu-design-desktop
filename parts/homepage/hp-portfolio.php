<?php 
$hp_sub_views = get_field('hp_views', 'options');	

?>
<div class="hp-nav">
	<?php foreach ($hp_sub_views as $sv) { 
	$pg_id = $sv['page'];
	$item_1 = $sv['item_1'];
	$item_1_feat_img = get_the_post_thumbnail_url($item_1, 'size_600_400');
	$item_2 = $sv['item_2'];
	$item_2_feat_img = get_the_post_thumbnail_url($item_2, 'size_600_400');
	$item_3 = $sv['item_3'];
	$item_3_feat_img = get_the_post_thumbnail_url($item_3, 'size_600_400');
	$color = get_field('pg_col', $pg_id);
	?>
	<div class="nav-item <?php echo $color; ?>-grad">
		<a href="<?php echo get_permalink($pg_id); ?>" data-title="<?php echo sanitize_title(get_the_title($pg_id)); ?>" class="portfolio-link">
			<span><?php echo get_the_title($pg_id); ?></span>
		</a>
	</div>
	<?php } ?>
</div>