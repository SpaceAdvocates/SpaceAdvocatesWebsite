<?php get_header(); ?>

	<section id="blog_feed" role="main" class="large-9 columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'blog' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>