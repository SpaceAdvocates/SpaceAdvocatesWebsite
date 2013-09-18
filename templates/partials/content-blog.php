<?php
/**
 * The template used for displaying blog content in portfolio.php
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
	</a>

	<div class="entry">

		<?php the_content('read&nbsp;more&nbsp;<span>&rarr;</span>', true); ?>

		<?php wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

	</div>

</article>
