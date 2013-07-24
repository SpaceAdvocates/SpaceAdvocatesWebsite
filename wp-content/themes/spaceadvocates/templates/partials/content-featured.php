<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	$url = $thumb['0'];
?>
<div id="post-<?php the_ID(); ?>" class="card" style="background-image:url(<?= $url; ?>);"></div>
<div class="drawer">
	<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
	<div class="meta"><?php the_time('F jS, Y') ?></div>
</div>