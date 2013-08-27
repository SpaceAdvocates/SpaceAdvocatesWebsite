<?php get_header(); ?>

	<section id="search_feed" role="main" class="large-9 columns">

		<?php if ( have_posts() ) : ?>

			<h1>Search Results</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/partials/content', 'blog' ); ?>

			<?php endwhile; ?>

			<?php get_template_part( 'templates/partials/inc', 'nav' ); ?>

		<?php else : ?>

			<h1>No posts found.</h1>

		<?php endif; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
