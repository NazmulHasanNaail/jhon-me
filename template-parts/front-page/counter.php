<?php
/**
 * Template part for displaying front page counter
 *
 * @package Jhon.me
 */
$options = get_option( 'jhon_me_options' );
$counte_items = $options['jhon-me-counter-items'];
?>
<!--========COUNTER-START==========-->
 <section class="counter">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-heading">
                     <h2><?php echo esc_html( __( 'WHAT I ARCHIVED', 'jhon-me' ) ); ?></h2>
                 </div>
             </div>
         </div>
         <div class="row">
            <?php
            if($counte_items):
                foreach($counte_items as $item){ 
            ?>
             <div class="col-md-6 col-lg-3">
                 <div class="counter-item">
                     <img src="<?php echo esc_url($item['jhon-me-counter-img']['url']) ?>" alt="<?php echo esc_attr($item['jhon-me-counter-img']['title']) ?>">
                     <h5><?php echo  $item['jhon-me-counter-title']; ?></h5>
                     <span class='numscroller' data-min='1' data-max='<?php echo esc_attr($item['jhon-me-counter-number']); ?>' data-delay='5' data-increment='10'><?php echo esc_html($item['jhon-me-counter-number']); ?></span>
                 </div>
             </div>
             <?php
                }
             endif;
             ?>
         </div>
     </div>
 </section>
 <!--========COUNTER-END==========-->