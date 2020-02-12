<?php
/*Template Name: Home*/
get_header();
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 p-0 m-0">
				<div class="carousel slide" data-ride="carousel" id="demo">
					<ul class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#demo"></li>
						<li data-slide-to="1" data-target="#demo"></li>
						<li data-slide-to="2" data-target="#demo"></li>
					</ul>
					
					<div class="carousel-inner">
						<?php
							$i =1;
	                		$sliderArys = array(
				                		    'post_type'=>'slider',
				                		    'order'=>'ASC'
	                		    		);
	                		$sliderQuery= new WP_Query($sliderArys);
	                		while($sliderQuery->have_posts()): $sliderQuery->the_post();
	                		$slider_image = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
	                	?>
						<div class="carousel-item <?php if($i==1){ echo "active";}?>">
							<img alt="Los Angeles" height="400" src="<?php echo $slider_image; ?>" width="100%">
							<div class="carousel-caption">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
						<?php $i++; endwhile; wp_reset_query(); ?>
					</div>

					<a class="carousel-control-prev" data-slide="prev" href="#demo">
						<i class="fa fa-angle-left"></i></a> <a class="carousel-control-next" data-slide="next" href="#demo">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //product slider -->

	<div class="container">
		<h3 class="popular text-center">NEW PRODUCT</h3>
		<div class="owl-carousel owl-theme">
			<?php
        		$productArys = array(
                		    'post_type'=>'product',
                		    'order'=>'ASC'
    		    		);
        		$productQuery= new WP_Query($productArys);
        		while($productQuery->have_posts()): $productQuery->the_post();
        		$product_image = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
        	?>
			<div class="item" id="<?php the_id(); ?>">
				<p class="percentage"> -
				    <?php 
                        $regular_price      = $product->get_regular_price();
                        $sale_price         = $product->get_price();
                        $saving_price       = wc_price( $regular_price - $sale_price );
                        $saving_percentage  = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ) . '%';
                        echo $saving_percentage;
                    ?>
				</p>
				<img src="<?php echo $product_image; ?>" alt="<?php the_title(); ?>">
				<span><?php the_title();?></span>
				<div class="row">
					<div class="col-sm-12 mt-2">
						<?php woocommerce_template_loop_price(); ?>
					</div>
					
				</div>
			</div>
			<?php $i++; endwhile; wp_reset_query(); ?>
		</div>
	</div>

	<!-- <div class="section-4"> -->
	<div class="container">
		<h3 class=" text-center">POPULAR CATEGORIES</h3>
		<div class="container-fluid" id="inventory">
			<div class="row">
				<?php

					$cat = get_terms('product_cat');
					/*echo "<pre>";
					print_r($cat);*/


					foreach ($cat as $product_cat) {
						$cat_name = $product_cat->name;
						$cat_slug = $product_cat->slug;
						$cat_id = $product_cat->term_id;
						$thumbnail_id = get_woocommerce_term_meta( $cat_id , 'thumbnail_id', true );
						$cat_image = wp_get_attachment_url( $thumbnail_id ); 

				?>
				<div class="col-sm-3 p-1">
					<div class="card">
						<img alt="<?php echo $cat_name; ?>" src="<?php echo $cat_image; ?>">
						<!-- <a class="btn view-btn" href="category/<?php echo $cat_slug; ?>"> -->
						<a class="btn view-btn" href="javascript:void(0);">
							<strong><?php echo $cat_name; ?></strong>
						</a>
						<!--<div class="ribbon">
							<span>Popular</span>
						</div>-->
					</div>
				</div>
				 <?php } ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
