<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<style>
    .Breadcrumb {
    text-align: center;
    padding: 80px 40px;
    background-color: #0a0a0a;
    margin: 0 0 30px;
}
.Breadcrumb h1 {
    font-family: 'Merriweather';
    color: #fff;
    font-size: 35px;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 600;
    margin: 0 0 6px;
}
.Breadcrumb span {
    color: #fff;
    font-weight: 500;
    font-size: 14px;
    padding: 0 14px;
    position: relative;
}
.Breadcrumb span a {
    color: #a5a5a5;
}

</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="Breadcrumb">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <p class="breadcrumbs">
            <span class="mr-2">
                <a href="<?php bloginfo('url'); ?>">
                    Home</a>
            </span> / 
            <span><?php the_title(); ?></span>
        </p>
    </div>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'buildersbazar' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'buildersbazar' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
