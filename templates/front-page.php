<?php
/*
Template Name: Front Page
*/
?>


<?php get_header(); ?>

	<section id="action" class="row">
        <div class="large-6 columns">
            <h1>EXPLORING THE FINAL FRONTIER MAKES US GREAT</h1>
        </div>
        
        <div class="large-6 columns">
            <a class="btn-red cta" href="javascript:void(0)">Become A Space Advocate</a>
            <div class="small-3 columns">
                <a class="facebook" href="javascript:void(0)"></a>
            </div>
            <div class="small-3 columns">
                <a class="google" href="javascript:void(0)"></a>
            </div>
            <div class="small-3 columns">
                <a class="twitter" href="javascript:void(0)"></a>
            </div>
            <div class="small-3 columns">
                <a class="youtube" href="javascript:void(0)"></a>
            </div>
        </div>
	</section>

	<section id="featured" class="row">

		<h2 class="large-12 columns">Featured Content</h2>
		
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

		<h2 class="large-12 columns">Recent Posts</h2>

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

		<h2 class="large-12 columns">Recent Videos</h2>

		<?php
			$videos = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=' . YT_PLAYLIST_ID . '&key=' . YT_API_KEY));

			$i = 0;
			foreach( $videos->items as $key => $video) {
				if($key % 2 == 0): ?>
					<div class="row">
				<?php endif; ?>

				<div class="video small-12 medium-6 large-6 columns">
					<iframe class="ytplayer" type="text/html" src="https://www.youtube.com/embed/<?php echo $video->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen ></iframe>
				</div>

				<?php if($key % 2 == 1): ?>
					</div>
				<?php endif;

				$i++;
			}
		?>
	</section>

<?php get_footer(); ?>