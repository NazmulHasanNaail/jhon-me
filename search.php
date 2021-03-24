<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Jhon.me
 */

get_header();
?>
<!--========BLOG-PAGE-AREA-START==========-->
<section class="blog-page-area">
    <div class="container">
        <div class="row">
            <!--========BLOG-LEFT-SIDE-AREA==========-->
            <div class="col-lg-8">
                <div class="blog-left-side-area">
                    <!--------search header-------->
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'jhon-me' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
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
                                get_template_part( 'template-parts/content', 'search' );
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
