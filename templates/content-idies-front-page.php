<?php 
//This is where the carousel, h1 and description goes. 
?>
<section class="splash-slides" >
<div id="splash-carousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?php if ( function_exists( 'get_cfc_meta' ) ) : 
	$slideshow = get_cfc_meta( 'splash_slideshow' ); 
	$slide_class = 'item active'; 
	foreach( get_cfc_meta( 'splash_slideshow' ) as $key => $value ) : ?>
		<div class="<?php echo $slide_class; ?>">
		<!--img src="<?php the_cfc_field( 'splash_slideshow','background-image', false, $key ); ?>" width="100%" height="auto" /-->
		 <div style="background:url(<?php the_cfc_field( 'splash_slideshow','background-image', false, $key ); ?>) center center; 
          background-size:cover;" class="slider-size">
		  <div class="intro-message container">
		<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
			include( get_home_template() );
		} else {
			include( get_page_template() );
		} ?>
		<hr>
		</div>
		<div class="carousel-caption"><?php the_cfc_field('splash_slideshow', 'caption', false, $key); ?></div>
		</div>
		</div>
		<?php $slide_class = 'item'; ?>
	<?php endforeach; ?>
<?php endif; ?>
</div>
  <!-- Controls -->
  <a class="left carousel-control" href="#splash-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#splash-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section class="splash-widgets" >
	<div class="container">
		<hr />
		<div class="row">
			<div class="col-xs-12 col-sm-6 sidebar-splash sidebar-splash-1">
				<?php dynamic_sidebar('sidebar-splash-1'); ?>
			</div>
			<div class="col-xs-12 col-sm-6 sidebar-splash sidebar-splash-2">
				<?php dynamic_sidebar('sidebar-splash-2'); ?>
			</div>
		</div>
		<hr />
	</div>
</section>
<section class="splash-explore" >
	<div class="container">
		<div class="row">
		<h3>Learn and Explore</h3>
			<div class="col-xs-12 col-md-4 sidebar-splash-3">
				<div class="sidebar-explore">
				<?php dynamic_sidebar('sidebar-splash-3'); ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 sidebar-splash-4">
				<div class="sidebar-explore">
				<?php dynamic_sidebar('sidebar-splash-4'); ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 sidebar-splash-4">
				<div class="sidebar-explore">
				<?php dynamic_sidebar('sidebar-splash-5'); ?>
				</div>
			</div>
		</div>
	</div>
</section>	
<?php
//end Front Page Template.
?>
