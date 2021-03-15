<?php
/**
 * Template part for displaying Gallery posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

?>

<div class="blog-single-item border gallery">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-single-item-img">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <?php jhon_me_post_thumbnail(); ?>
                    </div>
                    <div class="carousel-item">
                    <?php jhon_me_post_thumbnail(); ?>
                    </div>
                    <div class="carousel-item">
                    <?php jhon_me_post_thumbnail(); ?>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!---slider-->

            <div class="category-icon">
                <i class="far fa-images"></i>
            </div><!---category-icon-->
        </div><!--post- thumbnail-->
        
        <?php 
         get_template_part('template-parts/common/post/summery');
        ?>
    </div><!-- #post-<?php the_ID(); ?> -->
</div>