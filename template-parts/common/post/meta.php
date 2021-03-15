<?php
    if ( 'post' === get_post_type() ) :
        ?>
    <div class="admin-and-post-date border-top">
        <span class="border-right"><i class="fas fa-user"></i><?php jhon_me_posted_by(); ?></span>
        <span><i class="far fa-calendar-alt"></i><?php jhon_me_posted_on(); ?></span>
    </div><!-- .entry-meta -->
    <?php
    endif;
?>