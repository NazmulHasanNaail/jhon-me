<?php
//Comment Field Order
function jhon_me_comment_fields_custom_order( $fields ) {
	$comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'jhon_me_comment_fields_custom_order' );

function jhon_me_comment_custom_fields($fields) {
	$fields   =  array(
		'author' => '<div class="form-row py-3"><p class="form-group col-md-4">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
					'<input id="author" class="form-control" placeholder="Nazmul Hasan" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
		'email'  => '<p class="form-group col-md-4"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
					'<input id="email" class="form-control" placeholder="example@mail.com" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
		'url'    => '<p class="form-group col-md-4"><label for="url">' . __( 'Website' ) . '</label> ' .
					'<input id="url" class="form-control" placeholder="www.example.com" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p></div>',
	);
	return  $fields;
} 
add_filter('comment_form_default_fields', 'jhon_me_comment_custom_fields');
