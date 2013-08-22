<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<div class="small-12 medium-6 large-6 columns" style="padding:0;">
<a href="<?php the_permalink(); ?>">
<div id="post-<?php the_ID(); ?>" class="card recentvideo">
<div class="flex-video">
<?php
global $more;
$more = 0;
?>
<?php the_content(''); ?>
</div>
</div>
	<div class="drawer">
		<h1><?php the_title(); ?></h1>
	</div>
</a>
</div>