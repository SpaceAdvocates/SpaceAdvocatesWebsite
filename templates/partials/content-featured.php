<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<a href="<?php the_permalink(); ?>" class="small-12 medium-6 large-3 columns">
	<div id="post-<?php the_ID(); ?>" class="card featured">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('homepage-thumb');
	} ?>
	</div>
	<div class="drawer">
		<h1><?php the_title(); ?></h1>
	</div>
</a>