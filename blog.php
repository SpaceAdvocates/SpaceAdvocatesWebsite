<?php get_header(); ?>

	<section id="blog_feed" role="main" class="large-9 columns">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/partials/content', 'blog' ); ?>

			<?php endwhile; ?>
		<?php else : ?>

			<h1>No posts found.</h1>

		<?php endif; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>