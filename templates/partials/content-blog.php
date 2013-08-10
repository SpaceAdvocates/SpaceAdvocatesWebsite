<?php
/**
 * The template used for displaying blog content in portfolio.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
if ( in_category( 'videos' )) {?>
<a href="<?php the_permalink(); ?>"><h1 class="videos"><?php the_title(); ?></h1></a>
<?php } elseif (  get_post_meta( get_the_ID(), '_cmb_featured_value', true ) ) {?>
<a href="<?php the_permalink(); ?>"><h1 class="featured"><?php the_title(); ?></h1></a>
<?php } else {?>
<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<?php } ?>
<div class="row collapse">
<?php the_post_thumbnail('full'); ?>
</div>
	<div class="entry">

		<?php the_content('read&nbsp;more&nbsp;<span>&rarr;</span>', true); ?>

		<?php wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

	</div>

</article>
