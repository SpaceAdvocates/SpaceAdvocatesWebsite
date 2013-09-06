<?php
/*
Template Name: FAQ Page
*/
?>

<?php get_header(); ?>

<h1>FAQ</h1>

<ol id="toc"></ol>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>