<?php
/*
Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>

	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
