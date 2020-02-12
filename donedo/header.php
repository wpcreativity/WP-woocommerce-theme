<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
  <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <title><?php wp_title('|', 'right', true); bloginfo('title');?></title> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800" rel="stylesheet"> 
    <link href="http://frcoder.in/Designteam/Donedo/MyWocommerce.css" rel="stylesheet">
    <?php wp_head();?>
</head>
<style>
.topArea a.logo {
    display: block;
    width: 170px;
    margin: auto;
}
    .valiwrap {
    margin-top: 30px;
}
a.valibtn {
    border-radius: 0px;
    outline: 0;
    font-size: 15px;
    background: #232323;
    color: white;
    padding: 10px 40px;
    text-transform: uppercase;
    border: 2px solid #232323;
    transition: all 0.5s ease-in-out;
    letter-spacing: 0.5px;
    margin: 0 0 20px;
}
a.valibtn:hover {
    background: #fff;
    color: #232323;
}
a.lumise-button.button.alt {
    border-radius: 0px;
    outline: 0;
    font-size: 15px;
    background: #232323;
    color: white;
    /* font-weight: bolder; */
    padding: 10px 40px;
    text-transform: uppercase;
    border: 2px solid #232323;
    transition: all 0.5s ease-in-out;
    letter-spacing: 0.5px;
    margin: 0 0 20px;
}
a.lumise-button.button.alt:hover {
    background: #fff;
    color: #232323;
}
</style>
<body>
    <header>
        <div class="topArea">
            <button id="Toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <a href="<?php bloginfo('url');?>" class="logo">
                <img src="<?php echo ot_get_option('logo');?>">
            </a>
            
            
            
        </div>
    </header>    
    
    
        <div class="header" id="myHeader">
            
            
          <nav class="navbar navbar-expand-lg justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php bloginfo('url');?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_home_url(); ?>/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_home_url(); ?>/contact">Contact</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_home_url(); ?>/shop">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_home_url(); ?>/design-customization">Prouct Customize</a>
                </li> 
                
                 <li class="nav-item">
                     <?php echo do_shortcode(' [wd-mini-cart] ') ?>
                </li>
                
                <?php if (is_user_logged_in()) : ?>
                    <li class="nav-item">
                      <a class="nav-link">Enjoy Shopping with us</a>
                    </li> 
                    <li class="nav-item"><a class="nav-link" href="<?php echo wp_logout_url(home_url()); ?>" >Logout</a></li>
                    <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_home_url(); ?>/my-account">Login / Signup </a></li>
                <?php endif;?> 
                 
                        
              </ul>
            </nav>
        </div>
    
    