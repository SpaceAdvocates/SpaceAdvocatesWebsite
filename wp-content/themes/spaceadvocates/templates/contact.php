<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<h1 class="page_header">Contact Us</h1>

<div class="row">
	<div class="small-12 tablet-12 large-9 large-centered columns" id="contact_form">
		
		<label for="contact_name">Name*</label>
		<input type="text" id="contact_name" placeholder="Name" />

		<label for="contact_email">Email*</label>
		<input type="text" id="contact_email" placeholder="Email" />

		<label for="contact_subject">Subject</label>
		<input type="text" id="contact_subject" placeholder="Subject" />

		<label for="contact_message">Message</label>
		<textarea id="contact_message" placeholder="Message"></textarea>

		<label for="contact_updates" id="contact_updates_label">I would like to receive email updates</label>
		<input type="checkbox" id="contact_updates" value="yes" defaultchecked="true" />
		
		<a href="javascript:void()" class="submit btn-red">send subspace message</a>
	</div>
</div>

<?php get_footer(); ?>