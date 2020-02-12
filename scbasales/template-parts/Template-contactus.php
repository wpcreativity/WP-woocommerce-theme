<?php
while(have_posts()): the_post();
/*Template Name: Contact Us*/
get_header();
?>
    <section>
        <div class="BannerArea">
            <div class="container">
                <h1><?php the_title();?></h1>
                <ul>
                    <li><a href="<?php bloginfo('url');?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li class="active"><a href="#"><?php the_title();?></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="ContactArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="ContactLeft">
                           
                            <ul>
                                <h5>Contact Us</h5>
                                <?php the_content();?>
                                <li>
                                    <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Address: <?php echo ot_get_option('address');?>
                                </li>

                                <li>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i></span> Toll-Free Phone: <?php echo ot_get_option('toll_free_phone');?>
                                </li>

                                <li>
                                    <span><i class="fa fa-phone" aria-hidden="true"></i></span> Direct Phone: <?php echo ot_get_option('direct_phone');?>
                                </li>

                                <li>
                                    <span><i class="fa fa-fax" aria-hidden="true"></i></span> Toll-Free Fax: <?php echo ot_get_option('toll_free_fax');?>
                                </li>

                                <li>
                                    <span><i class="fa fa-envelope" aria-hidden="true"></i></span> Email :
                                    <a href="mailto:sales@scbasalesco.com"> <?php echo ot_get_option('email');?></a>
                                </li> 
                            </ul>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="ContactRight">
                            <h3>Leave a Message</h3>
                            <h4>If you have any problems or queries please complete the form below.</h4>
                            <?php echo do_shortcode('[contact-form-7 id="932" title="Contact Form"]');?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="MapArea">
            <div class="container-fluid">
                <?php
                 while(have_rows( 'map')): the_row(); ?>
                <div class="col-sm-4">
                    <div class="Map">
                        <h3><?php the_sub_field("map_heading");?></h3>
                        <p><?php the_sub_field("map_address");?></p>
                        <iframe src="<?php the_sub_field("map_location");?>" allowfullscreen></iframe>
                    </div>
                </div>
               <?php  endwhile;?>
            </div>
        </div>
    </section>

<?php endwhile; get_footer(); ?>