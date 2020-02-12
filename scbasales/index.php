<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage scba_sales
 * @since SCBA Sales 1.0
 */

get_header(); ?>

	<div class="SliderArea">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri();?>/images/Slider-1.png" alt="Los Angeles">
                    <div class="Captions">
                        <h2 class="animate fadeInUp" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s">Best selling</h2>
                        <p class="animate fadeInUp" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.3s">SCOTT AP75 4.5 SCBA</p>
                        
                        <form class="animate fadeInUp" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.5s">
                            <div class="form-group">
                                <label>Product Categories</label>
                                <?php dynamic_sidebar('sidebar-1');?>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="CategoryArea">
            <div class="container">

                <div class="CategoryHead">
                    <h3><span>Featured</span> Products</h3>
                    <p>SCBA Sales is a powerful eCommerce. Visit our shop page to see all main features for Your Store</p>
                </div>

                <div class="row">
                    <?php
                         $product_list = array(
                        'post_type'=>'product',
                        'orderby'    =>'rand',
                        'showposts'=>4
                    );
                        $product_query = new wp_query($product_list);
                        while($product_query->have_posts()): $product_query->the_post();
                    ?>
                    <div class="col-sm-3">
                        <?php scba_product_listing(); ?>
                    </div> 
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="ProductArea">
            <div class="container">

                <div class="ProductHead">
                    <h3><span>Recently</span> Viewed</h3>
                    <p>Include all products updated are the most customer choice of the week!</p>
                </div>

                <div class="ProductBody">
                    <div id="demos">
                        <div class="owl-carousel" id="Product">
                             <?php
                                 $product_list = array(
                                'post_type'=>'product',
                                'order'    =>'ASC',
                                'showposts'=>8
                            );
                                $product_query = new wp_query($product_list);
                                while($product_query->have_posts()): $product_query->the_post();
                            ?>
                            <div class="item">
                                <?php scba_product_listing(); ?>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="SaleArea">
            <span class="Discount">Discount Upto 50% Off</span>

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-6 padding_none">
                        <div class="SaleLeft" style="background-image: url(http://development.frcoder.com/wordpress/scbasales/wp-content/uploads/2019/05/leftGrid.png);">
                            <h2>Best Sellers</h2>
                            <h3>SCOTT SCBA</h3>
                            <a href="<?php echo get_home_url();?>/product-category/scott-scba/">See More <i class="fa fa-angle-right " aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="col-sm-6 padding_none">
                        <div class="SaleLeft SaleRight" style="background-image: url(<?php echo get_template_directory_uri();?>/images/rightGrid.png);">
                            <h2>Popular Now</h2>
                            <h3>SCBA ACCESSORIES</h3>
                            <a href="<?php echo get_home_url();?>/product-category/scott-accessories/">See More <i class="fa fa-angle-right " aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="ProductArea">
            <div class="container">

                <div class="ProductHead">
                    <h3><span>Best</span> Selling</h3>
                    <p>Include all products updated are the most customer choice of the week!</p>
                </div>

                <div class="ProductBody">
                    <?php
                         $product_list = array(
                        'post_type'=>'product',
                        'order'    =>'ASC',
                        'product_cat'=>'best-selling',
                        'showposts'=>4
                    );
                        $product_query = new wp_query($product_list);
                        while($product_query->have_posts()): $product_query->the_post();
                    ?>
                    <div class="col-sm-3">
                       <?php scba_product_listing(); ?>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="NewsletterArea" style="background-image: url(<?php echo get_template_directory_uri();?>/images/Newsletter.png);">
            <h5>SCBA Sales & Rental CO.</h5>
            <h3>Join Our Newsletter</h3>
            <p>Hey you, sign up it only takes a second to be the first to
                <br> find out about our latest news and promotions…</p>
           <?php echo do_shortcode('[mc4wp_form id="373"]');?>
        </div>
    </section>

    <section>
        <div class="tradeService">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">                    
                        
                        <div class="tradeHead">
                            <h3><span>SCBA </span> Financing</h3>
                            <p>SCBA Sales Company provides fire equipment financing exclusively through BAYSTONE FINANCIAL GROUP – Specialists in Fire Financing</p>

                        </div>

                        <div class="TradesServicesss">

                            <div class="col-sm-12 padding_none">
                                <div class="tradeCard">
                                    <div class="imgArea">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri();?>/images/trade-bg1.png">
                                        </figure>
                                        <div class="contentFront">
                                            <p>It was founded in 1987 as a division of kansas state bank. </p>
                                        </div>
                                        <div class="contentOverlay">
                                            <ul>
                                                <li>How we serve</li>
                                                <li>lease purchase financing</li>
                                                <li>simple funding program</li>
                                            </ul>
                                            <a href="#">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="contentArea">
                                        <div class="left-text">
                                            <h3>BAYSTONE FINANCIAL GROUP</h3>
                                            <p>ORDER PROTECTION</p>
                                        </div>
                                        <div class="right-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/images/trade1.PNG">
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                            </div>
                            <div class="clr"></div>    
                        </div>
                    </div>
                    
                    <div class="col-sm-5">
                        <div class="contactArea">
                            <h3><span>Contact</span> Us</h3>
                            <p>Contact Us with questions or comments</p>
                            <?php echo do_shortcode('[contact-form-7 id="371" title="Contact form 1"]');?>
                        </div>
                    </div>
                    
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
