<?php
//outputs opening divs for the content
function alipata_wc_output_content_wrapper(){ ?>
    <section>
    <div class="ShopArea">
    <div class="container">
    <ul class="BreadCumb">
    <?php woocommerce_breadcrumb();?>
    </ul>
<?php }

//outputs closing divs for the content
function alipata_wc_after_main_content(){
	echo '</div> </div> </section>';
}

//REMOVE SHOP PAGE TITLE
function alipata_wc_show_page_title(){
	return;
}

// wooCommerce product item
function alipata_wc_loop_product_thumbnail(){ ?>

	<div class="Product">
        <figure>
            <?php woocommerce_template_loop_product_thumbnail(); ?>
            <ul>
                <li><a href="<?php echo get_home_url();?>/wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a href="#" class="yith-woocompare-open"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
            </ul>
        </figure>
        <figcaption>
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            <h4>US <?php woocommerce_template_loop_price(); ?> / Unit</h4>
            <?php echo do_shortcode('[yith_compare_button]');?>
            <?php woocommerce_template_loop_rating(); ?>
        </figcaption>
    </div>

<?php }

//Product Description Page
function alipata_single_product_page(){ ?>
<div class="DetailsRightTop">
    <h1><?php the_title();?></h1>
    <h6>
        <span>
            <?php global $product; echo $product->get_average_rating();?>
            <i class="fa fa-star" aria-hidden="true"></i> 
        </span>
        <a>
            <?php global $product; echo $product->get_reviews_allowed();?> Ratings &amp; 
            <?php global $product; echo $product->get_review_count();?> Reviews
        </a> 
    </h6>
    <h3><?php woocommerce_template_loop_price(); ?></h3>
    <p><?php the_excerpt();?></p><div class="Quantity">
        <?php woocommerce_template_single_add_to_cart();?> 
    </div>

</div>
<div class="DetailsRightDown">
    <p><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?></p>
    <p><?php echo do_shortcode('[yith_compare_button]');?></p>
     
    <p><span>SKU :</span>
        <?php global $product;
            echo $product->get_sku();
        ?>
    </p>
    <p>
    <?php
    global $post, $product;
    echo $product->get_categories( ', ', '<span class="posted_in" style="font-size: 15.5px;">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?>
    </p>
    <p><span>Stock Status :</span>
    <?php
        global $product;
    echo  $product->get_stock_status();
    ?>
    </p>
</div>
 <?php }
 
//Product description image 
function alipata_show_product_images(){ ?>

<div class="wrapper">
     <?php woocommerce_show_product_images(); ?>
</div>

 <?php }