<?php
/*
Template Name: Front Page
*/
?>


<?php get_header(); ?>

	<section id="featured" class="row">

		<h2>Featured Content</h2>
		
		<?php
			$posts = get_posts(array(
				'post_type' => 'post',
				'meta_key' => '_cmb_featured_value',
				'meta_value' => 'on'
			));

			foreach( $posts as $post ): setup_postdata( $post ); ?>
				<div class="large-3 columns">
					<?php get_template_part( 'templates/partials/content', 'featured' ); ?>
				</div>
			<?php endforeach;

			wp_reset_query();  // Restore global post data stomped by the_post().
		?>

	</section>

	<section id="recent_posts" class="row">

		<h2>Recent Posts</h2>

		<?php
			$posts = get_posts(array(
				'post_type' => 'post',
				'post_per_page' => 5
			));
		
			global $post;
			setup_postdata( $post = array_shift($posts) ); ?>
				<div class="large-6 columns">
					<?php get_template_part( 'templates/partials/content', 'card' ); ?>
				</div>
			<?php

			foreach( $posts as $post ): setup_postdata( $post ); ?>
				<div class="large-3 columns">
					<?php get_template_part( 'templates/partials/content', 'card' ); ?>
				</div>
			<?php endforeach;
		?>
	</section>

<?php get_footer(); ?>
