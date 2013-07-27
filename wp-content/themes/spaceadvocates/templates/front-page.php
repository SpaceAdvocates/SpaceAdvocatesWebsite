<?php
/*
Template Name: Front Page
*/
?>


<?php get_header(); ?>

	<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="logo" />

	<section id="featured" class="row">

		<h2>Featured Content</h2>
		
		<?php
			$posts = get_posts(array(
				'post_type' => 'post',
				'meta_key' => '_cmb_featured_value',
				'meta_value' => 'on'
			));

			foreach( $posts as $post ): setup_postdata( $post ); ?>
				<?php get_template_part( 'templates/partials/content', 'featured' ); ?>
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

			foreach( $posts as $post ): setup_postdata( $post ); ?>
				<?php get_template_part( 'templates/partials/content', 'card' ); ?>
			<?php endforeach;
		?>
	</section>

<?php get_footer(); ?>
