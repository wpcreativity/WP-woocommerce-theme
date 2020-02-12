<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/Favicon.png" sizes="16x16">
	
	<title>
    	<?php 
    	wp_title('|', 'right', true);
    	bloginfo('title');
    	?>	
    </title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="http://frcoder.in/Designteam/SCBA/HTML/css/MyWooCommerce.css" rel="stylesheet">
  
  <!--  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    -->
    
	<?php wp_head(); ?>
</head>
<style>
    
    
  @media screen and (max-width: 767px) { 
  
  header .UPHeader ul li:first-child {
         margin-bottom: 22%;
          width: 100%;
              margin-top: 10%;
          font-size: 12px;
          float:inherit !important;
  }
    
    header .UPHeader ul {
    text-align: center;}
    
    
    header .UPHeader ul li {
    float: inherit !important;
     margin-left: 12px;
      font-size: 12px;
    }
    
    header .UPHeader .Logo {
    display: block;
    width: 105px;
    position: absolute;
    top: 48%;
    bottom: 0;
    margin: auto;
}

.CategoryArea .CategoryHead h3 {font-size:24px;}
header .UPHeader .Logo {width:85px;}

.SliderArea #myCarousel .carousel-inner .item .Captions h2{
        font-size: 30px;
    color:#e7e7e7;
}
        .SliderArea #myCarousel .carousel-inner .item .Captions p{
                font-size: 20px;
    margin-bottom: 10px;
 color:#e7e7e7;
        }
        
.SliderArea #myCarousel .carousel-inner .item .Captions {
            height:95px;
        }
  
  .SliderArea #myCarousel .carousel-inner .item .Captions h2:before {
    top: -65px;
    font-size: 45px;
    margin-top:10px;
  }
  
  .SliderArea #myCarousel .carousel-inner .item img {
 height:230px;
}

.SliderArea #myCarousel form {
    width: 100%;}
    
    .SliderArea #myCarousel form label {font-size:15px;}
    
    
    .NewsletterArea h3 {font-size:35px;}
    .NewsletterArea form {width:90%;    margin-top: 60px}
    
  .Foots{margin-bottom:40px !important;}
  
  .UpFooter .Foots ul li a {
    font-size: 7px !important;}
    
    .follow a {
    margin-right: 5px}
    
    .coloum-data1{width:40% !important;}
    
  .UpFooter .Foots h2{font-size:12px;}
  
  header .navbar .navbar-nav li {display: inherit;}
  
  #wpadminbar {position:fixed;}
  
  .SaleArea .SaleRight {padding:0;}

header .UPHeader ul li:first-child i {
    position: absolute;
      top: 11%;
    left: 47%;}
    
    header .UPHeader {
    padding: 30px 0 15px 0}
    
.content-area .site-main {padding:0 15px;}

.content-area .site-main h6 { font-size: 13px;
    line-height: 22px}
    
.entry-title{font-size:30px;padding-bottom: 10px}
 
  .breadcrumbs {margin:0 0 15px;}
  
 .SaleArea .SaleLeft:hover {
    padding: 50px 25px 100px 35px;
    transition: all 0.5s ease 0s;
} 

.SaleArea .SaleLeft{margin:25px;}

.SaleArea span.Discount{display:none;}

.SaleArea .SaleLeft a {
  
    padding: 9px 15px;
    display: block;
    width: 150px;
    text-align: center;
    font-size: 18px;
    box-shadow:none;
}


  }
  
  
</style>
<body <?php body_class(); ?>>
<header>
        <div class="UPHeader">
            <div class="container">
                <ul>
                    
                    <li><i class="fa fa-phone" aria-hidden="true"></i> US / Canada: <?php echo ot_get_option('phone_number');?></li>
                    
                    <li><a href="<?php echo get_home_url();?>/shop">Shop Now</a></li>
                    <li>
                        <?php
                            if(is_user_logged_in()){ ?>
                                <a href="<?php echo get_home_url();?>/?customer-logout=true">Logout</a>
                            <?php }else{ ?>
                               <a href="<?php echo get_home_url();?>/my-account">Login / Register</a>
                            <?php }
                        ?>
                    </li>
                    <li><a href="<?php echo get_home_url();?>/checkout">Checkout</a></li>                    
                    <li><a href="<?php echo get_home_url();?>/cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Cart</a></li>
                    </ul>
                 
                <a class="Logo" href="<?php echo get_home_url();?>"><img src="<?php echo ot_get_option('logo');?>"></a>
            </div>
        </div>

          <nav class="navbar navbar-inverse">
          <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Menu" aria-expanded="false" aria-expanded="true">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                    
                </div>

                <div class="collapse navbar-collapse" id="Menu" aria-expanded="true">
                    <ul class="nav navbar-nav">
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
                    </ul>
                </div>
            </div>
        </nav>

    </header>
