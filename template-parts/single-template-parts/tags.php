<?php
	if ( 'post' === get_post_type() ) :
?>
<div class="tag" data-aos="fade-up">
    <?php
    echo get_the_tag_list( sprintf( '<ul>%s: <li>', __( 'Tags', 'textdomain' ) ), '</li><li> ', '</li></ul>' );
    ?>
</div><!--tag-->
<?php endif; ?>