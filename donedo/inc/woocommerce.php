<?php
//outputs opening divs for the content
function donedo_wc_output_content_wrapper(){ ?>
	 <section>
	 	<div class="shopArea">
	 		<div class="container">
	 			<div class="row">
                    <div class="col-sm-10">
                        <div class="breadCrumbArea">
                            <?php donedo_woocommerce_breadcrumb();?>
                        </div>  
                    </div>
                </div>
	 			<div class="row"> 
<?php }

//outputs closing divs for the content
function donedo_wc_after_main_content(){
	echo '</div> </div> </div> </section>';
}

//REMOVE SHOP PAGE TITLE
function donedo_wc_show_page_title(){
	return;
}

// ADD NEW TITLE FOR PRODUCTS
function donedo_wc_loop_product_title(){
	//echo '<div class="item-title"> <a href="'. get_the_permalink() . '">' . get_the_title() . '</a> </div>';
}

// wooCommerce product item
function donedo_wc_loop_product_thumbnail(){ ?>

<a class="productCard" href="<?php the_permalink(); ?>">
    <figure>
        <?php woocommerce_template_loop_product_thumbnail(); ?>
    </figure>
    <h4><?php the_title();?></h4>
    <p>price: <?php woocommerce_template_loop_price(); ?></p>
</a> 

<?php }

// wooCommerce product Breadcrumb
function donedo_woocommerce_breadcrumb(){ ?>

<div class="row">
    <div class="col-sm-12">
        <div class="breadCrumbArea">
            <?php woocommerce_breadcrumb(); ?>
        </div>  
    </div>
</div> 

 <?php } 

 function donedo_single_product_page(){ ?>

<h1 class="prodName"><?php the_title();?></h1>
<h3 class="prodPrice">Price:<span><?php woocommerce_template_loop_price(); ?></span></h3>                            
 <?php the_excerpt();?> 
        <?php woocommerce_template_single_add_to_cart(); ?>
         

 <?php }


 function donedo_show_product_images(){ ?>

<div class="productImg">
    <span class="zoom" id="ex1" style="position: relative; overflow: hidden;">
        <?php woocommerce_show_product_images(); ?>
    </span>
</div>

 <?php }
 
 ?>