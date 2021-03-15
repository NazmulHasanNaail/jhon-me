<div class="blog-single-item-text px-2">
    <?php 
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
        endif;
    ?>
    <!--.entry-header-->

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jhon-me' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jhon-me' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->
    <?php
        get_template_part('template-parts/common/post/meta');
    ?>
</div><!---post-summery-->