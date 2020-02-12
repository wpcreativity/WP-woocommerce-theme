<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<title>
	    <?php wp_title('|', 'right', true); bloginfo('title');?>
	</title>
	
	
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="http://frcoder.in/Designteam/Bticusa/HTML/css/MyWooCommerce.css" rel="stylesheet">
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    
	<?php wp_head(); ?>

	
	
</head



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="UPHeader">
            <div class="container">
                <ul>
                    <li>Our Phone Number : <?php echo ot_get_option('phone_number');?></li>
                    <li>
                        <?php
                            if(is_user_logged_in()){ ?>
                                <a href="<?php echo get_home_url();?>/?customer-logout=true">Logout</a>
                            <?php }else{ ?>
                               <a href="<?php echo get_home_url();?>/my-account">Login</a>
                            <?php }
                        ?>
                    </li>
                    <li><a href="<?php echo get_home_url();?>/cart">Cart</a></li>
                    <li><a href="<?php echo get_home_url();?>/checkout">Checkout</a></li>
                    <li><a href="<?php echo get_home_url();?>/shop">Shop</a></li>
                    <li><a href="<?php echo get_home_url();?>//contact-us/">Contact Us</a></li>
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
                    <ul class="nav navbar-nav"> 
                        <li><a href="<?php echo get_home_url();?>/product-category/scba-cylinders">SCBA Cylinders</a></li>
                        <li><a href="<?php echo get_home_url();?>/product-category/scba-valves">Cylinder Valves </a></li>
                        <li><a href="<?php echo get_home_url();?>/product-category/scba-cylinder-accessories">Cylinder Accessories</a></li> 
                        <li><a href="<?php echo get_home_url();?>/media">Media</a></li> 
                    </ul>
                    <div class="HeadCart">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        <p>Shopping Cart</p>
                        <span><?php echo WC()->cart->get_cart_contents_count(); ?> Item(s) : $<?php echo WC()->cart->cart_contents_total ?></span>
                    </div> 
                </div>
            </div>
        </nav>
    </header>