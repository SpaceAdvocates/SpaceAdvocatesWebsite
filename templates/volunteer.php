<?php
/*
Template Name: Volunteer Page
*/
?>

<?php get_header(); ?>

<div class="small-12 columns">
	<h1>Volunteer</h1>

	<p>Space Advocates is a social advocacy organization concerned with the improvement of, and support for, space exploration in every form. We have many people already on our team and we are constantly growing. If you are interested in helping out then shoot us an email on the following form and check the box for the team you are interested in joining!</p>
	<p>We currently aren’t looking for specific positions, but when we are, we will post a description of the ideal candidates here! :)</p>

	<div class="row">
		<div class="small-12 large-9 columns" id="volunteer_form">
			<label for="volunteer_name">Name*</label>
			<input type="text" id="volunteer_name" placeholder="Name" />

			<label for="volunteer_email">Email*</label>
			<input type="text" id="volunteer_email" placeholder="Email" />

			<label for="volunteer_subject">Phone*</label>
			<input type="text" id="volunteer_subject" placeholder="Subject" />

			<label for="volunteer_positions">Position</label>
			<div id="volunteer_positions">
				<?php do_action( 'show_ranks' ); ?>
			</div>

			<label for="volunteer_website">Website</label>
			<input type="text" id="volunteer_website" placeholder="http://" />

			<label for="volunteer_message">Message*</label>
			<textarea id="volunteer_message" placeholder="Message"></textarea>
			
			<button class="submit btn-red">send message</button>
		</div>
	</div>
</div>

<?php get_footer(); ?>