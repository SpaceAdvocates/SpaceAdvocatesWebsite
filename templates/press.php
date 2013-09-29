<?php
/*
Template Name: Press Page
*/
?>

<?php 
	$uploads = wp_upload_dir();
?>

<?php get_header(); ?>

<div class="large-12 columns">

	<h1>Press Room</h1>
	<div class="row">
		<div class="medium-5 columns press-kit">
			<a class="btn-red" href="javascript:void(0)">Download Press Kit</a>
		</div>
	</div>

	<h2>Media Contact</h2>
	<div class="row contact">
		<div class="small-6 medium-3 columns">
			<div class="person">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/Sumedha.png" alt="Sumedha" width="315" height="315" />
			</div>
		</div>
		<div class="small-12 medium-9 columns info">
			<h3>Sumedha Garud</h3>
			<h4>Director of Public and Media Relations</h4>
			<p>sumedha@spaceadvocates.com</p>
			<p>424.236.2787</p>
		</div>
	</div>

	<div class="row">
		<div class="medium-6 columns">
			<div class="press-section">
				<h3>Press Releases</h3>
				<div class="content">
					<ul>
						<li><a href="<?= $uploads->url ?>/PressRelease1.pdf">3/12/2012 CITIZEN MOVEMENT SEEKS INCREASE TO NASA’S BUDGET</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="medium-6 columns">
			<div class="press-section">
				<h3>In The News</h3>
				<div class="content">
					<ul>
						<li><a href="http://gizmodo.com/5962595/why-the-government-must-spend-more-money-on-nasa">Gizmodo.com - "Why the Government Must Spend More Money On NASA" by Jesus Diaz, November 26, 2012</a></li>
						<li><a href="http://www.slate.com/blogs/future_tense/2012/06">Slate.com / Future Tense Blog - "Neil deGrasse Tyson: Why We Need To Double NASA’s Budget" by Torie Bosch, June 4, 2012</a></li>
						<li><a href="http://www.washingtonpost.com/blogs/innovations/post/neil-degrasse-tyson-asks-us-how-much-the-universe-is-worth-the-web-responds/2012/03/19/gIQAvw34NS_blog.html">WashingtonPost.com / Innovations Blog - "Neil DeGrasse Tyson asks us how much the universe is worth; the Web responds" by Emi Kolawole, March 20, 2012</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-6 columns">
			<div class="press-section">
				<h3>Space Advocates Logos</h3>
				<div class="content">
					<div class="row">
						<div class="small-6 columns">
							<a href="<?= $uploads->url ?>/Space-Advocates-RGB-PNG.png"><img src="<?= $uploads->url ?>/Space-Advocates-RGB-PNG_x150.png" alt="Space Advocates Logo" width="150" height="150" class="alignnone size-full wp-image-2077" /></a>
						</div>
						<div class="small-6 columns">
							<a href="<?= $uploads->url ?>/SA_logo_astronaut.png"><img src="<?= $uploads->url ?>/SA_logo_astronaut_x150.png" alt="Space Advocates Advocate" width="150" height="150" class="alignnone size-thumbnail wp-image-2078" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="medium-6 columns">
			<div class="press-section">
				<h3>Penny4NASA Logos</h3>
				<div class="content">
					<div class="row">
						<div class="small-4 columns">
							<a href="<?= $uploads->url ?>/ICON.png"><img src="<?= $uploads->url ?>/ICON_x150.png" alt="Penny4NASA Logo" width="150" height="150" class="alignnone size-thumbnail wp-image-2079" /></a>
						</div>
						<div class="small-4 columns">
							<a href="<?= $uploads->url ?>/LOGO-VERTICAL-NEW.png"><img src="<?= $uploads->url ?>/LOGO-VERTICAL-NEW_x150.png" alt="Penny4NASA - Vertical" width="150" height="150" class="alignnone size-thumbnail wp-image-2080" /></a>
						</div>
						<div class="small-4 columns">
							<a href="<?= $uploads->url ?>/LOGO-HORIZONTAL-NEW.png"><img src="<?= $uploads->url ?>/LOGO-HORIZONTAL-NEW_x150.png" alt="Penny4NASA - Horizontal" width="150" height="150" class="alignnone size-thumbnail wp-image-2081" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns">
			<div class="press-section">
				<h3>Other Space Advocates Images</a></h3>
				<div class="content">
					<div class="row">
						<div class="large-12 columns">
							<a href="https://www.facebook.com/media/set/?set=a.371680972862823.88424.370002089697378&amp;type=3">Visit our Facebook album</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>