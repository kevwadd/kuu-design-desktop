<?php 
$hp_sub_views = get_field('hp_views', 'options');	
//echo '<pre>';print_r($hp_sub_views);echo '</pre>';
?>
<section id="sub-view-links">
	<?php foreach ($hp_sub_views as $sv) { 
	$pg_id = $sv['page'];
	$color = get_field('pg_col', $pg_id);
	?>
	<a href="<?php echo get_permalink($pg_id); ?>" title="<?php echo get_the_title($pg_id); ?>" class="<?php echo $color; ?>-grad"><div class="container"><span><?php echo get_the_title($pg_id); ?></span></div></a>
	<?php } ?>
</section>