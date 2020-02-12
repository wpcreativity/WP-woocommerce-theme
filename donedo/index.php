<?php 
/**
 * The main template file 
 * Template Name: Front Page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *trending
 * @package WordPress
 * @subpackage donedo
 * @since 1.0
 * @version 2.1
 */

get_header(); ?>


	<section>
        <div class="gridArea">
            <div class="container">
                <div class="row GridProduct">
                    <?php 
                        $product_list = array(
                            'post_type'=>'product',
                            'product_cat' => 'amazon-affiliate-marketing',
                            'order'    =>'ASC'
                        );
                        $product_query = new wp_query($product_list);
                        while($product_query->have_posts()): $product_query->the_post();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_query->post->ID ), 'single-post-thumbnail' );
                    ?> 
                        <div class="Category"> 
                            <figure><img src="<?php  echo $image[0]; ?>" class="img-responsive"></figure>
                            <a href="<?php the_permalink(); ?>">
                            <div class="Overlay">
                                <div class="OverlayContent">
                                    <p>Product Info</p>
                                </div>
                            </div>
                            </a>
                        </div> 
                    <?php endwhile; wp_reset_query(); ?> 
                    
                    <div class="clear"></div>
                </div>
                
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    
    <section>
        <div class="trending">
            <div class="container">
                
                    <div class="col-sm-10 offset-sm-1 padding_none">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="title">Trending <span>Now</span></h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="trending1">
                                    <iframe width="100%" height="258" src="<?php the_field('youtube_link_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="trending2">
                                    <div class="grid">
                                        <figure class="effect-selena">
                                            <img src="<?php the_field('section_image'); ?>" alt="img10">
                                            <figcaption>
                                                <?php the_field('section_content'); ?>
                                                <a href="<?php the_field('link_url'); ?>">View more</a>
                                            </figcaption>			
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
    
    <section>
        <div class="newsletter">
            <div class="container">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="row">
                            <div class="col-sm-6 padding_none">
                                <div class="newsContent">
                                    <h3>Newsletter<span></span></h3>
                                    <?php the_field('newsletter_content'); ?>
                                    
                                </div>    
                            </div>
                            <div class="col-sm-6 padding_none">
                                <div class="newsForm">
                                    <?php echo do_shortcode('[mc4wp_form id="91"]');?>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
        </div>
    </section>

<?php get_footer(); ?>