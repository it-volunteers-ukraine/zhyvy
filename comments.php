<?php
	/**
	 * The template for displaying comments
	 */
	if ( post_password_required() ) {
		return;
	}

	$commentsNumber = get_comments_number();
?>

<div id="postComments" class="comments-area">
	<?php if ( $commentsNumber > 0 ): ?>
        <h2 class="title-gradient-h2">Коментарі (<?php echo $commentsNumber ?>)</h2>
	<?php endif; ?>

	<?php if ( have_comments() ) : ?>
        <ul class="comment-list">
			<?php wp_list_comments( array(
				'reverse_top_level' => true,
				'callback'          => 'wp_it_volunteers_comment_markup',
			) ); ?>
        </ul>

        <div class="pagination">
			<?php
				$page     = max( 1, get_query_var( 'cpage' ) );
				$max_page = get_comment_pages_count();

				paginate_comments_links( array(
					'current'   => $page,
					'total'     => $max_page,
					'prev_next' => false,
					'show_all'  => $max_page <= 5,
					'end_size'  => 1,
					'mid_size'  => ( $page === 1 ) || ( $page == $max_page ) ? 3 : 1,
				) ) ?>
        </div>
	<?php endif; ?>

	<?php //If comments are closed and there are comments
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p>Коментарі закриті</p>
		<?php endif; ?>


	<?php comment_form(
		array(
			'fields' => array(
				'author' => '<div class="inputs-top">' .
				            '<div class="comment-form-author">' .
				            '<input id="author" name="author" placeholder="' . get_field( "events_comments_placeholder_name", 'option' ) . '" type="text" autocomplete="name" required />' .
				            '</div>',
				'email'  => '<div class="comment-form-email">' .
				            '<input id="email" name="email" placeholder="' . get_field( "events_comments_placeholder_email", 'option' ) . '" type="email" autocomplete="email" required />' .
				            '</div>' .
				            '</div>',
			),

			'title_reply'          => '<h4 class="title-gradient-h2">' . get_field( "events_comments_add", 'option' ) . '</h4>',
			'comment_notes_before' => '<p class="notes">' . get_field( "events_comments_text", 'option' ) . '</p>',
			'comment_field'        => '<div class="comment-form-comment">' .
			                          '<textarea id="comment" name="comment" rows="8" required placeholder="' . get_field( "events_comments_placeholder_text", 'option' ) . '"></textarea>' .
			                          '</div>',
			'submit_button'        => '<button type="submit" id="submit-comment" class="button--medium">' . get_field( "events_comments_send", 'option' ) .
			                          '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 6 10" fill="none">
                                       <path d="M3.879 5.00005L0.166504 1.28755L1.227 0.227051L6 5.00005L1.227 9.77305L0.166504 8.71255L3.879 5.00005Z" fill="currentColor"/>
                                       </svg>' .
			                          '</button>',
		)
	); ?>
</div>
