<?php
/*
Template Name: Porfolio page
*/
?>
<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
		<?php  
		$col = get_field('pg_col');	
		$imgs = get_field('porfolio_imgs');	
		$img_counter = 0;
		//echo '<pre class="debug">';print_r($imgs);echo '</pre>';
		?>
		<main id="main-content" class="pg-col-<?php echo $col; ?>">
			<?php while ( have_posts() ) : the_post();?>
			<header class="portfolio-pg-header">
				<div class="container">
				<h2><?php the_title(); ?></h2>	
				</div>
			</header>
			<?php if ($imgs) { ?>
			<section class="portfolio-grid">
				<div class="grid-wrapper">
					<div class="img-row clearfix">
					<?php foreach ($imgs as $img) { 
					$img_counter++;
					$id = $img['ID'];
					$client_name = get_field('client_name', $id);
					?>
					<div id="porfolio-img-<?php echo $id; ?>" class="img-wrap">
						<a href="<?php echo $img['url']; ?>" class="img-link" target="_blank" data-img-width="<?php echo $img['width']; ?>" data-img-height="<?php echo $img['height']; ?>" style="background-image: url(<?php echo $img['sizes']['large']; ?>)">						
						</a>
						<div class="img-meta hidden">
						<span class="title"><?php echo $img['title']; ?></span>
						<?php if ($client_name != "") { ?>
							<span class="client">Client: <?php echo $client_name; ?></span>
						<?php } ?>	
						<?php if ($img['description'] != "") { ?>
							<span class="desc"><?php echo $img['description']; ?></span>
						<?php } ?>
						</div>
					</div>
					<?php if ($img_counter == 11) { ?>
					<button class="more-btn btn btn-default btn-block" title="Load more"><i class="fa fa-plus-circle fa-4x"></i><span class="sr-only">More</span></button>
					<?php } ?>
					<?php if ($img_counter % 4 == 0) { ?>
					</div>
					<div class="img-row clearfix">
					<?php } ?>
					<?php } ?>
					</div>
				</div>
				<div class="img-viewer img-viewer-wide closed">
					<div class="img-holder"></div>	
					<div class="img-meta closed"></div>
					<button class="info-view-btn btn up">View Information</button>
				</div>
				
				<div class="img-viewer img-viewer-tall closed">
					<div class="img-holder"></div>
					<div class="img-meta closed"></div>
					<button class="info-view-btn btn up">View Information</button>
				</div>
			</section>
			<?php } ?>
			<?php endwhile; ?>
		</main>
		<?php endif; ?>
<?php get_footer(); ?>