<?php
/*
Template Name: Missions
*/
?>


<?php get_header(); ?>

<h1>Our Missions</h1>

<ul>
			
	<li>
		<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slide1.jpg" alt="" />
		<div class="row">
			<div class="large-8 columns"><h1>Help increase NASA's funding to 1% of the federal budget.</h1></div>
			<div class="large-4 columns"><a class="btn-red" href="http://www.penny4nasa.org">Take Action</a></div>
		</div>
	</li>
	
	<li>
		<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/slide2.jpg" alt="" />
		<div class="row">
			<div class="large-8 columns"><h1>Become a Space Advocate to get the latest mission updates.</h1></div>
			<div class="large-4 columns"><a class="btn-red" href="/join">Join</a></div>
		</div>
	</li>
	
</ul>

<?php get_footer(); ?>