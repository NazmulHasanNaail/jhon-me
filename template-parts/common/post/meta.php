<?php
    if ( 'post' === get_post_type() ) :
        if(is_singular()):
          ?>
          <div class="admin-and-post-date">
                <span class="border-right"><i class="fas fa-user"></i><?php jhon_me_posted_by(); ?></span>
                <span class="border-right"><i class="far fa-calendar-alt"></i><?php jhon_me_posted_on(); ?></span>
                <span><i class="fas fa-comments"></i><?php echo get_comments_number(); ?></span>
            </div><!-- .entry-meta -->
          <?php  
        else:
            ?>
            <div class="admin-and-post-date border-top">
                <span class="border-right"><i class="fas fa-user"></i><?php jhon_me_posted_by(); ?></span>
                <span><i class="far fa-calendar-alt"></i><?php jhon_me_posted_on(); ?></span>
            </div><!-- .entry-meta -->
            <?php
        endif;
    endif;
?>