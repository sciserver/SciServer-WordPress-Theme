<?php
the_post(); 
the_content(); 

if ( !function_exists( 'get_cfc_meta' ) ) return ;
$carousel_meta = get_cfc_meta( 'carousel-meta' ); 
if (empty($carousel_meta)) return;
$this_carousel = 0;
?>
<div id="accordion">
	<div id="page-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
		<?php
			$slide_class = 'item active'; 
			foreach( $carousel_meta as $key => $value ) :
			
				$slide_title = the_cfc_field('carousel-meta', 'title', false, $key , false); 
				$slide_subtitle = the_cfc_field('carousel-meta', 'subtitle', false, $key , false); 
				$slide_leadp = the_cfc_field('carousel-meta', 'lead-paragraph', false, $key , false); 
				$slide_url = esc_url( the_cfc_field('carousel-meta', 'url', false, $key , false )); 
				$slide_url_text = the_cfc_field('carousel-meta', 'url-text', false, $key , false ); 
				$slide_thumbnail = the_cfc_field('carousel-meta', 'thumbnail', false, $key , false ); 
				$slide_caption = the_cfc_field('carousel-meta', 'caption', false, $key , false ); 
		?>	
				<div class="<?php echo $slide_class; ?>">
				<img src="<?php echo $slide_thumbnail; ?>" class="thumbnail" alt="<?php echo esc_html($slide_title); ?>">
				<div class="carousel-caption"><?php echo $slide_title; ?></div>
				</div>
		<?php	
				$slide_class = 'item'; 
			endforeach; 
		?>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#page-carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#page-carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<?php
//end Carousel Accordion Template.
?>