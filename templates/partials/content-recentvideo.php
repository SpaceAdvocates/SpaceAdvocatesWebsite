<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<?php

	preg_match('/(<iframe.*<\/iframe>)/', get_the_content(), $matches);
	$video = $matches[0];

?>

<div class="small-12 medium-6 large-6 columns">
	<a href="<?php the_permalink(); ?>">
		<div id="post-<?php the_ID(); ?>" class="card recentvideo">
			<div class="flex-video">
				<?= $video ?>
			</div>
		</div>
		<div class="drawer">
			<h1><?php the_title(); ?></h1>
		</div>
	</a>
</div>