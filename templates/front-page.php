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
        <div class="large-8 medium-12 small-12 columns">
            <h1>EXPLORING THE FINAL FRONTIER MAKES US GREAT</h1>
        </div>
        
        <div class="large-4 medium-12 small-12 columns">
        	<div class="large-12 medium-6 small-12 columns">
				<a class="btn-red cta" href="/join">Become A Space Advocate</a>
            </div>
            <div class="large-12 medium-6 small-12 columns">
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
	</section>

    <section id="orbitmission" class="row">
    
        <h2>Join A Mission</h2>    
        
        <section id="orbit">
        
            <ul data-orbit data-options="timer_speed:5500; bullets:false; navigation_arrows: false; slide_number: false;">
            
                <li data-orbit-slide="mission-1">
                    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slide1.jpg" alt="" />
                    <div class="orbit-caption">
                        <div class="row">
                            <div class="large-8 columns"><h3>Help increase NASA's funding to 1% of the federal budget.</h3></div>
                            <div class="large-4 columns"><a class="btn-red" href="http://www.penny4nasa.org">Take Action</a></div>
                        </div>
                    </div>
                </li>
                
                <li data-orbit-slide="mission-2">
                    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slide2.jpg" alt="" />
                    <div class="orbit-caption">
                        <div class="row">
                            <div class="large-8 columns"><h3>Become a Space Advocate to get the latest mission updates.</h3></div>
                            <div class="large-4 columns"><a class="btn-red" href="/join">Join</a></div>
                        </div>
                    </div>
                </li>
                
                
            </ul>
            
            <div id="orbit-nav">
                <ul class="orbit-bullets">
                    <a class="large-6 columns active" href="#" data-orbit-link="mission-1">01. Penny4NASA</a>
                    <a class="large-6 columns" href="#" data-orbit-link="mission-2">Coming Soon</a>
                </ul>
            </div>
            
        </section>
        
    </section>

	<section id="featured" class="row">

		<h2>Top Stories</h2>
		
		<?php
			foreach( $topPosts as $post ) {
				setup_postdata( $post );
				get_template_part( 'templates/partials/content', 'featured' );
			}
		?>

	</section>
    
    <section id="recent_videos" class="row">

		<h2>Recent Videos</h2>
		
		<?php
			foreach( $recentVideos as $post ) {
                setup_postdata( $post );
				get_template_part( 'templates/partials/content', 'recentvideo' );
			}
		?>

	</section>

<?php get_footer(); ?>