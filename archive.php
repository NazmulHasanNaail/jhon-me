<?php
/**
 * The template for displaying archive pages
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

<!--========Archive-Page==========-->
<section class="blog-page-area">
    <div class="container">
        <div class="row">
            <!--========BLOG-LEFT-SIDE-AREA==========-->
            <div class="col-lg-8">
                <div class="blog-left-side-area">
                    <!--------blog-post-------->
                    <div class="row">
                        <?php
                        if (have_posts() ) :
                            ?>
                            <div class="col-md-12 page-header pb-4">
                                <?php
                                the_archive_title( '<h3 class="page-title">', '</h3>' );
                                the_archive_description( '<div class="archive-description">', '</div>' );
                                ?>
                            </div><!-- .page-header -->
                            <?php
                            /* Start the Loop */
                            while (have_posts() ) :
                                the_post();
                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                ?>
                                <div class="col-md-12">
                                <?php
                                get_template_part( 'template-parts/content', get_post_type() );
                                ?>
                                </div><!---col-md-12-->
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
                    </div><!--------row-------->
                </div><!--blog-left-side-area-->
            </div><!--col-lg-8-->

            <?php get_sidebar(); ?>

        </div><!--row-->
    </div><!--container-->
</section><!--archive-page-->

<!------FOOTER------->
<?php
    get_footer();
?>