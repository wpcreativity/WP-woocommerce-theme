	<footer>
        <div class="footerArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <figure>
                            <img src="<?php echo ot_get_option('footer_logo');?>">
                        </figure>
                        <ul class="social_list">
                            <li><a href="<?php echo ot_get_option('facebook');?>" target="_blank">Facebook</a></li>
                            <li><a href="<?php echo ot_get_option('pinterest');?>" target="_blank">Pinterest</a></li>
                            <li><a href="<?php echo ot_get_option('youtube');?>" target="_blank">Youtube</a></li>
                            <li><a href="<?php echo ot_get_option('instagram');?>" target="_blank">Instagram</a></li>
                            <li><a href="<?php echo ot_get_option('twitter');?>" target="_blank">Twitter</a></li>
                        </ul>
                        <p class="copyrights"><?php echo ot_get_option('copyright');?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://github.com/sirxemic/jquery.ripples.git"></script>
        <script>
            $(document).ready(function(){
                $("#Toggle").click(function(){
                    $(".navbar").slideToggle();
                });
            });
    </script>
    
    <script src="<?php echo THEME_URI; ?>/assets/js/owl.carousel.js "></script>
    <script>
        $(document).ready(function() {
            $("#carousel").owlCarousel({
                margin: 0,
                nav: true,
                autoplay: true,
                autoplayTimeout: 4000,
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
                        items: 2
                    }
                }
            });
        });
    </script>

    <script src='<?php echo THEME_URI; ?>/assets/js/ripple.js'></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.contact-bg').ripples({
                dropRadius: 20,
                perturbance: 0.04,
                resolution:500,
            });
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="<?php echo THEME_URI; ?>/assets/js/counter.js"></script>
    <script src='<?php echo THEME_URI; ?>/assets/js/jquery.zoom.js'></script>
    <script>
        $(document).ready(function(){
            $('#ex1').zoom();
        });
    </script>

    <?php wp_footer();?>

</body>
</html>