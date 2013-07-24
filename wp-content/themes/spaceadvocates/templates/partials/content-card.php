<?php
/**
 * The template used for displaying card content in front-page.php
 */
?>

<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	$url = $thumb['0'];
?>
<div id="post-<?php the_ID(); ?>" class="card" style="background-image:url(<?= $url; ?>);">
	<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
	<?php // get_template_part( 'templates/partials/inc', 'meta' ); ?>
	<?php comments_popup_link( 'No Comments', '1 Comment', '% Comments', 'comments-link', '' ); ?>
</div>
