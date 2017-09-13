<?php
function better_comments( $comment, $args, $depth ) {
	global $post;
	$author_id = $post->post_author;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments. ?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'addax' ); ?></span> <?php comment_author_link(); ?></div>
	</li>
	<?php
		break;
		default :
		// Proceed with normal comments. ?>
	<li id="li-comment-<?php comment_ID(); ?>" class="addax-comment-list">
		<article id="comment-<?php comment_ID(); ?>" <?php comment_class('clr'); ?>>


			<div class="comment-author-image">
				<?php echo get_avatar( $comment, 50 ); ?>
			</div><!-- .comment-author -->

			<div class="comment-details" >
				<header class="comment-meta">
					<div><?php comment_author_link(); ?></div>
					<div class="comment-date">
					<?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						sprintf( _x( '%1$s', '1: date', 'addax' ), get_comment_date() )
					); ?> <?php esc_html_e( 'at', 'addax' ); ?> <?php comment_time(); ?>
				</div><!-- .comment-date -->
				</header><!-- .comment-meta -->
				<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'addax' ); ?></p>
				<?php endif; ?>
				<div class="comment-content entry clr">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->

			</div><!-- .comment-details -->
			<div class="reply comment-reply-link">
				<?php comment_reply_link( array_merge( $args, array(
					'reply_text' => esc_html__( 'Reply', 'addax' ),
					'depth'      => $depth,
					'max_depth'	 => $args['max_depth'] )
				) ); ?>
			</div>
			<div class="clearfix"></div>
		</article><!-- #comment-## -->
	</li>
	<?php
		break;
	endswitch; // End comment_type check.
}
?>
