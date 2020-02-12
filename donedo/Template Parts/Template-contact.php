<?php 
/**
 * The main template file 
 * Template Name: Contact
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

get_header(); ?>

	<section>
        <div class="contact-bg">
            <div class="contactArea">
                <h3 class="title">Contact Us</h3>
                <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?> 
                <?php endwhile; ?>
                <?php echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>