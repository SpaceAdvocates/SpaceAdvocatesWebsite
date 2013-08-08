<?php
/**
 * The template used for displaying video content in front-page.php
 */
?>

<?php
	$thumbnail = $post->snippet->thumbnails->default->url;
	$id = $post->snippet->resourceId->videoId;
	print_r($post);
?>
<div class="small-12 medium-12 large-9 columns">
	<iframe class="ytplayer" type="text/html" src="https://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allowfullscreen >
</div>