<div class="post-filters">
<?php $dd_cats = get_categories(); ?>
	<?php if (!empty($dd_cats)) { ?>
	<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Categories
		    <span class="btn-status"><span></span><span></span></span>
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  <?php foreach ($dd_cats as $dd_cat) { ?>
			   <a href="<?php echo get_category_link($dd_cat->term_id); ?>"><?php echo $dd_cat->name; ?></a>
			  <?php } ?>
		  </div>
	</div>
	<?php } ?>
	<?php $dd_tags = get_tags(); ?>
	<?php if (!empty($dd_tags)) { ?>
	<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   Tags
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  <?php foreach ($dd_tags as $dd_tag) { ?>
			   <a href="<?php echo get_tag_link($dd_tag->term_id); ?>"><?php echo $dd_tag->name; ?></a>
			  <?php } ?>
		  </div>
	</div>
	<?php } ?>
	<?php 
	$archive_args = array(
		'limit'           => '12',
		'format'          => 'custom',
		'echo'            => 0,
		'before'          => '',
		'after'           => ''
	);	
	$dd_archives = wp_get_archives( $archive_args ); 
	//echo '<pre>';print_r($dd_archives);echo '</pre>';
	?>
	<?php if (!empty($dd_archives)) { ?>
	<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   Archives
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  <?php echo $dd_archives; ?>
		  </div>
	</div>
	<?php } ?>
</div>