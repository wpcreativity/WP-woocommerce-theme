<?php 
get_header();
get_template_part('breadcrumb');
$blog_image = wp_get_attachment_url(get_post_thumbnail_id(),'large');
while(have_posts()): the_post();
 ?>
 
    <section>
        <div class="postsArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="blogDetails">
                            <div class="topInfo">
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
                            </div>
                            
                            <figure>
                                <img src="<?php echo $blog_image; ?>">
                            </figure>
                             <?php the_content(); ?>
                            <ul class="social_list">
                                <li>Share :</li>
                                <li><a href="https://www.instagram.com/donedo/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCRuz8GsQD5u5Mm8rOlLLAqw" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/theDONEDO" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <?php get_sidebar(); ?>

                </div>                
            </div>
        </div>
    </section>

<?php get_footer();
endwhile;
?>