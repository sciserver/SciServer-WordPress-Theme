<?php
// Get the post and show the content - usually just the title and a lead paragraph or blockquote.
the_post(); 
the_content(); 

// Check if there are Custom Fields 
if ( !function_exists( 'get_cfc_meta' ) ) return ;

//Get the direct descendants to show in carousel-menu
$carousel_items = get_pages( array( 'parent' => get_the_ID(), 
										'post_type' => 'page',
										'post_status' => 'publish',
										) ) ; 
if (empty($carousel_items)) return;

// Count the menu items
$carousel_menu_items = 1;
$lg_show_hide=" col-lg-2 ";
$md_show_hide=" col-md-3 ";
$sm_show_hide=" col-sm-4 ";
$xs_show_hide=" col-xs-6 ";
?>
<div id="accordion">
	<div class="row">
<?php
		foreach ($carousel_items as $this_core_page) :

			if ($carousel_menu_items >6) { $lg_show_hide=" hidden-lg "; }
			elseif ($carousel_menu_items >4) { $md_show_hide=" hidden-md "; }
			elseif ($carousel_menu_items >3) { $sm_show_hide=" hidden-sm "; }
			elseif ($carousel_menu_items >2) { $xs_show_hide=" hidden-xs "; }

?>
			<div class="<?php echo $lg_show_hide . $md_show_hide . $sm_show_hide . $xs_show_hide; ?> ">
			<div class="thumbnail">
			<?php echo get_the_post_thumbnail( $this_core_page->ID , 'thumbnail' , array('class' => " img-responsive alignright") ); ?>
			<div class="text-center"><strong><?php echo $this_core_page->post_title; ?></strong></div>
			</div>
			</div>
<?php
			$carousel_menu_items++;
		endforeach;
		
		/*foreach( $carousel_meta as $key => $value ) :
		
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
		endforeach; */
?>
	</div>
	<div class="row">
	</div>
</div>
<?php
//end Carousel Accordion Template.
?>