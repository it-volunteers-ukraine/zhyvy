<?php
	/**
	 * The template for displaying comments
	 */
	if ( post_password_required() ) {
		return;
	}

	$commentsNumber = get_comments_number();
?>

<div class="comments-area">
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
			<?php paginate_comments_links( array( 'prev_next' => false, ) ); ?>
        </div>
	<?php endif; ?>

	<?php //If comments are closed and there are comments
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p><?php echo 'Коментарі закриті' ?></p>
		<?php endif; ?>


	<?php comment_form(
		array(
			'fields' => array(
				'author' => '<div class="inputs-top">' .
				            '<div class="comment-form-author">' .
				            '<input id="author" name="author" placeholder="*Ім\'я" type="text" autocomplete="name" required />' .
				            '</div>',
				'email'  => '<div class="comment-form-email">' .
				            '<input id="email" name="email" placeholder="*Email" type="email" autocomplete="email" required />' .
				            '</div>' .
				            '</div>',
			),

			'title_reply'          => '<h4 class="title-gradient-h2">Додати коментар</h4>',
			'comment_notes_before' => '<p class="notes">Поділіться Вашими враженнями</p>',
			'comment_field'        => '<div class="comment-form-comment">' .
			                          '<textarea id="comment" name="comment" rows="8" required placeholder="*Текст"></textarea>' .
			                          '</div>',
			'submit_button'        => '<button type="submit" id="submit-comment" class="button--medium">Відправити</button>',
		)
	); ?>
</div>
