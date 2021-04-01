<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Jhon.me
 */

get_header();
/*----BREADCRUMB-----*/
get_template_part( 'template-parts/breadcrumb');
?>
<section class="error-404 not-found">
<div class="container">
    <div class="row">
		<div class="col-12">
			<div class="eror_404_bg_img"></div>
			<span class="erortext-1"><?php esc_html_e( 'Error 404 - Page not found', 'jhon-me' ); ?></span>
			<span class="erortext-2"><?php esc_html_e( 'The page you request could not be found', 'jhon-me' ); ?></span>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn mt-3"><?php esc_html_e( 'Back to Home', 'jhon-me' ); ?></a>
		</div>
	</div>
</div>
</section><!-- .error-404 -->
<?php
get_footer();
