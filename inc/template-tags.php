<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Jhon.me
 */

if ( ! function_exists( 'jhon_me_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function jhon_me_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'jhon-me' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo $posted_on; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'jhon_me_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function jhon_me_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'jhon-me' ),
			'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
		);

		echo  $byline; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;


if ( ! function_exists( 'jhon_me_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function jhon_me_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

<div class="post-thumbnail">
    <?php the_post_thumbnail(); ?>
</div><!-- .post-thumbnail -->

<?php else : ?>
<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
    <?php
		the_post_thumbnail(
			'post-thumbnail',
			array(
				'alt' => the_title_attribute(
					array(
						'echo' => false,
					)
				),
			)
		);
	?>
    <!-- <div class="overlay">
        <div class="arrow">&rarr;</div>
    </div> -->
</a>
<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'jhon_me_comment_form' ) ) :
	/**
	 * custom Comment form.
	 *
	 * @link https://developer.wordpress.org/reference/functions/comment_form/
	 */
	function jhon_me_comment_form(){
		$comments_args = array(
			'title_reply_before'=>'<h6 id="reply-title" class="comment-reply-title">',
			'title_reply_after' =>'</h6>',
			// Change the title of send button 
			'label_submit' => __( 'Submit Comment', 'textdomain' ),
			// Change the title of the reply section
			'title_reply' => __( 'Drop Us a Comment', 'textdomain' ),
			// Remove "Text or HTML to be displayed after the set of comment fields".
			'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn %3$s" value="%4$s" />.',
			// Redefine your own textarea (the comment body).
			'comment_field' => '<div class="form-row"><p class="form-group col-md-12"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" class="form-control" placeholder="This is a comment" name="comment" cols="30" rows="5" aria-required="true"></textarea></p></div>',
	);
	comment_form( $comments_args );
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;