<?php
//add first name and last name field to my account registration
function add_custom_field_woo_account_registration() { ?>
 
    <p class="form-row form-row-first">
        <label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </p>
 
    <p class="form-row form-row-last">
        <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
    </p>
 
    <div class="clear"></div>
 
<?php }

//Validate first name and last name field to my account registration
function validate_name_fields( $errors, $username, $email ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
    }
    return $errors;
}

//Save first name and last name field
function save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }
 
}

//outputs opening divs for the content
function scba_output_content_wrapper(){ ?>
    <section>
        <div class="ShopArea">
            <div class="container">
                <ul class="BreadCumb">
                    <?php woocommerce_breadcrumb(); ?>
                </ul>
    
<?php }

//outputs closing divs for the content
function scba_output_content_wrapper_end(){ ?>
            </div>
        </div>
    </section>
    
<?php }

//Remove shop page title
function scba_show_page_title(){
	return;
}

//product listing of shop page
function scba_product_listing(){ ?>
    <div class="Product">
        <figure>
            <?php woocommerce_template_loop_product_thumbnail(); ?>
        </figure>
        <figcaption>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
            <h5><?php woocommerce_template_loop_price(); ?></h5>
            <?php woocommerce_template_loop_add_to_cart(); ?>
        </figcaption>
    </div>
<?php }


//Single product image
function scba_product_images(){ ?>
    <div class="DetailsLeft">
       <?php woocommerce_show_product_images(); ?>
    </div>
<?php }

//Single product details
function scba_product_details(){ ?>
    <div class="DetailsRight">
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
            
            <h3><?php global $product; echo $product->get_price_html(); ?></h3>
            <p><?php the_excerpt();?></p>
            <?php woocommerce_template_single_add_to_cart(); ?>
        </div>

        <div class="DetailsRightDown">
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
    </div>
<?php }




























?>