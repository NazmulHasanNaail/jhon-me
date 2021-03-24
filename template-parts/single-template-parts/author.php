<?php
	if ( 'post' === get_post_type() ) :
?>
<div class="blog-post-author" data-aos="fade-up">
    <div class="row align-items-center">
        <div class="col-12 col-md-5">
            <div class="author-profile">
                <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                <div>
                    <span class="name"><?php jhon_me_posted_by(); ?></span>
                    <span class="position">Sr. manager</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="author-description">
                <?Php  the_author_meta( 'description');?>
            </div>
        </div>
    </div>
</div><!--author-->
<?php endif; ?>
