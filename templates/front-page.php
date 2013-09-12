<?php
/*
Template Name: Front Page
*/
?>

<?php

	$topPosts = get_posts(array(
		'post_type' => 'post',
		'meta_key' => '_cmb_featured_value',
		'meta_value' => 'on'
	));

	$recentVideos = get_posts(array(
		'post_type' => 'post',
		'category_name' => 'Videos',
		'posts_per_page' => 2
	));

?>


<?php get_header(); ?>

	<section id="action" class="row">
		<div class="small-12 large-8 columns">
			<h1>EXPLORING THE FINAL FRONTIER MAKES US GREAT</h1>
		</div>
		
		<div class="small-12 large-4 columns">
			<div class="row">
				<div class="cta small-12 medium-6 large-12 columns">
					<a class="btn-red" href="/join">Become A Space Advocate</a>
				</div>
				<div class="social small-12 medium-6 large-12 columns">
					<div class="row">
						<div class="small-3 columns">
							<a class="facebook" href="https://www.facebook.com/SpaceAdvocates"></a>
						</div>
						<div class="small-3 columns">
							<a class="google" href="https://plus.google.com/b/116044676098904697251/116044676098904697251"></a>
						</div>
						<div class="small-3 columns">
							<a class="twitter" href="https://twitter.com/SpaceAdvocates"></a>
						</div>
						<div class="small-3 columns">
							<a class="youtube" href="http://www.youtube.com/SpaceAdvocates"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="orbitmission" class="row">
	
		<h2>Join A Mission</h2>
		<div>
		<div id="orbit" class="small-12 columns">
			<div>
				<?php get_template_part( 'templates/partials/content', 'orbit' ); ?>
			</div>
		</div>
		</div>
		
	</section>

	<section id="featured" class="row">

		<h2>Top Stories</h2>
		<div class="small-12 columns">
			<?php foreach( $topPosts as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/partials/content', 'featured' );
			} ?>
		</div>

	</section>
	
	<section id="recent_videos" class="row">

		<h2>Recent Videos</h2>
		<div class="small-12 columns">
			<?php foreach( $recentVideos as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/partials/content', 'recentvideo' );
			} ?>
		</div>

	</section>

<?php get_footer(); ?>