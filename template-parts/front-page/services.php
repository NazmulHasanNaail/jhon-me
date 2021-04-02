<?php
/**
 * Template part for displaying front page about me
 *
 * @package Jhon.me
 */
$options = get_option( 'jhon_me_options' );
$service_items=$options['jhon-me-service-items'];
?>
<!--========MY-SERVIC-START==========-->
<section class="my-service pt-5" id="service">
   <div class="animet-icon animet_left"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2><?php echo esc_html( __( 'my service', 'jhon-me' ) ); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach($service_items as $item){
            ?>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="<?php echo esc_url($item['jhon-me-service-img']['url']); ?>" alt="<?php echo esc_attr($item['jhon-me-service-img']['title']); ?>">
                    <span><?php echo esc_html($item['jhon-me-service-title']); ?></span>
                    <div class="service-item-text">
                       <p><?php echo esc_html($item['jhon-me-service-desc']); ?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!--MY-SERVIC-END-->
</div>