<?php
/*
Template Name: Missions
*/
?>


<?php get_header(); ?>

<h1>Missions</h1>

<div class="mission">
	<div class="row">
		<img alt="slide1" src="<?= get_bloginfo('template_directory'); ?>/assets/images/slide1.jpg" />
	</div>
	<div class="row">
		<div class="large-8 columns">
			<h2>Penny4NASA</h2>
		</div>
		<div class="large-4 columns">
			<a class="btn-red" href="http://www.penny4nasa.org/take-action">Take Action</a>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<p>NASA currently receives an insufficient 0.48% of the federal budget. As a society, we want our tax dollars to reflect the importance of space exploration and research, and 0.48% just doesn’t cut it. NASA's funding should echo the hugely important economical, technological and inspirational resource that this agency has been to society throughout its 50+ year history.  Penny4NASA is a mission seeking to increase NASA's funding to 1% of the federal budget.</p>
		</div>
	</div>
</div>

<div class="mission">
	<div class="row">
		<img src="<?= get_bloginfo('template_directory'); ?>/assets/images/slide2.jpg" alt="slide2" />
	</div>
	<div class="row">
		<div class="large-8 columns">
			<h2>Coming Soon</h2>
		</div>
		<div class="large-4 columns">
			<a class="btn-red" href="/join">Become a Space Advocate</a>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<p>Become a Space Advocate to get the latest mission updates.</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>