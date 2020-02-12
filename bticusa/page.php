<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <div class="Breadcrumb">
        <div class="container">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo get_site_url();?>"><i class="fa fa-home" aria-hidden="true"></i>
                Home</a></span> <span><?php the_title();?></span></p>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
    </div>
    
   
	
<section>
    <div class="container">
        <div class="row">
            <?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
