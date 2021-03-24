<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<div class="blog-comment-list-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h6 class="comments-title">
			<?php
			$jhon_me_comment_count = get_comments_number();
			if ( '1' === $jhon_me_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One comment', 'jhon-me' ),
					
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comments', '%1$s comments', $jhon_me_comment_count, 'comments title', 'jhon-me' ) ),
					number_format_i18n( $jhon_me_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
			?>
		</h6><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'      => 'ol',
					'max_depth'  =>2,
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'jhon-me' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>
	</div><!--comment-list-area -->
	
	<?php
	jhon_me_comment_form();
	?>
</div><!-- #comments -->
