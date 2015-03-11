<?php 
// Show the intro splash image with overlay of h1 and image caption and show page content below image
?>
<section class="splash-slides" >
<?php // Show carousel on all but xs screens ?>
<div id="splash-carousel" class="carousel slide hidden-xs" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?php if ( function_exists( 'get_cfc_meta' ) ) : 
	$slideshow = get_cfc_meta( 'splash_slideshow' ); 
	$slide_class = 'item active'; 
	foreach( get_cfc_meta( 'splash_slideshow' ) as $key => $value ) : ?>
		<div class="<?php echo $slide_class; ?>">
		 <div style="background:url(<?php the_cfc_field( 'splash_slideshow','background-image', false, $key ); ?>) center center; 
          background-size:cover;" class="slider-size">
		  <div class="container">
		  <div class="intro-message">
		<?php $slide_title = the_cfc_field('splash_slideshow', 'title', false, $key , false); ?>
		<?php $slide_subtitle = the_cfc_field('splash_slideshow', 'subtitle', false, $key , false); ?>
		<?php $slide_button = the_cfc_field('splash_slideshow', 'button', false, $key , false); ?>
		<?php $slide_slug = '/' . the_cfc_field('splash_slideshow', 'slug', false, $key , false ); ?>
		<?php if (!empty($slide_title)) : ?>
			<div class="carousel-title"><a href="<?php echo $slide_slug ?>"><?php echo $slide_title; ?></a></div>
		<?php endif; ?>
		<?php if (!empty($slide_subtitle)) : ?>
			<div class="carousel-subtitle"><a href="<?php echo $slide_slug ?>"><?php echo $slide_subtitle; ?></a></div>
		<?php endif; ?>
		<?php if (!empty($slide_button)) : ?>
			<div class="carousel-button"><a href="<?php echo $slide_slug ?>"><?php echo $slide_button; ?> <span class="glyphicon glyphicon-play" aria-hidden="true"></span></a></div>
		<?php endif; ?>
		</div>
		</div>
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
<?php // Show each item on xs screens ?>
<div id="splash-carousel" class="notcarousel visible-xs-block">
<div class="carousel-inner" role="listbox">
<?php if ( function_exists( 'get_cfc_meta' ) ) : 
	$slideshow = get_cfc_meta( 'splash_slideshow' ); 
	foreach( get_cfc_meta( 'splash_slideshow' ) as $key => $value ) : ?>
		 <div style="background:url(<?php the_cfc_field( 'splash_slideshow','background-image', false, $key ); ?>) center center; 
          background-size:cover;" class="slider-size">
		  <div class="container">
		  <div class="intro-message">
		<?php $slide_title = the_cfc_field('splash_slideshow', 'title', false, $key , false); ?>
		<?php $slide_subtitle = the_cfc_field('splash_slideshow', 'subtitle', false, $key , false); ?>
		<?php $slide_button = the_cfc_field('splash_slideshow', 'button', false, $key , false); ?>
		<?php $slide_slug = '/' . the_cfc_field('splash_slideshow', 'slug', false, $key , false ); ?>
		<?php if (!empty($slide_title)) : ?>
			<div class="carousel-title"><a href="<?php echo $slide_slug ?>"><?php echo $slide_title; ?></a></div>
		<?php endif; ?>
		<?php if (!empty($slide_subtitle)) : ?>
			<div class="carousel-subtitle"><a href="<?php echo $slide_slug ?>"><?php echo $slide_subtitle; ?></a></div>
		<?php endif; ?>
		<?php if (!empty($slide_button)) : ?>
			<div class="carousel-button"><a href="<?php echo $slide_slug ?>"><?php echo $slide_button; ?> <span class="glyphicon glyphicon-play" aria-hidden="true"></span></a></div>
		<?php endif; ?>
		</div>
		</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
</div>
</div>
</section><?php
//end Front Page Template.
?>
