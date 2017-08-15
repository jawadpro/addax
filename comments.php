<?php
require_once( get_template_directory() .'/better-comments.php' );
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area container addax-comment-container">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();

					printf(

						__('Comments (%1$s)' , 'addax' ),
						number_format_i18n( $comments_number ),
						get_the_title(),
				 		$comments_number
					);

			?>
		</h2>

		<?php the_comments_navigation(); ?>

			<?php
			wp_list_comments( array(
'style'             => 'ul',
'callback' => 'better_comments'
) );
			?>


		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'addax' ); ?></p>
	<?php endif; ?>

	<div class="comment-form">
			<?php if(comments_open()){ ?>
			<h5><?php echo esc_html__( "ADD your COMMENT", "addax" ); ?></h5>
			<?php
			}
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$fields =  array(

			'author' =>
			'<div class="col-md-6"><input id="author" placeholder="'.esc_html__( "Name", "addax" ).'" name="author" type="text" value="" size="30"/></div>',

			'email' =>
			'<div class="col-md-6"><input id="email" placeholder="'.esc_html__( "Email", "addax" ).'" name="email" type="text" value="" size="30"/></div>',

			'comment_field' =>'<div class="col-md-12"><textarea id="comment" name="comment" placeholder="'.esc_html__( "Message", "addax" ).'" aria-required="true"></textarea></div>',
		);

		if ( is_user_logged_in () ) {
			$comment_field = '<textarea id="comment" name="comment" placeholder="'.esc_html__( "Message", "addax" ).'" aria-required="true"></textarea>';
		} else {
			$comment_field="";
		}

		$comments_args = array(
			// change the title of send button
			'label_submit'=> esc_html__( 'Post Comment', "addax" ),
			// change the title of the reply section
			'title_reply'=> "",
			// remove "Text or HTML to be displayed after the set of comment fields"
			'comment_notes_after' => '',
			'class_form' => 'addax-comment-form',
			// redefine your own textarea (the comment body)
			'comment_field' => $comment_field ,
			'fields' =>  $fields,
		);
		if(comments_open()){
			comment_form( $comments_args );
			paginate_comments_links();
		}
			?>
	</div>


</div><!-- .comments-area -->
