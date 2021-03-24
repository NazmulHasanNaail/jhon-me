<?php
/**
 * Template part for displaying Quote posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

?>

<div class="blog-single-item  quote" data-aos="fade-up">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-single-item-img">
                <?php jhon_me_post_thumbnail(); ?>

            <div class="category-icon">
                <i class="fas fa-quote-right"></i>
            </div>
        </div><!--post- thumbnail-->
        <?php 
         get_template_part('template-parts/common/post/summery');
        ?>
    </div><!-- #post-<?php the_ID(); ?> -->
</div>
