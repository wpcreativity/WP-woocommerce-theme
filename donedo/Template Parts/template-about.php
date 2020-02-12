<?php 
/**
 * The main template file 
 * Template Name: About
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage donedo
 * @since 1.0
 * @version 2.1
 */

get_header(); ?>

    <section>
        <div class="about-bg">
            <div class="aboutTop">
                <?php while(have_posts()): the_post(); the_content(); endwhile; ?>
            </div>
        </div>
    </section>
    
    <section>
        <div class="abtContent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="introText">
                            <h3><?php the_field('creative_heading');?></h3>
                             <?php the_field('creative_content');?>
                            <ul class="social_list">
                                <li>Follow :</li>
                                <li><a href="<?php echo ot_get_option('instagram');?>" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('youtube');?>" target="_blank" ><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('twitter');?>" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('facebook');?>" target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul> 
                            <h4 class="bottom_sign"><?php the_field('destination');?></h4>
                        </div>
                    </div>
                    <div class="col-sm-5 offset-sm-1">
                        <div class="introImg">
                            <img src="<?php the_field('creative_image');?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="counterArea">
            <h1 class="counterText">
              Still
              <div class="counter">
                <span class="decor top"></span>
                <span class="decor bottom"></span>
                <span class="from top"><span></span><span class="shadow"></span></span>
                <span class="from bottom"><span></span><span class="shadow"></span></span>
                <span class="to top"><span></span><span class="shadow"></span></span>
                <span class="to bottom"><span></span><span class="shadow"></span></span>
              </div>
              seconds from this minute for new video.
            </h1>
        </div>
    </section>
    
    <section>
        <div class="reviewsArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                          </ul>

                          <!-- The slideshow -->
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="row">
                                      <div class="col-sm-3 offset-sm-1">
                                        <figure>
                                            <img src="<?php echo THEME_URI; ?>/assets/images/review4.jpg">
                                          </figure>  
                                      </div>

                                      <div class="col-sm-7">
                                        <div class="reviewText">
                                            <h3>ADAM SMITH</h3>
                                            <span>Designer</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in nisi id diam consectetur rhoncus at et lorem. Phasellus rutrum lectus sed condimentum gravida. Proin vestibulum ante et magna venenatis vehi - cula. Suspendisse non arcu sapien</p>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                      <div class="col-sm-3 offset-sm-1">
                                        <figure>
                                            <img src="<?php echo THEME_URI; ?>/assets/images/review2.jpg">
                                          </figure>  
                                      </div>

                                      <div class="col-sm-7">
                                        <div class="reviewText">
                                            <h3>ADAM SMITH</h3>
                                            <span>Designer</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in nisi id diam consectetur rhoncus at et lorem. Phasellus rutrum lectus sed condimentum gravida. Proin vestibulum ante et magna venenatis vehi - cula. Suspendisse non arcu sapien</p>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                            <div class="carousel-item">
                              <div class="row">
                                      <div class="col-sm-3 offset-sm-1">
                                        <figure>
                                            <img src="<?php echo THEME_URI; ?>/assets/images/review3.jpg">
                                          </figure>  
                                      </div>

                                      <div class="col-sm-7">
                                        <div class="reviewText">
                                            <h3>ADAM SMITH</h3>
                                            <span>Designer</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in nisi id diam consectetur rhoncus at et lorem. Phasellus rutrum lectus sed condimentum gravida. Proin vestibulum ante et magna venenatis vehi - cula. Suspendisse non arcu sapien</p>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                          </div>

                          <!-- Left and right controls -->
                          <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>-->

                        </div>
                    </div>
                </div>                    
            </div>
        </div>    
    </section>

<?php get_footer(); ?>