<?php
/**
 * The template used for displaying post meta information
 *
 * @package mattbanks
 * @since mattbanks 2.5
 */
?>

<div class="meta">
	Posted on <strong><?php the_time('F jS, Y') ?></strong> by <strong><?php the_author() ?></strong>
	<?php // comments_popup_link( 'No Comments', '1 Comment', '% Comments', 'comments-link', '' ); ?>
</div>
