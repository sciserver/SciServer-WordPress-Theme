<?php
// Check if there are Custom Fields 
if ( !function_exists( 'get_cfc_meta' ) ) return ;

//Get the direct descendants to show in carousel-menu
$carousel_pages = get_pages( array( 'parent' => get_the_ID(), 
										'post_type' => 'page',
										'post_status' => 'publish',
										) ) ; 
										
if (empty($carousel_pages)) {return;}

//Get child page id's
foreach ($carousel_pages as $this_carousel_page) {

	$carousel_page_ids[] = $this_carousel_page->ID;
	$carousel_page_thumbs[] = get_the_post_thumbnail( $this_carousel_page->ID , 'thumbnail' , array('class' => " img-responsive") );
	$carousel_page_titles[] = $this_carousel_page->post_title;
	$carousel_page_slugs[] = $this_carousel_page->post_name;
	$carousel_page_links[] = '#' . $this_carousel_page->post_name;
	$carousel_page_imgs[] = get_the_post_thumbnail( $this_carousel_page->ID , 'medium' , array('class' => " img-responsive alignright ") );
	$carousel_page_contents[] = $this_carousel_page->post_content;
}

?>
<section class="carouslides" >
<?php

idies_show_carousel( $carousel_page_ids , $carousel_page_thumbs , $carousel_page_titles , $carousel_page_links , 'collapslides' );

?>
<div class="row">
<div class="col-xs-12">
<?php
idies_show_collapsibles( array('') , $carousel_page_titles , $carousel_page_slugs , $carousel_page_links , $carousel_page_imgs , $carousel_page_contents , 'collapslides');
 ?>
</div>
</div>
</section>
<?php
//end Carousel Accordion Template.
?>