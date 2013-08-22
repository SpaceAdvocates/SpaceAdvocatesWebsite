<?php
/**
 * The template used for displaying featured card content in front-page.php
 */
?>

<div class="small-12 medium-6 large-3 columns" style="padding:0;">
<a href="<?php the_permalink(); ?>">
<div id="post-<?php the_ID(); ?>" class="card featured">
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail('homepage-thumb');
} ?>
</div>
	<div class="drawer">
		<h1><?php the_title(); ?></h1>
	</div>
</a>
</div>