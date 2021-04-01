<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jhon.me
 */

?>

<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>contact me</h2>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="75" title="Contact form 1"]');?>
                    <!-- <form>
                        <div class="form-row justify-content-between">
                            <div class="form-check pl-1 mb-3">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Subscribe for Newsletter
                                </label>
                            </div>
                            <button type="submit" class="btn m-auto m-sm-0">Send Message</button>
                        </div>
                    </form> -->
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="contact-another-way">
                        <h3>More ways to contact me</h3>
                        <div class="contact-another-way-item d-flex">
                            <i class="fas fa-home"></i>
                            <div>
                                <span>New Park st, Brooklyn <br>12345 New York</span>
                            </div>
                        </div>
                        <div class="contact-another-way-item d-flex">
                            <i class="fas fa-mail-bulk"></i>
                            <div>
                                <span>Yourmail@gmail.com</span><br>
                                <span>me@johnsmith.com</span>
                            </div>
                        </div>
                        <div class="contact-another-way-item d-flex">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <span>091 123 123</span><br>
                                <span>00 823 123 123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center">
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jhon-me' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Proudly powered by %s', 'jhon-me' ), 'WordPress' );
                            ?>
                        </a>
                        <span class="sep"> | </span>
                            <?php
                            /* translators: 1: Theme name, 2: Theme author. */
                            printf( esc_html__( 'Theme: %1$s by %2$s', 'jhon-me' ), 'jhon-me', '<a href="http://underscores.me/">Nazmul</a>' );
                            ?>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>
    </div><!---footer-bottom-->
</footer><!-- #colophon -->
<!--========FOOTER-END==========-->
<a class="return-to-top" href="#top"><i class="fas fa-angle-double-up"></i></a>
<!-------------JS-FILES---------------->
<?php
 wp_footer();
?>
  <script>
    AOS.init();
  </script>
</body>

</html>
