<?php 
/**
 * The main template file 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage donedo
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- CONTAIN START-->
<section>
	<div class="cartArea">
	    <div class="container">
		        <div class="row">
				    <?php
				      if ( have_posts() ) : 
				        while ( have_posts() ) : the_post(); ?>

				    <div class="col-sm-12">
				      <?php the_content(); ?>
				    </div>
				  <?php endwhile; endif; ?>
			  </div>
		</div>   
	</div>
</section>

<?php get_footer(); ?>