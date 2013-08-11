<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class((is_page()) ? 'page-' . $post->post_name : ''); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<div id="wrapper">
		<div id="content_wrapper">
			<nav>
				<div class="row">
<<<<<<< HEAD
					<?php echo preg_replace( '/<\/li>\s<li/', '</li><li', wp_nav_menu( array( 'container_class' => 'large-9 columns', 'theme_location' => 'primary', 'echo' => false ) ) ); ?>
					<div class="large-3 columns"><input type="text" class="search" placeholder="Search..." /></div>
=======
					<?php wp_nav_menu( array( 'container_class' => 'large-9 columns', 'theme_location' => 'primary' ) ); ?>
					<div class="large-3 columns">
<ul id="side-nav">
<li>
<a href="http://localhost/SpaceAdvocatesWebsite-master/?page_id=13">Donate</a>
</li>
</ul>           
                    </div>
>>>>>>> 64b82a3866ae926a3a8f97fdcf4e385425e3b399
				</div>
			</nav>
<?php if ( is_front_page() ) { ?>
<section id="action">
<div class="row">
<div class="large-6 columns">
<h1>EXPLORING THE FINAL FRONTIER MAKES US GREAT</h1>
</div>
<div class="large-6 columns">
<a class="btn-red" href="#">Become A Space Advocate</a>
</div>

</div>

</section>
<?php }
?>
			<div id="container" class="row">