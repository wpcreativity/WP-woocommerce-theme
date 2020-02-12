	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4 col-md col-12 col">
					<h5 class="bordz headin5_amrc col_white_amrc pt2">ABOUT US</h5><!--headin5_amrc-->
					<p class="mb10"><?php echo ot_get_option('about_us');?></p>
				</div>
				<div class=" col-sm-4 col-md col-6 col">
					<h5 class="bordz headin5_amrc col_white_amrc pt2">USEFUL LINKS</h5><!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
				<div class=" col-sm-6 col-md col-6 col">
					<h5 class="bordz headin5_amrc col_white_amrc pt2">FLICKER STREAM</h5>
					<div class="footer_ul_amrc" style="margin-left: 2em">
						<img src="<?php echo THEME_URI; ?>/images/first.jpg" width="30%">
						<img src="<?php echo THEME_URI; ?>/images/second.jpg" width="30%"> 
						<img src="<?php echo THEME_URI; ?>/images/fourth.jpg" width="30%"> 
						<img class="footer-images" src="<?php echo THEME_URI; ?>/images/fiveth.jpg" width="30%"> 
						<img class="footer-images" src="<?php echo THEME_URI; ?>/images/sixeth.jpg" width="30%"> 
						<img class="footer-images" src="<?php echo THEME_URI; ?>/images/seventh.jpg" width="30%">
					</div>
				</div>
				<div class=" col-sm-4 col-md col-12 col">
					<h5 class="bordz headin5_amrc col_white_amrc pt2">CONTACT US</h5><!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"></a>
							<p><strong>Address:</strong> <?php echo ot_get_option('address');?></p>
						</li>
						<li>
							<a href="#"></a>
							<p><strong>Fax:</strong> <?php echo ot_get_option('fax');?></p>
						</li>
						<li>
							<a href="#"></a>
							<p><strong>Email:</strong> <?php echo ot_get_option('email_address');?></p>
						</li>
						<li style="list-style: none">
							<a href="<?php echo ot_get_option('facebook');?>" target="_blank"><i class="socilz-icons fab fa-facebook-f"></i></a>
							<a href="<?php echo ot_get_option('twitter');?>" target="_blank"><i class="socilz-icons fab fa-twitter"></i></a>
							<a href="<?php echo ot_get_option('instagram');?>" target="_blank"><i class="socilz-icons fab fa-instagram"></i></a>
							<a href="<?php echo ot_get_option('youtube');?>" target="_blank"><i class="socilz-icons fab fa-youtube"></i></a>
						</li>
					</ul><!--footer_ul2_amrc ends here-->
				</div>
			</div>
		</div>
	</footer>

<section class="copy-right">
	<div class="container">
		<div class="row">
			<p>© <?php the_time('Y');?>. <a href="<?php bloginfo('url');?>"> <?php bloginfo('title');?></a> All Rights Reserved. </p> 
		</div>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="<?php echo THEME_URI; ?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="<?php echo THEME_URI; ?>/js/bootstrap-4-navbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src='https://development.frcoder.net/wordpress/donedonew/wp-content/themes/donedo/assets/js/jquery.zoom.js'></script>
    <script>
        $(document).ready(function(){
            $('#ex1').zoom();
        });
    </script>
  <script type="text/javascript">
  
jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});



</script>
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        300:{
            items:3
        },
        500:{
            items:3
        }
    }
	})
</script>

<script>
	$(document).ready(function(e){
	    $('.search-panel .dropdown-menu').find('a').click(function(e) {
	      e.preventDefault();
	    var param = $(this).attr("href").replace("#","");
	    var concept = $(this).text();
	    $('.search-panel span#search_concept').text(concept);
	    $('.input-group #search_param').val(param);
	  });
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
