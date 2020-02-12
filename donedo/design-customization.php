<?php 
/**
 * The main template file 
 * Template Name: design-customization
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
<style>
    .conatiner{}

    .conatiner h1 {
        font-size: 26px;
        text-transform: uppercase;
        font-weight: 500;
        color: #000;
        margin: 0 0 0px 0px;
        border-top: 1px solid #ddd;
        padding: 20px 0 20px 50px;
        font-family: Roboto;
        letter-spacing: 0.8px;
    }
</style>

<section>
    <div class="blog-bg">
        <div class="blogTop">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</section>
<!--
<section>
    <div class="conatiner">
        <h1>Customize your product</h1>
        <iframe src="http://development.frcoder.com/donedonew/design-editor/" style="width:100%;height:820px;border:none;"></iframe>
    </div>
</section>-->
<section>
    <div class="conatiner">
        <h1>Customize your product</h1>
        <object data="http://development.frcoder.com/donedonew/design-editor" width="100%" height="650" type="text/html">
        </object>
    </div>
</section>
<?php get_footer(); ?>