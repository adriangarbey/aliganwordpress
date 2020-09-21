<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">

	<?php

	//Declare Vars
	$comment_send = pll__('Enviar >');
	$comment_reply = pll__('Leave a Message');
	$comment_reply_to = pll__('Reply');
	$comment_author = pll__('Nombre de la persona');
	$comment_email = pll__('Correo electrónico');
	$comment_body = pll__('Comentario*');
	$comment_before = pll__('Registration isn\'t required.');
	$comment_cancel = pll__('Cancel Reply');
	$comment_author_label = pll__('Nombre');
	$comment_correo_label = pll__('Correo*');

	//Array
	$comments_args = array(
		//Define Fields
		'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn-submit bg-primary %3$s" value="%4$s" />',
		'submit_field' => '<div class="form-row mt-4 justify-content-end">
                            %1$s %2$s
                        </div>',
		'comment_field' => '<div class="form-row mb-3">
                            <div class="col">
                                <label for="feedbackTxtarea">'.$comment_body.' </label><textarea id="comment" class="form-control" name="comment" rows="5" aria-required="true" placeholder="' . $comment_body .'"></textarea></div></div>',

		'fields' => array(
			//Author field
			'author' => '<div class="form-row mb-3">
                            <div class="col-12 col-md-6">
                                <label for="feedbackName">'.$comment_author_label.'</label><input id="author" class="form-control" name="author" aria-required="true" placeholder="' . $comment_author .'"/></div>',
			'email' => '<div class="col-12 col-md-6">
                                <label for="feedbackEmail">'.$comment_correo_label.'</label><input id="email"  class="form-control" name="email" placeholder="' . $comment_email .'"/></div></div>',
		),
		// Change the title of send button
		'label_submit' => __( $comment_send ),
		// Change the title of the reply section
		'title_reply' => '',
		// Change the title of the reply section
		'title_reply_to' => __( $comment_reply_to ),
		//Cancel Reply Text
		'cancel_reply_link' => __( $comment_cancel ),
		// Redefine your own textarea (the comment body).

		//Message Before Comment
		'comment_notes_before' => '',
		// Remove "Text or HTML to be displayed after the set of comment fields".
		'comment_notes_after' => '',
		//Submit Button ID
		'id_submit' => __( 'comment-submit' ),
	);
	comment_form( $comments_args );

	?>


    <?php if ( have_comments() ) : ?>
    <div class="content-section mb-5 mt-4">
        <span class="content-header w-100">
            <?php
                printf( _nx( pll__('1 Comentario'), pll__('%1$s comentarios'), get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '' );
            ?>
         </span>
        <hr class="content-separator w-50 mb-5">
 
        <div class="comment-list">
            <?php
              wp_list_comments('type=comment&callback=format_comment');
            ?>
        </div><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php pll__( 'Comment navigation' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( pll__( '&amp;larr; Older Comments' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( pll__( 'Newer Comments &amp;rarr;' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php pll__( 'Comments are closed.' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 

</div><!-- #comments -->
