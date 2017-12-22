<?php
/*
Template Name: Contact page
*/
?>
<?php get_header(); ?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();?>
			<?php
			$add_form = get_field('add_form', 'options');
			$contact_emails = get_field('contact_emails', 'options');
			$contact_number = get_field('contact_number', 'options');
			$map = get_field('map', 'options');
			//echo '<pre>';print_r($contact_emails);echo '</pre>';
			?>
			<article <?php post_class('flex-row'); ?>>
				<div class="contact-info">
					<div class="contact-details">
						<h3 class="caps">With these&hellip;</h3>
						<a href="tel:<?php echo $contact_number; ?>" class="contact-item">
							<i class="fa fa-phone"></i> <?php echo $contact_number; ?>
						</a>
						<?php foreach ($contact_emails as $email) { ?>
						<a href="mailto:<?php echo $email['email']; ?>" class="contact-item">
							<i class="fa <?php echo $email['icon']; ?>"></i> <?php echo $email['email']; ?>
						</a>	
						<?php } ?>
					</div>
					<div class="contact-form">
					<h3 class="caps">Or Use this&hellip;</h3>
					<?php if ($add_form) { 
					$form = get_field('form', 'options');	
					?>
					<?php gravity_form($form, false, true, false, '', false); ?>
					<?php } ?>
					</div>
				</div>
				<div id="map">
					<div id="map-canvas"></div>
					<script>
		      function initMap() {
		        var uluru = {lat: <?php echo $map['lat']; ?>, lng: <?php echo $map['lng']; ?>};
		        var map = new google.maps.Map(document.getElementById('map-canvas'), {
		          zoom: 14,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		    </script>
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARutitUUcF3TjMhTOFaiGr7wIucUPBanI&callback=initMap"></script>
				</div>
			</article>
			<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>