<?php 
/**
 * The main template file 
 * Template Name: Blog
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

get_header();
get_template_part('breadcrumb'); 
?>  
    <section>
        <div class="postsArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <?php  
			                    $blog = array(

			                                'post_type' =>'post',
			                                'order' =>'ASC'

			                    );
			                    $blog_query = new wp_query($blog);
			                    while($blog_query->have_posts()): $blog_query->the_post();
			                        $blog_image = wp_get_attachment_url(get_post_thumbnail_id(),'large');

				                ?>
                        
                        <div class="posts">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="blogImg">
                                        <div class="grid">
                                            <figure class="effect-winston">
                                                <img src="<?php echo $blog_image; ?>" alt="blog">
                                                <figcaption>
                                                    <div class="date">
                                                        <span><?php the_time('j M'); ?></span>
                                                    </div>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                        <a href="#"><i class="fa fa-share" aria-hidden="true"></i></a>
                                                    </p>
                                                </figcaption>			
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="blogContent">
                                        <span>
                                             <?php
                                                global $post;
                                                $category_name = get_the_category($post->ID); 
                                                 //print_r ($category_name);  
                                                 foreach($category_name as $cat_id) {
                                                      echo $cat_id->cat_name. '  ';
                                                    } 
                                              ?> 
                                        </span>
                                        <h3><?php the_title();?></h3>
                                        <h5><span><?php the_time('M j, Y'); ?></span> | by <span><?php the_author(); ?></span></h5>
                                         <?php the_excerpt(); ?>
                                         <a href="<?php the_permalink();?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    
                    <?php get_sidebar();?>

                </div><!--
                
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="paginationArea">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>    
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

<?php get_footer(); ?>