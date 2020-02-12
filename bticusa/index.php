<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<style>
    .ProductBox figure {
    height: auto !important;
    overflow: hidden;
    padding: 15px;
}
</style>
   <!-- <section>
        <div class="SliderArea" style="background-image: url('https://development.frcoder.com/wordpress/BCITUSA/wp-content/uploads/2019/06/7-reasons-why-being-a-scuba-diver-is-the-best-thing-ever_1100x619.jpg');">
            <div class="container">
                <h3>Big Sale</h3>
                <h5>SCBA Valves <br>
                    SCOTT 2216 PSI Valve</h5>
            </div>
        </div>
    </section>-->

    <section>
        <div class="ProductArea">
            <div class="container">
                <h1>SCBA <span>Cylinders</span></h1>
                <div id="demos">
                    <div class="owl-carousel" id="Product">
                        <?php
                             $product_list = array(
                            'post_type'=>'product',
                            'orderby'    =>'ASC',
                            'product_cat' =>'scba-cylinders'
                            
                        );
                            $product_query = new wp_query($product_list);
                            while($product_query->have_posts()): $product_query->the_post();
                        ?>
                        <div class="item">
                            <?php bticusa_product_listing(); ?>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="AdviseArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="AdviseBox">
                            <a href="#"><img src="https://development.frcoder.com/wordpress/BCITUSA/wp-content/uploads/2019/06/SCBA-BTIC-Compare-section.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="ProductArea">
            <div class="container">

                <h1>SCBA <span>Valves</span> </h1>

                <div id="demos">
                    <div class="owl-carousel" id="Product1">
                        <?php
                             $valves = array(
                            'post_type'=>'product',
                            'orderby'    =>'ASC',
                            'product_cat' =>'scba-valves'
                            
                        );
                            $valves_query = new wp_query($valves);
                            while($valves_query->have_posts()): $valves_query->the_post();
                        ?>
                        <div class="item">
                            <?php bticusa_product_listing(); ?>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section>
        <div class="PolicyArea">
            <div class="container-fluid">
                <div class="col-sm-3">
                    <div class="PolicyBox">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Policy-1.png"></figure>
                        <h3>FREE DELIVERY</h3>
                        <p>Free shipping on all order</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="PolicyBox">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Policy-2.png"></figure>
                        <h3>Online Support</h3>
                        <p>Support online 24 hours</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="PolicyBox">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Policy-3.png"></figure>
                        <h3>Money Return</h3>
                        <p>Back guarantee under 7 days</p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="PolicyBox">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Policy-4.png"></figure>
                        <h3>Member Discount</h3>
                        <p>Onevery order over $30.00</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section>
        <div class="ProductArea">
            <div class="container">

                <h1>Accessories</h1>

                <div id="demos">
                    <div class="owl-carousel" id="Product2">
                        <div class="item">
                            <div class="ProductBox">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Product-1.jpg"></figure>
                                <figcaption> 
                                    <h4>
                                        <a href="#">60 Minute 4500 PSI Carbon Fiber Cylinder - DOT / ISO Certified</a>
                                    </h4>
                                    <h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </h5>
                                    <h6><span>$ 2,000</span> <del>2,500</del></h6>
                                    <ul>
                                        <li><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#">Add To Cart</a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-signal"></i></a></li>
                                    </ul>
                                </figcaption>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ProductBox">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Product-1.jpg"></figure>
                                <figcaption> 
                                    <h4>
                                        <a href="#">60 Minute 4500 PSI Carbon Fiber Cylinder - DOT / ISO Certified</a>
                                    </h4>
                                    <h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </h5>
                                    <h6><span>$ 2,000</span> <del>2,500</del></h6>
                                    <ul>
                                        <li><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#">Add To Cart</a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-signal"></i></a></li>
                                    </ul>
                                </figcaption>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ProductBox">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Product-1.jpg"></figure>
                                <figcaption> 
                                    <h4>
                                        <a href="#">60 Minute 4500 PSI Carbon Fiber Cylinder - DOT / ISO Certified</a>
                                    </h4>
                                    <h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </h5>
                                    <h6><span>$ 2,000</span> <del>2,500</del></h6>
                                    <ul>
                                        <li><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#">Add To Cart</a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-signal"></i></a></li>
                                    </ul>
                                </figcaption>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ProductBox">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Product-1.jpg"></figure>
                                <figcaption> 
                                    <h4>
                                        <a href="#">60 Minute 4500 PSI Carbon Fiber Cylinder - DOT / ISO Certified</a>
                                    </h4>
                                    <h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </h5>
                                    <h6><span>$ 2,000</span> <del>2,500</del></h6>
                                    <ul>
                                        <li><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#">Add To Cart</a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-signal"></i></a></li>
                                    </ul>
                                </figcaption>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ProductBox">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/images/Product-1.jpg"></figure>
                                <figcaption> 
                                    <h4>
                                        <a href="#">60 Minute 4500 PSI Carbon Fiber Cylinder - DOT / ISO Certified</a>
                                    </h4>
                                    <h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </h5>
                                    <h6><span>$ 2,000</span> <del>2,500</del></h6>
                                    <ul>
                                        <li><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#">Add To Cart</a></li>
                                        <li><a href="#" title="Compare"><i class="fa fa-signal"></i></a></li>
                                    </ul>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

<?php get_footer(); ?>
