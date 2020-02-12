<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <div class="Breadcrumb">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo get_site_url();?>"><i class="fa fa-home" aria-hidden="true"></i>
 Home</a></span> <span><?php the_title();?></span></p>
    </div>
    
	<!--<header class="entry-header abc">
		
	</header>-->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	

</article><!-- #post-## -->
