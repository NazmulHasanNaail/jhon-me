<?php
/**
 * Template part for displaying front page blog
 *
 * @package Jhon.me
 */
$options = get_option( 'jhon_me_options' );
?>
<!--========BLOG-START==========-->
 <section class="blog pt-5">
     <div class="animet-icon animet_left"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="section-heading">
                     <h2><?php echo esc_html( __( 'blog', 'jhon-me' ) ); ?></h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <div class="blog-content">
                 <?php
                        $most_recent_args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'paged'          => 1,
                        'fields'         => 'ids',
                        'orderby'        => 'post_modified',
                        'order'          => 'DESC',
                    );
                    $most_recent = new WP_Query( $most_recent_args );
                    if ( $most_recent->have_posts() ) :
                 ?>
                     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                         <?php
                                $x=0;
                                while ( $most_recent->have_posts() ) :
                                    $most_recent->the_post();
                            ?>
                             <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x; ?>" class="<?php if($x==0){echo 'active';} ?>"></li>
                             <?php
                             $x++;
                             endwhile;
                             ?>
                         </ol>
                         <div class="carousel-inner">
                         <?php
                                $x=0;
                                while ( $most_recent->have_posts() ) :
                                    $most_recent->the_post();
                            ?>
                             <div class="carousel-item <?php if($x==0){echo 'active';} ?>">
                                 <div class="blog-single-content">
                                     <div class="row">
                                         <div class="col-md-3">
                                             <div class="blog-profile">
                                             <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                                                 <span><?php echo esc_html(get_the_author());?></span>
                                             </div>
                                         </div>
                                         <div class="col-md-9">
                                             <div class="bolg-single-text">
                                                 <a href="<?php the_permalink(); ?>" class="heading"><?php the_title(); ?></a>
                                                 <?php the_excerpt(); ?>
                                                 <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_html( __( 'Read more', 'jhon-me' ) ); ?></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <?php
                             $x++;
                             endwhile;
                             ?>
                         </div>
                     </div>
                     <?php
                     endif;
                     wp_reset_postdata();
                     ?>
                 </div>
             </div>
         </div>
     </div>
 </section>
  <!--========BLOG-END==========-->
  </div>