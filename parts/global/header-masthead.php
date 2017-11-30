<header class="masthead">
	<a id="logo" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></a>
	<?php if (!is_front_page()) { ?>
	<button id="strip-nav-btn" class="nav-closed"><span class="btn-bar"></span><span class="btn-bar"></span><span class="btn-bar"></span></button>
	<?php } ?>
</header>