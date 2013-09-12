<?php
/*
Template Name: Volunteer Page
*/
?>

<?php get_header(); ?>

<div class="small-12 columns">
	<h1>Volunteer</h1>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>