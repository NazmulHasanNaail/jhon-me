<?php
/**
 * Template part for displaying Standard posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

?>

<div class="blog-single-item border standard">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-single-item-img">
                <?php jhon_me_post_thumbnail(); ?>
                
            <div class="category-icon">
                <i class="far fa-image"></i>
            </div>
        </div><!--post- thumbnail-->
        
        <?php 
         get_template_part('template-parts/common/post/summery');
        ?>
    </div><!-- #post-<?php the_ID(); ?> -->
</div>
