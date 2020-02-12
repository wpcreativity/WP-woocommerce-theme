<?php

//Remove shop page title
function btic_show_page_title(){
	return;
}

//outputs opening divs for the content
function btic_output_content_wrapper(){ ?>
    <section>
    	<div class="BreadcrumArea">
    		<div class="container">
    			<ul>
    				<?php woocommerce_breadcrumb(); ?>
    			</ul>
    		</div>
    	</div>
    </section>
    <section>
    	<div class="ShopArea">
    		<div class="container">
    		    <div class="row">
    
<?php }

//outputs closing divs for the content
function btic_output_content_wrapper_end(){ ?>
                </div>
            </div>
        </div>
    </section>
    
<?php }


//product listing
function bticusa_product_listing(){ ?>
<div class="ProductBox">
    <figure><?php woocommerce_template_loop_product_thumbnail(); ?></figure>
    <figcaption> 
        <h4>
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </h4>
        <h5>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </h5>
        <h6><?php woocommerce_template_loop_price(); ?></h6>
        <ul>
            <li><a href="#" title="Wishlist"><i class="fa fa-heart"></i></a></li>
            <li><?php woocommerce_template_loop_add_to_cart(); ?></li>
            <li><a href="#" title="Compare"><i class="fa fa-signal"></i></a></li>
        </ul>
    </figcaption>
</div>
    
<?php }

//Single product image
function bticusa_product_images(){ ?>
    <div class="product-image">
        <?php woocommerce_show_product_images(); ?>
    </div>
<?php }

//Single product details
function bticusa_product_details(){ ?>
    <div class="product-image">
		<p class="para1"><?php the_title();?></p>
		<p class="star2">
                <?php global $product; echo $product->get_reviews_allowed();?> Ratings &amp; 
                <?php global $product; echo $product->get_review_count();?> Reviews
            </a>
		 </p>
		<p class="dollar1"><?php global $product; echo $product->get_price_html(); ?></p>
		<p class="words1"><?php the_excerpt();?></p>
	</div>
	<div class="row">
	    <?php woocommerce_template_single_add_to_cart(); ?>
	</div>
	<div class="status">
		<br>
		<b>SKU :</b><br><?php global $product;
                    echo $product->get_sku();
                ?>
		<br>
		<?php
            global $post, $product;
            echo $product->get_categories( ', ', '<span class="posted_in" style="font-size: 15.5px;font-weight:bold;">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?><br>
		<br>
		<b>Stock Status :</b> <?php global $product; echo  $product->get_stock_status(); ?><br>
	</div>
<?php }
?>