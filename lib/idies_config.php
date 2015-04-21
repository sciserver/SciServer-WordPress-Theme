<?php
/*
 * Display a rotating to display a carousel menu
 */
function idies_show_carousel( $the_ids , $the_thumbs , $the_titles , $the_links , $collapse_parent = '' ) {
	
	$num_items = count($the_ids);
	$slide_class = 'item active'; 
	$collapse_collapsed = '';
	$data_parent = (empty( $collapse_parent ) ? '' : ' data-parent="#' . $collapse_parent . '" ' );
	$data_toggle = (empty( $collapse_parent ) ? '' : ' data-toggle="collapse" ' );
	
	$show_lg = 6;
	$show_md = 4;
	$show_sm = 3;
	$show_xs = 2;
	$show_max = $show_lg;
	
	$the_columns = "  col-lg-" . intval(12/$show_lg) . " col-md-" . intval(12/$show_md) . " col-sm-" . intval(12/$show_sm) . " col-xs-" . intval(12/$show_xs) ;
	
?>
<div id="carouslides" class="carousel slide " data-ride="carousel" data-interval="10000">
<div class="carousel-inner" role="listbox">
<?php

//number of menu rows to show
for ( $jndx=0; $jndx < $num_items; $jndx++ ) :
	$this_menu_item = 1;
?>
	<div class="<?php echo $slide_class; ?>">
<?php
	//number of items on each row
	for ( $indx=0; $indx < $num_items; $indx++ ) :
	
		$hide_columns = $the_columns;
		
		if ($this_menu_item >6) { $hide_columns .= " hidden-lg "; }
		if ($this_menu_item >4) { $hide_columns .= " hidden-md "; }
		if ($this_menu_item >3) { $hide_columns .= " hidden-sm "; }
		if ($this_menu_item >2) { $hide_columns .= " hidden-xs "; }

		$thisindx = ( ( $indx + $jndx >=  $num_items ) ) ? ( $indx + $jndx -  $num_items ) : $indx + $jndx ;
?>
		<div class="<?php echo $hide_columns; ?> ">
			<div class="thumbnail">
					<a <?php echo $data_toggle; ?> class="<?php echo $collapse_collapsed; ?>" <?php echo $data_parent; ?> href="<?php echo $the_links[$thisindx]; ?>" >
					<?php echo $the_thumbs[$thisindx]; ?>
					</a>
				<div class="carousel-caption">
					<a <?php echo $data_toggle; ?> <?php echo $data_parent; ?> href="<?php echo $the_links[$thisindx]; ?>" >
					<?php echo $the_titles[$thisindx]; ?></a>
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
	$collapse_collapsed = ( empty( $collapse_parent ) ? '' : 'collapsed' );
endfor;
?>
</div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carouslides" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carouslides" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
}
/*
 * Display collapsible panels and headings (optional)
 */
function idies_show_collapsibles( $the_headings , $the_titles , $the_slugs, $the_links , $the_imgs , $the_contents , $collapse_parent ) {
	$collapse_in = 'panel-collapse collapse in';
	$collapse_collapsed = '';
	$data_parent = ' data-parent="#' . $collapse_parent . '" ';
	$data_toggle = ' data-toggle="collapse" ';
?>	
<div class="panel-group" id="<?php echo $collapse_parent; ?>" role="tablist" aria-multiselectable="true">
<?php
for($thisindx=0;$thisindx<count($the_titles);$thisindx++) :
?>
  <div class="panel panel-default">
<?php
  if (!empty($the_headings[$thisindx])) :
?>
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a <?php echo $data_toggle; ?> class="<?php echo $collapse_collapsed; ?>" <?php echo $data_parent; ?> href="<?php echo $the_links[$thisindx]; ?>" aria-expanded="true" aria-controls="<?php echo $the_slugs[$thisindx]; ?>">
          <?php echo $the_headings[$thisindx]; ?>
        </a>
      </h4>
    </div>
<?php
  endif;
?>
    <div id="<?php echo $the_slugs[$thisindx];?>" class="<?php echo $collapse_in;?>" role="tabpanel" aria-labelledby="<?php echo $the_slugs[$thisindx]; ?>">
<?php
  if ( empty($the_headings[$thisindx])) :
?>
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne">
      <h3>
        <?php echo $the_titles[$thisindx]; ?>
      </h3>
    </div>
<?php
  endif;
?>
      <div class="panel-body">
		<?php echo $the_imgs[$thisindx]; ?><?php echo do_shortcode($the_contents[$thisindx]); ?>
      </div>
<?php  if ( empty($the_headings[$thisindx])) echo "</div>";?>
    </div>
  </div>
<?php 
	$collapse_in = 'panel-collapse collapse ';
	$collapse_collapsed = 'collapsed';

endfor;
?>
</div>
<?php
}
/*
 * Get Custom Field Creator Data for page
 */
function idies_get_cfc_data( $meta_name, $pageid = false ) {

	// Check if WCK installed 
	if ( !function_exists( 'get_cfc_meta' ) ) return false;

	$meta_data = get_cfc_meta( $meta_name ) ;
	echo "<!-- DEBUG ";
	print_r($meta_data);
	echo "-->";
}
