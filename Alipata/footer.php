    <footer>
        <div class="UpFooter">
            <div class="container">
                <div class="col-xs-6 col-md-3">
                    <div class="Foots">
                        <?php dynamic_sidebar('footer-1');?>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="Foots">
                        <?php dynamic_sidebar('footer-2');?>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
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

                <div class="col-xs-6 col-md-3">
                    <div class="Foots">
                        <h2>From the Facebook</h2>
                        <div class="flickr">
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/imges-1.jpg" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/imges-2.jpg" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/imges-3.jpg" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/imges-4.jpg" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/imges-5.jpg" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/imges-6.jpg" alt=""></a>
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

<?php wp_footer(); ?>

</body>
</html>
