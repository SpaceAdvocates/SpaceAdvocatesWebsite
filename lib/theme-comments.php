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
			</div><!-- .comment-author .vcard -->
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="notice"><?php _e( 'Your comment is awaiting moderation.', '_mbbasetheme' ); ?></em>
				<br />
			<?php endif; ?>

			<div class="main-content">
				<div class="row">
					<div class="large-8 columns">
						<cite class="fn"><?php echo get_comment_author_link(); ?></cite>
						<div class="comment-meta commentmetadata">
							<time pubdate datetime="<?php comment_time( 'c' ); ?>">
								<?php printf( __( '%1$s at %2$s', '_mbbasetheme' ), get_comment_date(), get_comment_time() ); ?>
							</time>
						</div><!-- .comment-meta .commentmetadata -->
					</div>
					<div class="actions large-4 columns">
						<div class="large-6 columns">
							<?php edit_comment_link( __( 'edit', '_mbbasetheme' ), ' ' ); ?>
						</div>
						<div class="large-6 columns">
							<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</div>
					</div><!-- .reply -->
				</div>

				<div class="comment-content"><?php comment_text(); ?></div>
			</div><!-- .main-content -->
		</div><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for _mbbasetheme_comment()
