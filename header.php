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

	<div id="wrapper" class="sliding-wrapper">
		<div id="content-wrapper" class="sliding-content-wrapper">
			<div id="flare"></div>
			<nav>
				<div class="row">
					<?php echo preg_replace( '/<\/li>\s<li/', '</li><li', wp_nav_menu( array( 'container_class' => 'small-12 medium-12 large-11 columns', 'theme_location' => 'primary', 'echo' => false ) ) ); ?>
					<div class="small-12 medium-12 large-1 columns">
						<a href="/donate" class="donate btn-red">Donate</a>
					</div>
				</div>
			</nav>
			<div id="container" class="row">