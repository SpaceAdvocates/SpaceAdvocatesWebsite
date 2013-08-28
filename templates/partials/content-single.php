<?php
/**
 * The template used for displaying page content in single.php
 *
 * @package mattbanks
 * @since mattbanks 2.5
 */
?>

<?php

	$class = '';
	if (  get_post_meta( get_the_ID(), '_cmb_featured_value', true ) )
		$class = 'featured';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>">
		<h1 class="<?php echo $class; ?>"><?php the_title(); ?></h1>
		<div class="star"></div>
	</a>

	<?php // get_template_part( 'templates/partials/inc', 'meta' ); ?>

	<div class="entry">

		<?php the_content(); ?>

		<?php wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

		<?php the_tags( 'Tags: ', ', ', ''); ?>

	</div>

	<?php get_template_part( 'templates/partials/inc', 'socialbuttons' ); ?>

</article>
