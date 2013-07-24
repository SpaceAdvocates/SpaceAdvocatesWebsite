<?php

/**
 * Template for comments and pingbacks, via _s theme.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since _mbbasetheme 2.6
 */
if ( ! function_exists( '_mbbasetheme_comment' ) ) :
function _mbbasetheme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', '_mbbasetheme' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', '_mbbasetheme' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 60 ); ?>
				<cite class="fn"><?php echo get_comment_author_link(); ?></cite>
			</div><!-- .comment-author .vcard -->
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="notice"><?php _e( 'Your comment is awaiting moderation.', '_mbbasetheme' ); ?></em>
				<br />
			<?php endif; ?>

			<div class="main-content">
				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', '_mbbasetheme' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( 'edit', '_mbbasetheme' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->

				<div class="comment-content"><?php comment_text(); ?></div>

				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			</div><!-- .main-content -->
		</div><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for _mbbasetheme_comment()
