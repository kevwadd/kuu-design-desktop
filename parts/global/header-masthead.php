<?php
global $post;	
$pg_color = get_field('pg_col', $post->ID);
?>
<header class="masthead">
	<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></a>
	<div class="logo-tag <?php echo (!empty($pg_color) ? 'txt-'.$pg_color:'txt-grey'); ?>">
		<?php if (!is_front_page()) { ?>
			<?php if ($post->post_parent != '0') { ?>
			<?php echo get_the_title($post->post_parent); ?>
			<?php } else if( is_home() ) { 
			$blog_pg_id = get_option('page_for_posts');
			//echo '<pre>';print_r($blog_pg_id);echo '</pre>';
			?>
			<?php echo get_the_title($blog_pg_id) ; ?>
			<?php } else { ?>
			<?php echo get_the_title($post->ID) ; ?>
			<?php } ?>
		<?php } ?>
	</div>
	<button id="strip-nav-btn" class="nav-closed<?php echo (is_front_page() ) ? ' hidden':''; ?>"><span class="btn-bar"></span><span class="btn-bar"></span><span class="btn-bar"></span></button>
</header>