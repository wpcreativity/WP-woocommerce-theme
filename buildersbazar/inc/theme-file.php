<?php
function buildersbazar_script(){

	//THEME'S CSS
	wp_enqueue_style( 'parent-style', get_template_directory_uri(). '/style.css');
	wp_enqueue_style( 'child-style', get_stylesheet_uri());
}

function buildersbazar_setup() {
	 
	load_theme_textdomain( 'buildersbazar' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support('woocommerce'); 
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'buildersbazar-featured-image', 2000, 1200, true );
	add_image_size( 'buildersbazar-thumbnail-avatar', 100, 100, true );
/*	add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );*/

	$GLOBALS['content_width'] = 525;

	register_nav_menus( array(
		'primary'    => __( 'Main Menu', 'buildersbazar' ),
		'social' => __( 'Social Links Menu', 'buildersbazar' ),
		'footer' => __( 'Footer Menu', 'buildersbazar' ),
	) ); 

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) ); 

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) ); 
	
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 250,
		'flex-width'  => true,
	) );

}

function buildersbazar_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Price Range', 'buildersbazar' ),
			'id'            => 'price-range',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'buildersbazar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'buildersbazar' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'buildersbazar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<span class="title widget-title">',
			'after_title'   => '</span>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'buildersbazar' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'buildersbazar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

function slider_posttype() {
 
$labels = array(

		'name' => __( 'Slider' ),
        'singular_name' => __( 'Menu Slider' ),
        'all_items' => __( 'All Slider'),
        'view_item' => __( 'View Slider'), 
        'add_new_item' => __( 'Add Slider '),
        'add_new' => __( 'Add Slider'),
        'edit_item' => __( 'Edit Slider'),
        'update_item' => __( 'Update Slider')         

);

$arys = array(

		'labels' => $labels,
		'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt',
        'rewrite' => array('slug' => 'slider'),
        'supports' => array( 'title', 'editor', 'excerpt','thumbnail')

);
register_post_type( 'slider', $arys);
}

flush_rewrite_rules();		// for single custom post page.




//woocommerce custom code here...
function buildersbazar_wc_output_content_wrapper(){ ?>
    <div class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center text-white">PRODUCTS</h1>
        </div>
      </div>
    </div>
    </div>
    <div class="section-2">
        <div class="container-fluid">
            <div class="row">
<?php }

function buildersbazar_wc_after_main_content(){
	echo '</div> </div> </div>';
}

function donedo_wc_show_page_title(){
	return;
}

function buildersbazar_loop_product_link_open(){ ?>
    
    <div class="product-image card d-flex flex-fill flex-column pb-3">
        <a class="productImage" href="<?php the_permalink(); ?>">
            <figure class="mb-0 position-relative">
                <?php woocommerce_template_loop_product_thumbnail(); ?>
            </figure>
        </a>
        <div class="product-details">
            <h1><?php the_title();?></h1>
            <?php
                global $product;
                $regular_price  = $product->get_regular_price();
                $sale_price     = $product->get_price();
            ?>
            <span class="product-mrp">M.R.P: ₹<?php echo $regular_price; ?></span>
            <span class="product-rupess"><b>₹<?php echo $sale_price; ?></b></span>
            <span class="product-bag">/<?php the_field('product_unit');?></span>
        </div>
        <div class="product-button">
            <button class="btn2 btn-btn-primary" type="button">GET FREE QUOTES</button>
        </div>
    </div>
    <div class="product-percentage">
        <span class="product-percent">
            <?php
                global $product;
                $regular_price      = $product->get_regular_price();
                $sale_price         = $product->get_price();
                $saving_price       = wc_price( $regular_price - $sale_price );
                $saving_percentage  = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ) . '%';
                echo $saving_percentage;
            ?>
        </span>
    </div>
<?php }

function buildersbazar_product_single_sale_image(){ ?>
    <div class="productImg">
        <span class="zoom" id="ex1" style="position: relative; overflow: hidden;">
            <?php woocommerce_show_product_images();?>
        </span>
    </div>
  
<?php }

function buildersbazar_product_single_page(){ ?>
<div class="summery-detail">
	    <?php 
	    $args = array(
        'delimiter' => '>',
        'before' => '<span class="breadcrumb-title">' . __( '', 'woothemes' ) . '</span>'
    );
    woocommerce_breadcrumb( $args );
 ?>
		<!--<a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Women</a><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Coats &amp;Jackets</a>-->
	<h1 class="mb-2"><?php the_title(); ?></h1>
</div>
<div class="product-detail">
	<div class="row">
		<div class="col-md-6">
			<p>SKU#:<span class="ml-2">
			    <?php 
			        global $product;
			        echo $sku = $product->get_sku();
			     ?></span>
			 </p>
		</div>
		<div class="col-md-6">
			<p class="in-stock text-right pr-3">
			    <?php 
			        global $product;
			        echo $stock_status = $product->get_stock_status();
			      ?>
			</p>
		</div>
	</div>
</div>
<div class="starArea">
	<?php woocommerce_template_single_rating(); ?>
</div>
<?php
    global $product;
    $regular_price  = $product->get_regular_price();
    $sale_price     = $product->get_price();
?>
<div class="mrp">
	M.R.P: <span>₹<?php echo $regular_price; ?></span>
</div>
<div class="dollar-rating">
	<p><span>₹<?php echo $sale_price; ?></span> / <span><?php the_field('product_unit');?></span></p>
</div>
<?php echo do_shortcode('[yith_compare_button]');?>
<div class="card1 mt-3">
	<div class="row">
		<div class="col-md-6">
		    <?php woocommerce_template_loop_add_to_cart(); ?>
		</div>
		<div class="col-md-6">
			<button class="text-center w-100 rounded-0 btn btn-outline-secondary">Get Free Quotes</button>
		</div>
	</div>
</div>
<div class="product-details mt-3">
	<span class="share-product">Share on:</span> <span><a href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></span> <span><a href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></span> <span><a href="#"><i aria-hidden="true" class="fab fa-pinterest"></i></a></span> <span><a href="#"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></span>
</div>
<p class="text-widget mt-3"><strong>Overview:</strong><?php the_content(); ?></p>
						
<?php }