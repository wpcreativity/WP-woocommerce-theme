    <footer>
        <div class="Footer">
            <div class="NewsLetter">
                <?php echo do_shortcode('[mc4wp_form id="154"]');?>
            </div>

            <div class="FooterMiddle">
                <div class="container">
                    
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="Foots">
                                    <h3>My Account</h3>
                                    <ul>
                                        <li><a href="<?php echo get_home_url();?>/my-account">My account</a></li>
                                        <li><a href="<?php echo get_home_url();?>/checkout">Checkout</a></li>
                                        <li><a href="<?php echo get_home_url();?>/my-account">Login</a></li>
                                        <li><a href="<?php echo get_home_url();?>/my-account/edit-address/">address</a></li>
                                        <li><a href="<?php echo get_home_url();?>/my-account/orders/">My Orders</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="Foots">
                                    <h3>Customer Service</h3>
                                    <ul>
                                        <li><a href="<?php echo get_home_url();?>">Home</a></li>
                                        <li><a href="<?php echo get_home_url();?>/shop">Shop</a></li>
                                        <li><a href="<?php echo get_home_url();?>">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="Foots">
                                    <h3>Product Categories</h3>
                                    <ul>
                                        <li><a href="<?php echo get_home_url();?>/product-category/scba-cylinders">SCBA Cylinders</a></li>
                                        <li><a href="<?php echo get_home_url();?>/product-category/scba-valves">Cylinder Valves </a></li>
                                        <li><a href="<?php echo get_home_url();?>/product-category/scba-cylinder-accessories">Cylinder Accessories</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="Foots">
                            <h3>Contact Us</h3> 
                            <p><i class="fa fa-map-marker"></i><?php echo ot_get_option('address');?></p>
                            <p><i class="fa fa-envelope-o"></i><?php echo ot_get_option('mail');?></p>
                            <p><i class="fa fa-phone"></i>Phone:<?php echo ot_get_option('phone');?></p>
                                    
                        </div>
                    </div>


                </div>
            </div>

            <div class="Copyright">
                <p>© 2019 BTIC bticusa.com - All Rights Reserved.</p>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrolla.jquery.min.js"></script>
    <script>
    
        $(document).ready(function() {
            $('.thumbnail').click(function(){
                $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                $('.modal-title').html(title);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({show:true});
            });
        });
    </script>
    <script>
        $('.animate').scrolla({
            mobile: false,
            once: false
        });

        $('.animate').scrolla({
            once: true
        });
    </script> 

	<script>
		 $(document).ready(function() {
            $("#Product").owlCarousel({
                margin: 20,
                nav: true,
                smartSpeed: 1500,
                autoplay: true,
                autoplayTimeout: 4500,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
	</script>

    <script>
         $(document).ready(function() {
            $("#Product1").owlCarousel({
                margin: 20,
                nav: true,
                smartSpeed: 1500,
                autoplay: true,
                autoplayTimeout: 4000,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script> 
    
    <script>
         $(document).ready(function() {
            $("#Product2").owlCarousel({
                margin: 20,
                nav: true,
                smartSpeed: 1500,
                autoplay: true,
                autoplayTimeout: 5000,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script> 

    <script type="text/javascript">
    	$(window).scroll(function() {
		    var scroll = $(window).scrollTop();
		    if (scroll >= 80) {
		        $(".Header").addClass("Fixed");
		    } else {
		        $(".Header").removeClass("Fixed");
		    }
		});
    </script>
    
     <script>
        $(document).ready(function(){
            $("#Register").click(function(){
                $(".RegisterForm").css("display", "block");
                $(".RegisterContent").css("display", "block");
                $(".LoginForm").css("display", "none");
                $(".LoginContent").css("display", "none");
            });
            $("#Login").click(function(){
                $(".LoginForm").css("display", "block");
                $(".LoginContent").css("display", "block");
                $(".RegisterForm").css("display", "none");
                $(".RegisterContent").css("display", "none");
            });
        });
    </script>

<?php wp_footer(); ?>
</body>
</html>
