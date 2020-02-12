<?php
while(have_posts()): the_post();
/*Template Name: equipment */
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
        <div class="EquipmentArea">

            <div class="EquipmentForm">
                <?php the_content();?>
                <?php echo do_shortcode('[contact-form-7 id="957" title="Equipment Form"]');?>
            </div>

        </div>
    </section>

<?php endwhile; get_footer(); ?>