<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Alipata
 * @since Alipata 1.0
 */

get_header(); ?>

	<div class="SliderArea">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                   $i=0;
                   $slider = array('post_type'=>'slider','order'=>'ASC');
                   $slider_query = new wp_query($slider);
                   while ($slider_query->have_posts()): $slider_query->the_post();
                   $img_slider = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                ?>
                <div class="item <?php if($i == 0) { echo 'active';}?>">
                    <img src="<?php echo get_template_directory_uri();?>/images/Slider-1.png" alt="Los Angeles">
                    <div class="Captions">
                        <h2 class="animate fadeInUp" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s"><?php the_title(); ?></h2>
                        <?php the_content();?>
                    </div>
                </div>
                <?php $i++; endwhile; wp_reset_query();?>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-menu-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-menu-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <section>
        <div class="IconArea">
            <div class="container">
                <div class="row">
                    <?php while(have_rows('icon_area')): the_row(); ?>
                    <div class="col-sm-4">
                        <div class="Icons">
                            <figure><img src="<?php the_sub_field('icon');?>"></figure>
                            <h3><?php the_sub_field('heading');?></h3>
                            <p><?php the_sub_field('content');?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="CategoryArea">
            <div class="container">

                <div class="CategoryHead">
                    <?php the_field('featured_categories');?>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="CategoryBox">
                            <img src="<?php echo get_template_directory_uri();?>/images/Category-1.jpg">
                            <a href="<?php echo get_home_url();?>/product-category/bags/">Bags </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="CategoryBox m_bottom30">
                            <img src="<?php echo get_template_directory_uri();?>/images/Category-2.jpg">
                            <a href="<?php echo get_home_url();?>/product-category/shoes/">Shoes </a>
                        </div>
                        <div class="CategoryBox">
                            <img src="<?php echo get_template_directory_uri();?>/images/Category-3.jpg">
                            <a href="<?php echo get_home_url();?>/product-category/women/">Women </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="CategoryBox">
                            <img src="<?php echo get_template_directory_uri();?>/images/Category-4.jpg">
                            <a href="<?php echo get_home_url();?>/product-category/watches/">Watch </a>
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
                    <h3><span> Our</span> Products</h3>
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
                            $product_image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_query->post->ID ), 'single-post-thumbnail' );
                            ?>
                            
                            <div class="item">
                                <?php alipata_wc_loop_product_thumbnail(); ?>
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
            <span class="Discount"><?php the_field('discount_text');?></span>

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-6 padding_none">
                        <div class="SaleLeft" style="background-image: url(<?php the_field('discount_image_left');?>);">
                            <?php the_field('discount_left');?>
                            <a href="<?php the_field('link_url');?>">Shop All Jacket <i class="fa fa-angle-right " aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="col-sm-6 padding_none">
                        <div class="SaleLeft SaleRight" style="background-image: url(<?php the_field('discount_image_right');?>);">
                            <?php the_field('discount_right');?>
                            <a href="<?php the_field('shop_url');?>">Shop All Jacket <i class="fa fa-angle-right " aria-hidden="true"></i></a>
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
                    <h3><span> Our</span> Products</h3>
                    <p>Include all products updated are the most customer choice of the week!</p>
                </div>

                <div class="ProductBody">
                    <?php
                         $product = array(
                        'post_type'=>'product',
                        'order'    =>'ASC',
                        'showposts'=>8
                    );
                    $pro_query = new wp_query($product);
                    while($pro_query->have_posts()): $pro_query->the_post();
                    $pro_image = wp_get_attachment_image_src( get_post_thumbnail_id( $pro_query->post->ID ), 'single-post-thumbnail' );
                    ?>
                    <div class="col-sm-3">
                         <?php alipata_wc_loop_product_thumbnail(); ?>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="NewsletterArea" style="background-image: url(<?php echo get_template_directory_uri();?>/images/Newsletter.jpg);">
            <h5>Connect to Basel & Co.</h5>
            <h3>Join Our Newsletter</h3>
            <p>Hey you, sign up it only takes a second to be the first to
                <br> find out about our latest news and promotions…</p>
            <?php echo do_shortcode('[mc4wp_form id="106"]');?>
        </div>
    </section>

    <section>
        <div class="tradeService">
            <div class="container">
                <div class="row">
                    <div class="tradeHead">
                        <h3><span>Trade</span> Services</h3>
                        <p>Our trade services help ensure that your purchases are protected.</p>

                    </div>

                    <div class="TradesServicesss">

                        <div class="col-sm-6">
                            <div class="tradeCard">
                                <div class="imgArea">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade-bg1.png">
                                    </figure>
                                    <div class="contentFront">
                                        <p>Trade Assurance is a free order protection by Obecks.com</p>
                                    </div>
                                    <div class="contentOverlay">
                                        <h4>Benefits</h4>
                                        <ul>
                                            <li>On-time shipping</li>
                                            <li>Quality protection</li>
                                        </ul>
                                        <a href="#">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="contentArea">
                                    <div class="left-text">
                                        <h3>Trade Assurance</h3>
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
                        <div class="col-sm-6">
                            <div class="tradeCard">
                                <div class="imgArea">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade-bg2.png">
                                    </figure>
                                    <div class="contentFront">
                                        <p>Trade Assurance is a free order protection by Obecks.com</p>
                                    </div>
                                    <div class="contentOverlay">
                                        <h4>Benefits</h4>
                                        <ul>
                                            <li>Free to apply</li>
                                            <li>Competitive rates</li>
                                            <li>No early repayment fee</li>
                                        </ul>
                                        <a href="#">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="contentArea">
                                    <div class="left-text">
                                        <h3>Pay Later</h3>
                                        <p>FINANCING SOLUTION</p>
                                    </div>
                                    <div class="right-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade2.PNG">
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="tradeCard">
                                <div class="imgArea">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade-bg1.png">
                                    </figure>
                                    <div class="contentFront">
                                        <p>Trade Assurance is a free order protection by Obecks.com</p>
                                    </div>
                                    <div class="contentOverlay">
                                        <h4>Benefits</h4>
                                        <ul>
                                            <li>On-time shipping</li>
                                            <li>Quality protection</li>
                                        </ul>
                                        <a href="#">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="contentArea">
                                    <div class="left-text">
                                        <h3>Trade Assurance</h3>
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
                        <div class="col-sm-4">
                            <div class="tradeCard">
                                <div class="imgArea">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade-bg2.png">
                                    </figure>
                                    <div class="contentFront">
                                        <p>Trade Assurance is a free order protection by Obecks.com</p>
                                    </div>
                                    <div class="contentOverlay">
                                        <h4>Benefits</h4>
                                        <ul>
                                            <li>Free to apply</li>
                                            <li>Competitive rates</li>
                                            <li>No early repayment fee</li>
                                        </ul>
                                        <a href="#">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="contentArea">
                                    <div class="left-text">
                                        <h3>Pay Later</h3>
                                        <p>FINANCING SOLUTION</p>
                                    </div>
                                    <div class="right-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade2.PNG">
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="tradeCard">
                                <div class="imgArea">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade-bg3.png">
                                    </figure>
                                    <div class="contentFront">
                                        <p>Trade Assurance is a free order protection by Obecks.com</p>
                                    </div>
                                    <div class="contentOverlay">
                                        <h4>Benefits</h4>
                                        <ul>
                                            <li>On-time shipping</li>
                                            <li>Quality protection</li>
                                        </ul>
                                        <a href="#">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="contentArea">
                                    <div class="left-text">
                                        <h3>Inspection solution</h3>
                                        <p>INSPECTION</p>
                                    </div>
                                    <div class="right-icon">
                                        <img src="<?php echo get_template_directory_uri();?>/images/trade3.PNG">
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
