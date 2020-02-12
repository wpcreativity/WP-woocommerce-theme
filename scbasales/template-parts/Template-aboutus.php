<?php
while(have_posts()): the_post();
/*Template Name: About Us*/
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
        <div class="AboutArea">
            <div class="container">
                <figure><img src="http://www.scbasalesco.com/wp-content/uploads/sites/15/2015/08/Profile-Pic.jpg"></figure>
                <h3> Kin J.Holman / Owner </h3>
                <?php the_content();?>
            </div>
        </div>
    </section>

<?php endwhile; get_footer();  ?>