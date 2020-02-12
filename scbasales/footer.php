    <footer>
        <div class="UpFooter">
            <div class="container">
                <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="Foots">
                        <h2>Information</h2>
                        <ul>
                            <li><a href="<?php echo get_home_url();?>/about-us">About us</a></li>
                            <li><a href="<?php echo get_home_url();?>/contact-us">Contact Us</a></li>
                            <li><a href="<?php echo get_home_url();?>/financing">SCBA Financing</a></li>
                            <li><a href="<?php echo get_home_url();?>/sell-your-equipment">Sell Your Equipment</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="Foots">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="<?php echo get_home_url();?>/product-category/scott-scba/">scott scba</a></li>
                            <li><a href="<?php echo get_home_url();?>/product-category/msa-scba/">msa scba</a></li>
                            <li><a href="<?php echo get_home_url();?>/product-category/survivair-scba/">survivair scba</a></li>
                            <li><a href="<?php echo get_home_url();?>/product-category/drager-scba/">dräger scba</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="Foots">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="<?php echo get_home_url();?>/cart">Cart</a></li>
                            <li><a href="<?php echo get_home_url();?>/checkout">Checkout</a></li>
                            <li><a href="<?php echo get_home_url();?>/my-account">My Account</a></li>
                            <li><a href="<?php echo get_home_url();?>/my-account/orders/">Order History</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3 coloum-data1">
                    <div class="Foots">

                        <div class="follow">
                            <h2>Follow us</h2>
                            <div class="follow">
                                <a href="<?php echo ot_get_option('facebook');?>" target="_blank"><i class="fa  fa-facebook"></i></a>
                                <a href="<?php echo ot_get_option('twitter');?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo ot_get_option('pinterest');?>" target="_blank"><i class="fa fa-pinterest"></i></a>
                                <a href="<?php echo ot_get_option('instagram');?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="<?php echo ot_get_option('youtube');?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="Copyright">
           <?php echo ot_get_option('copyright');?>
        </div>
    </footer>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/scrolla.jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
    
    <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
    
    <script>
        $('.animate').scrolla({
            mobile: false,
            once: false
        });

        $('.animate').scrolla({
            once: false
        });
    </script>


    <script>
        $(document).ready(function() {
            var owl = $('#Product');
            owl.owlCarousel({
                margin: 0,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 1000,
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
            })
        })
        
    </script>
    
   
    <!--<script type="text/javascript">
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 80) {
                $("header").addClass("Fixed");
            } else {
                $("header").removeClass("Fixed");
            }
        });
    </script>-->
    
    
    <!-- <script>
        $(document).ready(function(){
            $(".navbar-toggle").click(function(){
                $(".navbar-collapse").toggleClass("in");
            });
            $(".navbar-toggle").click(function(){
                $(".navbar-toggle").toggleClass("collapsed");
            });
        });
    </script> -->

<?php wp_footer(); ?>
</body>
</html>
