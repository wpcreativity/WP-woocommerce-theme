<?php 
/*Template Name: Contact us*/
get_header(); ?>

<div class="contact-wrap-1">
         <div class="container">
             <div class="contact-head1">
                 <h3><?php the_title();?></h3>
    				<p class="para-3"><a class="in2" href="<?php echo get_home_url(); ?>">
    				    <span>
    				        <i class="fa fa-home"></i></span> Home</a> &nbsp;<span>
    				        <i class="fa fa-angle-double-right"></i></span> &nbsp;<span><?php the_title();?>
    				    </span>
    				</p>
             </div>
         </div>
     </div>
     <div class="contact-page1">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-data1">
                         <h3 class="heading1">GET IN TOUCH WITH US</h3>
                         <div id="usrform">
                             <?php echo do_shortcode('[contact-form-7 id="283" title="Contact form 1"]'); ?>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-data">
                         <h3 class="heading1">INFORMATION ABOUT US </h3>
                         <p>Consectetur aliquet a erat per sem nisi leo placerat dui a adipiscing a sagittis vestibulum. Sagittis posuere id nam quis vestibulum faucibus a est tristique ridiculus sed.</p>
                         <br><br>
                         <p>Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci non aliquet enim.</p>

                     </div>
                     <h3 class="heading2">CONTACT US</h3>
                     <div class="row">
                         <div class="col-md-6 col-sm-6 col-xm-6">
                             <div class="ic2">
                                 <p><span><i class="fa fa-envelope ic1" style="float: left; font-size: 30px;"></i></span>Tel: <?php echo ot_get_option('phone');?><br><?php echo ot_get_option('mail');?></p>
                             </div>
                         </div>
                         <div class="col-md-6 col-sm-6 col-xm-6">
                             <div class="ic2">
                                 <p><span><i class="fa fa-clock-o ic1" style="float: left; font-size: 30px;"></i></span><?php echo ot_get_option('support');?></p>
                             </div>
                         </div>
                     </div>
                     <div class="row top1">
                         <div class="col-md-6 col-sm-6 col-xm-6">
                             <div class="ic2">
                                 <p><span><i class="fa fa-paper-plane ic1" style="float: left; font-size: 30px;"></i></span><?php echo ot_get_option('address');?></p>
                             </div>
                         </div>
                         <div class="col-md-6 col-sm-6 col-xm-6">
                             <div class="ic2">
                                 <p><span><i class="fa fa-rocket ic1" style="float: left; font-size: 30px;"></i></span><?php echo ot_get_option('free_standard');?></p>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="icon-box1">
                             <a href="<?php echo ot_get_option('facebook');?>" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                             <a href="<?php echo ot_get_option('twitter');?>" target="_blank"><span><i class="fa fa-twitter f1"></i></span></a>
                             <a href="<?php echo ot_get_option('instagram');?>" target="_blank"><span><i class="fa fa-instagram f3"></i></span></a>
                             <a href="<?php echo ot_get_option('linkedin');?>" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <div class="contact-page2">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.8004207654617!2d-0.14300418411204513!3d51.516877417831004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b2a82ccc949%3A0x859349e8fcb8b019!2sTextile+House%2C+20+Margaret+St%2C+Fitzrovia%2C+London+W1W+8RS%2C+UK!5e0!3m2!1sen!2sin!4v1559803757657!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
         <div class="position-box">
             <div class="position-box1">
                 <h3>VISIT OUR NEW<br> STORE<br>
                     IN Lindon</h3>
                 <p><span><i class="fa fa-map-marker"></i></span>162S 1900W Lindon,<br>
                     UT 84042</p>

             </div>

         </div>
     </div>

<?php get_footer(); ?>