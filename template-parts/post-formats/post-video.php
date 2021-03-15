<?php
/**
 * Template part for displaying Video posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

?>

<div class="blog-single-item border video">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-single-item-img">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/l85lugud7uQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="category-icon">
                <i class="fas fa-video"></i>
            </div>
        </div>
        <!--post- thumbnail-->

        <?php 
         get_template_part('template-parts/common/post/summery');
        ?>
    </div><!-- #post-<?php the_ID(); ?> -->
</div>