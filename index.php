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
                    <div class="blog-single-big-content border-bottom">
                        <a href="blog-page-details.html"><img src="img/Blog-post-img-1.png" alt="Blog-post-img-1"></a>
                        <h3><a href="blog-page-details.html">NEW YEAR COLOURS TREND FOR ILLUSTRATION </a></h3>
                        <div class="admin-and-post-date">
                            <span class="border-right"><i class="fas fa-user"></i> admin</span>
                            <span><i class="far fa-calendar-alt"></i>Jun 24, 2018</span>
                        </div>
                        <p>Whether it’s time for your next factory recommended maintenance visit, a routine oil
                            change, new tires, or repair services on your brakes, muffler and exhaust</p>
                    </div>
                    <!--------blog-post-------->
                    <div class="row">
                        <?php
                        if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                get_template_part( 'template-parts/content', get_post_type() );
                                ?>
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