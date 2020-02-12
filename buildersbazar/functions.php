<?php
include_once('wp_bootstrap_navwalker.php');
define('THEME_URI', get_template_directory_uri() );
define('THEME_PATH', get_template_directory() ); 

include( THEME_PATH . '/inc/theme-file.php');

/*---------------- ADD ACTION HOOKS -------------------*/ 

/*add_action( 'wp_enqueue_scripts', 'buildersbazar_script' ); */
add_action( 'after_setup_theme', 'buildersbazar_setup' );
add_action( 'init', 'slider_posttype' ); 
add_action( 'widgets_init', 'buildersbazar_widgets_init' );
add_action( 'wp_enqueue_scripts' , 'buildersbazar_script');



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 ); 
remove_action( 'woocommerce_after_main_content', 'woocommerce_after_main_content', 10 );
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 ); 
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 ); 
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action ( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);


add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 20;' ), 20 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );


add_action( 'woocommerce_before_main_content', 'buildersbazar_wc_output_content_wrapper', 10 ); 
add_action( 'woocommerce_after_main_content', 'buildersbazar_wc_after_main_content', 10 );
add_action( 'woocommerce_before_shop_loop_item', 'buildersbazar_loop_product_link_open', 10 );
add_action( 'woocommerce_before_single_product_summary', 'buildersbazar_product_single_sale_image', 20);
add_action( 'woocommerce_single_product_summary', 'buildersbazar_product_single_page', 10);


/*---------------- ADD FILTER HOOKS ----------------------*/ 
add_filter ('woocommerce_show_page_title', 'buildersbazar_wc_show_page_title');
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 7;
  return $cols;
}
add_action('wp_logout','logout_redirect');

function logout_redirect(){

    wp_redirect( home_url() );
    
    exit;

}
