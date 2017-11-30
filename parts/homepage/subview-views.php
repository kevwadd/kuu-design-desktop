<?php  
global $hp_sub_views;		
?>

<div id="sub-view" class="inner-wrap">
	
	<?php foreach ($hp_sub_views as $sv_item) { 
	$pg_id = $sv_item['page'];
	$imgs = $sv_item['sub_view_imgs'];
	$slug = get_post_field( 'post_name', $pg_id);
	$content = get_post_field('post_content', $pg_id);
	$content = apply_filters('the_content', $content);
	$img_counter = 1;
	?>
	<div id="sub-view-<?php echo $slug; ?>" class="sub-view-content hidden">
	<?php //echo '<pre class="debug">';print_r($imgs);echo '</pre>'; ?>
		<div class="content-wrap">
			<div class="txt-wrapper">
				<h2><?php echo get_the_title($pg_id); ?></h2>
				<?php echo $content; ?>
				<div class="sub-view-btns">
					<button class="sub-view-back-btn"><span>Back</span></button>
					<a href="<?php echo get_permalink($pg_id); ?>" title="View work: <?php echo get_the_title($pg_id); ?>" class="view-more">More</a>
				</div>
			</div>
			<?php foreach ($imgs as $img) { 
			$img_orientation = "high";
			if ($img['width'] > ($img['height']*1.5) ) {
			$img_orientation = "wide";	
			}
			?>
			<div id="img-block-<?php echo $img_counter; ?>" class="img-block">
				<div class="img" style="background-image: url(<?php echo $img['url']; ?>)"></div>
				<a href="<?php echo $img['url']; ?>" class="img-<?php echo $img_orientation; ?>"><span class="sr-only">View project</span><i class="fa fa-search-plus fa-3x"></i></a>
			</div>
			<?php 
			$img_counter++;	
			} ?>
		</div>
	</div>
	<?php } ?>
	
	<div id="sub-view-img-viewer" class="sub-view-closed">
		<div class="img-viewer-inner">
			<button id="close-sub-view-img"><span class="sr-only">Close image</span><i class="fa fa-times fa-3x"></i></button>
			<div class="img-viewer-container">
			
			</div>
		</div>
	</div>
		
</div>
		