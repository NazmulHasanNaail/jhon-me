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
                <?php
                while ( have_posts() ) :
                    the_post();
                ?>
                <div class="blog-left-side-area">
                    <!--------blog-post-details-------->
                    <div class="blog-post-details">
                        <?php
                            get_template_part( 'template-parts/content', get_post_type() );
                            ?>
                    </div>
                    <!--tag-->
                    <?php get_template_part( 'template-parts/single-template-parts/tags');?>
                    <!--author-->
                    <?php get_template_part( 'template-parts/single-template-parts/author');?>
                    <!--------blog-comment--------->
                    <?php
                  // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; 
                        ?>
                </div>
                <?php
                endwhile; // End of the loop.
                ?>
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