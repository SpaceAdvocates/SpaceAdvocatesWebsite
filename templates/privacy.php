<?php
/*
Template Name: Privacy Page
*/
?>

<?php get_header(); ?>

<h1>Privacy Policy</h1>

<div class="content">

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

</div>

<?php get_footer(); ?>