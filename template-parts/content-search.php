<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

?>
<div class="col-md-12 text-left">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-aos="fade-up">
	<div class="entry-header">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php
        get_template_part('template-parts/common/post/meta');
    ?>
	</div><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
