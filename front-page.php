<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

/*-----HEADER----*/
    get_header();

/*----BREADCRUMB-----*/
get_template_part( 'template-parts/breadcrumb');
?>


<?php
    get_template_part( 'template-parts/front-page/banner');
    //banner
    get_template_part( 'template-parts/front-page/about');
    //about me
    get_template_part( 'template-parts/front-page/services');
    //services
    get_template_part( 'template-parts/front-page/my-work');
    //my-work
    get_template_part( 'template-parts/front-page/blog');
    //blog
?>


  <!========REVIEW-START==========>
  <section class="review">
      <div class="animet-icon animet_right"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-heading">
                      <h2>what people says</h2>
                  </div>
              </div>
          </div>
      </div>
      <div class="review-content">
          <div class="container">
              <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-fade" data-ride="carousel">

                  <!--Indicators-->
                  <ol class="carousel-indicators">
                      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                      <li data-target="#multi-item-example" data-slide-to="1"></li>
                      <li data-target="#multi-item-example" data-slide-to="2"></li>
                  </ol>
                  <!--/.Indicators-->

                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">

                      <!--First slide-->
                      <div class="carousel-item active">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="JessieChen">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 clearfix d-none d-md-block">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/RunyuXia.png" alt="RunyuXia.png">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Runyu Xia</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 clearfix d-none d-md-block">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/MichaelMcBride.png" alt="MichaelMcBride">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Michael R. McBride</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--/.First slide-->

                      <!--Second slide-->
                      <div class="carousel-item">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 clearfix d-none d-md-block">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 clearfix d-none d-md-block">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--/.Second slide-->

                      <!--Third slide-->
                      <div class="carousel-item">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 clearfix d-none d-md-block">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 clearfix d-none d-md-block">
                                  <div class="review-single-content">
                                      <div class="review-single-content-text">
                                          <p> It iscomplex project, with a lot of
                                              investigation. Client showed complete
                                              understanding and regard for exact the
                                              situation this help led the job to be
                                              completed successfully</p>
                                      </div>
                                      <div class="review-single-content-user d-flex align-items-center">
                                          <img src="img/JessieChen.png" alt="">
                                          <div class="user-name-and-review-star">
                                              <span class="user-name">Jessie Chen</span>

                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--/.Third slide-->

                      </div>
                      <!--/.Slides-->
              </div>
              <!--/.Carousel Wrapper-->
          </div>
      </div>
  </section>
  <!========REVIEW-END==========>
  <?php
      get_template_part( 'template-parts/front-page/counter');
      //blog
  ?>
 
<!------FOOTER------->
<?php
    get_footer();
?>
