<?php
/**
 * The template for displaying Comments.
 *
 * @package mattbanks
 * @since mattbanks 2.6
 */
?>

<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() )
		return;
?>

<div id="comments" class="comments-area">
	<div class="row">
		<div class="large-8 columns">
			<?php if ( have_comments() ) : ?>
				<h2 class="comments-title">
					<?php
						printf( _n( 'One thought on %2$s', '%1$s thoughts on %2$s', get_comments_number(), '_mbbasetheme' ),
							number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
					?>
				</h2>

				<ol class="commentlist">
					<?php wp_list_comments( array( 'callback' => '_mbbasetheme_comment' ) ); ?>
				</ol><!-- .commentlist -->

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<div role="navigation" id="comment-nav-below" class="site-navigation comment-navigation">
					<h3 class="assistive-text"><?php _e( 'Comment navigation', '_mbbasetheme' ); ?></h3>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbbasetheme' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbbasetheme' ) ); ?></div>
				</div><!-- #comment-nav-below .site-navigation .comment-navigation -->
				<?php endif; // check for comment navigation ?>

			<?php endif; // have_comments() ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="nocomments"><?php _e( 'Comments are closed.', '_mbbasetheme' ); ?></p>
			<?php endif; ?>

			<?php comment_form(); ?>
		</div>
	</div><!-- .row -->
</div><!-- #comments .comments-area -->
