<?php
/**
 * Template part for displaying front page banner
 *
 * @package Jhon.me
 */
$options = get_option( 'jhon_me_options' );
$wc_text = $options['jhon-me-banner-wc'];
$banner_name = $options['jhon-me-banner-name'];
$banner_desc = $options['jhon-me-banner-desc'];
$banner_hire_btn = $options['jhon-me-banner-hire-button'];
$banner_social = $options['jhon-me-banner-social'];
$banner_video_btn = $options['jhon-me-banner-video-button'];
?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
              <!----hero-content--->
               <div class="hero-content">
                <span><?php  echo esc_html($wc_text) ; ?></span>
                <h1><?php  echo esc_html($banner_name) ; ?></h1>
                <p><?php  echo $banner_desc ; ?></p>

                <a href="<?php echo esc_attr($banner_hire_btn['url']); ?>" class="btn"><?php echo esc_html($banner_hire_btn['text']); ?></a>
                <ul class="list-unstyled d-flex">
                    <?php
                    foreach($banner_social as $item){
                        ?>
                        <li>
                            <a href="<?php echo esc_attr($item['jhon-me-banner-social-link']['url']);  ?>" class="social-icon">
                                <i class="<?php  echo esc_attr( $item['jhon-me-banner-social-icon']); ?>"></i>
                            </a>
                        </li>
                        <?php
                    } 
                    ?>
                </ul>
                <div class="play-intro">
                    <a href="<?php echo esc_attr($banner_video_btn['url']); ?>" class="play-intro-btn lightbox mfp-iframe" title="YouTube Video" ><i class="fas fa-play"></i></a><span><?php echo esc_html($banner_video_btn['text']); ?></span>
                </div>
                </div>
                <!----hero-owner-img--->
                <div class="clip-path-bg-img"></div>
            </div>
            <div class="col-lg-1 d-none d-lg-block p-0">
                <div class="horizontal-navbar pl-5">
                    <nav>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     =>'list-unstyled d-flex m-0'
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>