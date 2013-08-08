<?php
/**
 * The template used for displaying blog content in portfolio.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

	<div class="entry">

		<?php the_content('read&nbsp;more&nbsp;<span>&rarr;</span>', true); ?>

		<?php wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

	</div>

</article>
