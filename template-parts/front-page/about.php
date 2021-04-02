<?php
/**
 * Template part for displaying front page about me
 *
 * @package Jhon.me
 */
$options = get_option( 'jhon_me_options' );
$author_img = $options['jhon-me-about-author-img'];
$about_list_item = $options['jhon-me-about-list-item'];
$about_resume = $options['jhon-me-about-resume'];
 ?>
<div class="about-and-service">
<!--========ABOUT-ME-START==========-->
<section class="about-me pt-5" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2><?php echo esc_html( __( 'about me', 'jhon-me' ) ); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="preview d-flex justify-content-around">
                    <div class="preview-img">
                       <img  src="<?php echo esc_url($author_img['url']); ?>" alt="<?php echo esc_attr( $author_img['title']); ?>"> 
                    </div>
                    <div class="preview-option">
                        <ul class="list-unstyled m-0 pt-1 nav nav-tabs">
                            <?php
                                if($about_list_item):
                                    $x=0;
                                    foreach($about_list_item as $item){
                                    ?>
                                    <li><a href="#<?php echo esc_html( $item['jhon-me-about-list-title']); ?>" class="<?php if($x==0){echo "active";}?>" data-toggle="tab"><?php echo esc_html( $item['jhon-me-about-list-title']); ?></a></li>
                                    <?php
                                    $x++;
                                    }
                                endif;
                              ?>

                            <li><a href="<?php echo esc_url($about_resume['url']); ?>"><?php echo esc_html($about_resume['text']); ?> <i class="fas fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="preview-text">
                    <div class="tab-content">
                    <?php
                    if($about_list_item):
                        $x=0; 
                        foreach($about_list_item as $item){
                    ?>
                    <div class="preview-text-item tab-pane <?php if($x==0){echo "active";}?>" id="<?php echo esc_attr($item['jhon-me-about-list-title']); ?>">
                        <?php echo $item['jhon-me-about-list-desc']; ?>
                    </div>
                    <?php
                    $x++;
                    }
                endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>