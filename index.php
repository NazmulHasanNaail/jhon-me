<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

/*-----HEADER----*/
    get_header();

/*----BREADCRUMB-----*/
get_template_part( 'template-parts/breadcrumb');
?>

<!--========BLOG-PAGE-AREA-START==========-->
<section class="blog-page-area">
    <div class="container">
        <div class="row">
            <!--========BLOG-LEFT-SIDE-AREA==========-->
            <div class="col-lg-8">
                <div class="blog-left-side-area">
                    <!--------blog-big-post-------->
                    <?php
                    $most_recent_args = array(
                        'posts_per_page' => 1,
                        'paged'          => 1,
                        'fields'         => 'ids',
                        'orderby'        => 'post_modified',
                        'order'          => 'DESC',
                    );
                    $most_recent = new WP_Query( $most_recent_args );
                    if ( $most_recent->have_posts() ) :
                        while ( $most_recent->have_posts() ) :
                            $most_recent->the_post();
                    ?>
                    <div class="blog-single-big-content">
                             <?php 
                             get_template_part( 'template-parts/post-formats/post',get_post_format() );
                            ?>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <!--------blog-post-------->
                    <div class="row">
                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                        $args = array(
                            'posts_per_page' =>get_option('posts_per_page'),
                            'post__not_in'   => $most_recent->posts,
                            'post_type'      =>"post",
                            'paged'          => $paged
                        );
                        $all_post = new WP_Query( $args);
                        if ( $all_post->have_posts() ) :
                            /* Start the Loop */
                            while ( $all_post->have_posts() ) :
                                $all_post->the_post();
                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                ?>
                                <div class="col-md-6">
                                <?php
                                get_template_part( 'template-parts/content', get_post_type() );
                                ?>
                                </div><!---col-md-6-->
                        <?php
                            endwhile;
                            ?>
                        <!--------blog-post-pagination------->
                        <div class="col-md-12" data-aos="fade-down">
                            <nav aria-label="Page navigation example">
                                <?php jhon_me_pagination(); ?>
                            </nav>
                        </div><!---pagination-->
                        <?php
                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div>
                    <!--------row-------->
                </div>
                <!--blog-left-side-area-->
            </div>
            <!--col-lg-8-->

            <?php get_sidebar(); ?>

        </div>
        <!--row-->
    </div>
    <!--container-->
</section>
<!--blog-page-area-->

<!------FOOTER------->
<?php
    get_footer();
?>