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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>