<?php 

/*Template Name: Media*/

get_header(); ?>
<style>
    .media-image.toprow {
    height: 462px;
    overflow: hidden;
    margin-bottom: 20px;
}
    .media-image.bottomrow {
    height: 242px;
    overflow: hidden;
    margin-bottom: 20px;
}
</style>
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
	<div class="media-wrap-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="media-image toprow"><img alt="f1" class="thumbnail" src="<?php echo get_home_url();?>/wp-content/uploads/2019/06/media-1.jpg" width="100%"></div>
				</div>
				<div class="col-md-4">
					<div class="media-image toprow"><img alt="f1" class="thumbnail" src="<?php echo get_home_url();?>/wp-content/uploads/2019/06/media-2.jpg" width="100%"></div>
				</div>
				<div class="col-md-4">
					<div class="media-image toprow"><img alt="f1" class="thumbnail" src="<?php echo get_home_url();?>/wp-content/uploads/2019/06/media-4.png" width="100%"></div>
				</div>
			</div>
			<div class="row pop-top">
				<div class="col-md-4">
					<div class="media-image bottomrow"><img alt="f1" class="thumbnail" src="<?php echo get_home_url();?>/wp-content/uploads/2019/06/media-3.png" width="100%"></div>
				</div>
				<div class="col-md-4">
					<div class="media-image bottomrow"><img alt="f1" class="thumbnail" src="<?php echo get_home_url();?>/wp-content/uploads/2019/06/media-5.png" width="100%"></div>
				</div>
				<div class="col-md-4">
					<div class="media-image bottomrow"><img alt="f1" class="thumbnail" src="<?php echo get_home_url();?>/wp-content/uploads/2019/06/media-6.png" width="100%"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-dialog2">
			<div class="modal-content">
				<button class="close close1" data-dismiss="modal" type="button">×</button>
				<div class="modal-body modal1"></div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>