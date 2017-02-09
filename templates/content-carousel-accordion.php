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
										
if (empty($carousel_items)) {return;}

$show_lg = 6;
$show_md = 4;
$show_sm = 3;
$show_xs = 1;

?>
<section class="carouslides" >
<div id="caraccordion" >
<div id="carouslides" class="carousel slide " data-ride="carousel">
<div class="carousel-inner" role="listbox">
<?php
$slide_class = 'item active'; 
$collapse_collapsed = '';
$show_max = $show_lg;

$carousel_menu_items = count($carousel_items);

//number of menu rows to show
for ( $jndx=0; $jndx < $carousel_menu_items; $jndx++ ) :
	$show_hide = "  col-lg-2 col-md-3 col-sm-4 col-xs-6 ";
	$this_menu_item = 1;
?>
	<div class="<?php echo $slide_class; ?>">
<?php
	//number of items on each row
	for ( $indx=0; $indx < $carousel_menu_items; $indx++ ) :
	
		if ($this_menu_item >6) { $show_hide .= " hidden-lg "; }
		elseif ($this_menu_item >4) { $show_hide .= " hidden-md "; }
		elseif ($this_menu_item >3) { $show_hide .= " hidden-sm "; }
		elseif ($this_menu_item >2) { $show_hide .= " hidden-xs "; }

		$thisindx = ( ( $indx + $jndx >=  $carousel_menu_items ) ) ? ( $indx + $jndx -  $carousel_menu_items ) : $indx + $jndx ;
?>
		<div class="<?php echo $show_hide; ?> ">
			<div class="thumbnail">
					<a data-toggle="collapse" class="<?php echo $collapse_collapsed; ?>" data-parent="#caraccordion" href="#collapse<?php echo $thisindx; ?>" >
					<?php echo get_the_post_thumbnail( $carousel_items{$thisindx}->ID , 'thumbnail' , array('class' => " img-responsive") ); ?>
					</a>
				<div class="carousel-caption">
					<a data-toggle="collapse" data-parent="#caraccordion" href="#collapse<?php echo $thisindx; ?>" >
					<?php echo $carousel_items{$thisindx}->post_title; ?></a>
				</div>
			</div>
		</div>
<?php
		$this_menu_item++;
	endfor;
?>
	</div>
<?php
	$slide_class = 'item'; 
	$collapse_collapsed = 'collapsed';
endfor;
?>
</div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carouslides" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carouslides" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" "></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
<?php
// Show the  collapsible elements
$collapse_in = 'in';
for ( $jndx=0; $jndx < $carousel_menu_items; $jndx++ ) :
?>
	<div id="collapse<?php echo $jndx; ?>" class="collapse <?php echo $collapse_in ?>" >Show<?php echo $jndx; ?>
	</div>
<?php
	$collapse_in = '';
endfor;
?>
</div>
</section>
<?php
//end Carousel Accordion Template.
?>