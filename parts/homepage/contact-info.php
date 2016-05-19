<?php  
$contact_number = get_field('contact_number', 'options');
$contact_emails = get_field('contact_emails', 'options');
?>
<div class="contact-info">
	<?php wp_nav_menu(array( 
	'container' => 'false', 
	'menu' => 'Social Links', 
	'menu_class'  => 'social-links clearfix list-unstyled',
	'fallback_cb' => false ) 
	); 
	?>
	<ul class="list-unstyled contact-links">
		<?php if (!empty($contact_number)) { ?>
		<li><a href="tel:<?php echo $contact_number; ?>"><i class="fa fa-phone fa-lg"></i> <?php echo $contact_number; ?></a></li>
		<?php } ?>
		<?php if (!empty($contact_emails)) { ?>
			<?php foreach ($contact_emails as $email) { ?>
			<li><a href="mailto:<?php echo $email['email']; ?>"><i class="fa <?php echo $email['icon']; ?> fa-lg"></i> <?php echo $email['email']; ?></a></li>
			<?php } ?>
		<?php } ?>
	</ul>
</div>