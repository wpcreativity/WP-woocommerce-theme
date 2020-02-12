<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>
      <?php
        wp_title('|', 'right', true);
        bloginfo('title');
      ?>
    </title>
	<link rel="stylesheet" href="<?php echo THEME_URI; ?>/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo THEME_URI; ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <!-- <script>
        var BASE_URL = 'https://www.materialtree.com/bengaluru/';
        var require = {
            "baseUrl": "https://static.materialtree.com/frontend/Codazon/fastest_bigmarket/en_US"
        };
    </script>
    <script  type="text/javascript"  src="https://static.materialtree.com/frontend/Codazon/fastest_bigmarket/en_US/requirejs/require.js"></script>-->
    <style>
        .aws-container {
            width: 400px;
        }
    </style>
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<a class="fz14 text-white" href="#"><i class="fa fa-phone mr-2"></i><?php echo ot_get_option('phone_number');?></a>
				</div>
				<div class="col-md-6 d-flex justify-content-end">
					<?php echo do_shortcode(' [xoo_el_action type="register" change_to="myaccount"]');?>
				    <?php echo do_shortcode('[xoo_el_action type="login" change_to="logout"]');?>
				</div>
			</div>
		</div>
	</div>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<a class="navbar-brand" href="<?php echo get_site_url();?>"><img src="<?php echo ot_get_option('logo');?>"></a>
				</div>
				<div class="col-md-9 d-flex justify-content-end align-items-center">
					<?php echo do_shortcode('[aws_search_form]');?>
				</div>
			</div>
			<div class="row menuarea mt-4">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-md p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                          $nav_menu = array(
                                'theme_location'  =>'primary',
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                      			'container_id'    => 'navbarNavDropdown',
                                'menu_class'      => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
                                'depth' => 5,
                                'walker' => new wp_bootstrap_navwalker()
                          );
                          wp_nav_menu($nav_menu);
                        ?> 
                        <!--<div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown link
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>
            
            
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
                                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Submenu action 2</a></li>
                                                <li><a class="dropdown-item" href="#">Another submenu action 2</a></li>
            
            
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
                                                        <li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
                                                        <li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                               
                            </ul>
                        </div>-->
                    </nav>
				</div>
			</div>
		</div>
	</header>