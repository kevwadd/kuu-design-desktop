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
		<button class="view-grid btn-block"><?php echo get_the_title($pg_id); ?><span class="state"><span></span><span></span></span></button>
		<div class="nav-grid">
			<div class="grid-item"><a href="<?php echo get_permalink($item_1); ?>">
				<span class="img" style="background-image: url(<?php echo $item_1_feat_img; ?>)"></span>
				<span class="title-wrap"><span><?php echo get_the_title($item_1); ?></span></span>
			</a></div>
			<div class="grid-item"><a href="<?php echo get_permalink($item_2); ?>">
				<span class="img" style="background-image: url(<?php echo $item_2_feat_img; ?>)"></span>
				<span class="title-wrap"><span><?php echo get_the_title($item_2); ?></span></span>
			</a></div>
			<div class="grid-item"><a href="<?php echo get_permalink($item_3); ?>">
				<span class="img" style="background-image: url(<?php echo $item_3_feat_img; ?>)"></span>
				<span class="title-wrap"><span><?php echo get_the_title($item_3); ?></span></span>
			</a></div>
		</div>
	</div>
	<?php } ?>
</div>