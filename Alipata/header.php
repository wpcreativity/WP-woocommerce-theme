<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
    	<?php 
    	wp_title('|', 'right', true);
    	bloginfo('title');
    	?>	
    </title>

    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/Favicon.png" sizes="16x16">

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
    <!--<link href="<?php echo get_template_directory_uri();?>/css/mywoocommerce.css" rel="stylesheet">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

	<?php wp_head(); ?>
	
	   
    <link rel="stylesheet" href="http://frcoder.in/Designteam/Alipata/HTML/css/mywoocommerce.css">
	
</head>

<body <?php body_class(); ?>>

	<header>
	    <div class="Header">
            <div class="UPHeader">
                <div class="container">
                    <ul>
                        <li>Our Phone Number : <?php echo ot_get_option('phone_number');?></li>
                        <li><a href="<?php echo get_home_url();?>/cart">Cart</a></li>
                        <li> <?php echo do_shortcode('[xoo_el_action type="register" change_to="myaccount"]'); ?></li>
                        <li><a href="<?php echo get_home_url();?>/shop">Shop Now</a></li>
                        <li><a href="<?php echo get_home_url();?>/wishlist">Wistlist</a></li>
                    </ul>
                </div>
            </div>
    
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="Logo" href="<?php echo get_home_url();?>"><img src="<?php echo ot_get_option('logo');?>"></a>
                    </div>
    
                    <div class="collapse navbar-collapse" id="Menu">
                        <?php 
                            $nav_menu = array(
                                'theme_location' =>'primary',
                                'menu'            => 'main-Menu',
                                'container'       => false,
                                'menu_class'      => '',  
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
                                'depth' => 5,
                                'walker' => new wp_bootstrap_navwalker()
                            );
                            wp_nav_menu( $nav_menu);
                        ?> 
                        <div class="HeadCart">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <p>Shopping Cart</p>
                            <span><?php echo WC()->cart->get_cart_contents_count(); ?> Item(s) : $<?php echo WC()->cart->cart_contents_total ?></span>
                        </div>
    
                        <ul class="nav navbar-nav navbar-right">
                            <li><?php echo do_shortcode('[xoo_el_action type="login" change_to="logout"]'); ?></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
