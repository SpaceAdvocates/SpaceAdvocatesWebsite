<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
?>
<a href="<?php the_permalink(); ?>" class="small-12 medium-6 large-3 columns">
	<div id="post-<?php the_ID(); ?>" class="card featured" style="background-image:url(<?php echo $url; ?>);"></div>
    
	<div class="drawer">
		<h1><?php the_title(); ?></h1>
	</div>
</a>