<?php
/*
Template Name: Front Page
*/
?>


<?php get_header(); ?>

	<section id="action" class="row">
		<h1 class="large-8 columns">EXPLORING THE FINAL FRONTIER MAKES US GREAT</h1>
		<div class="large-4 columns">
			<a class="btn-red" href="#">Become A Space Advocate</a>
		</div>
	</section>

	<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="logo" /> -->

	<section id="featured" class="row">

		<h2>Featured Content</h2>
		
		<?php
			$posts = get_posts(array(
				'post_type' => 'post',
				'meta_key' => '_cmb_featured_value',
				'meta_value' => 'on'
			));

			foreach( $posts as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/partials/content', 'featured' );
			}

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

			foreach( $posts as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/partials/content', 'card' );
			}

			wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</section>

	<section id="recent_videos" class="row">

		<h2>Recent Videos</h2>

		<?php
			$videos = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=' . YT_PLAYLIST_ID . '&key=' . YT_API_KEY));

			foreach( $videos->items as $video) { ?>
				<div class="small-12 medium-6 large-3 columns">
					<iframe class="ytplayer" type="text/html" src="https://www.youtube.com/embed/<?php echo $video->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen ></iframe>
				</div>
			<?php }
		?>
	</section>

<?php get_footer(); ?>