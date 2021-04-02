<?php
/**
 * Template part for displaying front page my-works
 *
 * @package Jhon.me
 */
$options = get_option( 'jhon_me_options' );
$work_items= $options['jhon-me-work-items'];
?>
<div class="my-work-and-blog pb-5">
<!--========MY-WORK-START==========-->
<section class="my-work pt-5" id="portfolio">
   <div class="animet-icon animet_right"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2><?php echo esc_html( __( 'my works', 'jhon-me' ) ); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="list-unstyled d-flex filters">
                <?php  
                if($work_items):
                    ?>
                    <li><a class="is-checked" href="#*" data-filter data-filter="*">all</a></li>
                    <?php
                    $x=null;
                    foreach($work_items as $item){
                        $cat=$item['jhon-me-work-cat'];
                        if($x!==$cat){
                        ?>
                        <li><a href="#<?php  echo esc_attr( str_ireplace(array('/','\&'),'',str_replace(' ','',$cat))); ?>" data-filter=".<?php  echo esc_attr( str_ireplace(array('/','\&'),'',str_replace(' ','',$cat))); ?>"><?php  echo esc_html($cat); ?></a></li>
                        <?php    
                            $x= $cat;
                        }
                    }
                endif;   
                ?>
            </ul>
        </div>
        <div class="row portfolio">
            <?php  
                if($work_items):
                foreach($work_items as $item){
                    $cat = $item['jhon-me-work-cat'];
                    $cat =str_replace(' ','',$cat);
                    $cat =str_replace(array('/','\&'),'',$cat);
            ?>
            <div class="col-sm-6 col-md-4  grid-item <?php echo esc_attr($cat); ?>">
                <a class="work-img lightbox" href="<?php echo esc_url($item['jhon-me-work-media']['url']); ?>">
                    <div class="portfolio-item">
                        <img src="<?php echo esc_url($item['jhon-me-work-media']['url']); ?>" alt="my-wrork-img-3">
                        <div class="portfolio-item-details">
                            <span class="category"><?php echo esc_html($item['jhon-me-work-cat']); ?></span>
                            <h4><?php echo esc_html($item['jhon-me-work-title']); ?></h4>
                            <p><?php echo esc_html($item['jhon-me-work-desc']); ?></p>

                        </div>
                    </div>
                </a>
            </div>
            <?php
                }
                endif;
            ?>
        </div>
    </div>
</section>
<!--========MY-WORK-END==========-->