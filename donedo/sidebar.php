<div class="col-sm-4">
    <div class="sidebar">
        <div class="category">
            <h4>Category</h4>
            <ul> 
                <li><a href="#">Fashion <span>(9)</span></a></li>
                <li><a href="#">Lifestyle <span>(7)</span></a></li>
                <li><a href="#">Music <span>(5)</span></a></li>
                <li><a href="#">Travel <span>(3)</span></a></li>
            </ul>
        </div>
        
        <div class="recent">
            <h4>Recent News</h4>
            <ul>
                <?php  
                    $blog = array(

                                'post_type' =>'post',
                                'order' =>'ASC',
                                'showposts'=>'3'

                    );
                    $blog_query = new wp_query($blog);
                    while($blog_query->have_posts()): $blog_query->the_post();
                        $blog_image = wp_get_attachment_url(get_post_thumbnail_id(),'large');

	                ?>
	                
                <li>
                    <figure>
                        <img src="<?php echo $blog_image; ?>">
                    </figure>
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    <span><?php the_time('F j, Y'); ?></span>
                </li>
                
                 <?php endwhile; wp_reset_query(); ?>
            </ul>
        </div>
        
        <div class="gallery">
            <h4>Gallery</h4>
            <div class="grid">
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/1.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/1.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Home_Full_Grid/Home8_portfolio_08.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Home_Full_Grid/Home8_portfolio_08.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/2.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/2.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                <a href="http://template.helloxpart.com/picasso/picasso/images/Home_Portfolio/portfolio_two_06.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Home_Portfolio/portfolio_two_06.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Home_Portfolio/portfolio_two_05.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Home_Portfolio/portfolio_two_05.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Home_Portfolio/portfolio_two_10.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Home_Portfolio/portfolio_two_10.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                
                <a href="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/7.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/7.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/6.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/6.jpg" alt="Ken Spillman with Kids" />
                </a>
                
                 <a href="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/8.jpg" data-lightbox="example-set">
                        <img class="img-responsive" src="http://template.helloxpart.com/picasso/picasso/images/Onepage_freelacer/Portfolio/8.jpg" alt="Ken Spillman with Kids" />
                </a>
            </div>
        </div>
        
    </div>
</div>