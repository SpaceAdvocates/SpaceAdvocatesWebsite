<?php get_header(); ?>

	<section id="main" role="main">

		<?php $posts = get_posts(array(
			'post_type' => 'post',
			'post_per_page' => 5
		));

		if( count($posts) > 0 ): foreach( $posts as $post ): setup_postdata( $post ); ?>

			<?php get_template_part( 'templates/partials/content', get_post_format() ); ?>

		<?php endforeach; ?>

		<?php get_template_part( 'templates/partials/inc', 'nav' ); ?>

		<?php else : ?>

			<article>
				<h1>Not Found</h1>
			</article>

		<?php endif; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
