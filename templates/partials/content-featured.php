<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<?php

	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homepage-thumb' );
	$url = $thumb['0'];

?>

<a href="<?php the_permalink(); ?>" class="featured-card small-12 medium-6 large-3 columns">
	<div id="post-<?php the_ID(); ?>" class="card featured" style="background-image: url(<?= $url ?>)"></div>
	<div class="drawer">
		<h1><?php the_title(); ?></h1>
	</div>
</a>