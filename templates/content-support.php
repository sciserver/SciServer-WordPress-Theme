<?php 
if ( !function_exists( 'get_cfc_meta' ) ) return; 

$i=1; //odd is left, even is right
$rcol = '';
$lcol = '';

// get the box data
$support_boxes = get_cfc_meta( 'support-boxes' );
foreach( $support_boxes as $key => $value ){ 
	$this_box = "<div class='well well-sm'>";
	
	$the_post = get_cfc_field( 'support-boxes','page-teaser', false, $key );

	if ( empty( $the_post ) ) {
		
		$the_title = get_cfc_field( 'support-boxes','box-title', false, $key ); 
		$the_permalink = get_cfc_field( 'support-boxes','box-url', false, $key ); 
		$the_glyph = "<span class='glyphicon ". get_cfc_field( 'support-boxes','box-glyph', false, $key )  ." aria-hidden='true'></span> "; 
		$the_excerpt = get_cfc_field( 'support-boxes','box-excerpt', false, $key ); 
		
	} else {
		$the_title = strlen( get_cfc_field('page-meta', 'title' , $the_post->ID) ) ? get_cfc_field('page-meta', 'title' , $the_post->ID) : get_the_title( $the_post );
		$the_permalink = get_the_permalink( $the_post ); 
		$the_glyph = strlen( get_cfc_field('page-meta', 'glyph' , $the_post->ID) ) ? "<span class='glyphicon ". get_cfc_field('page-meta', 'glyph' , $the_post->ID) ." aria-hidden='true'></span> " : '' ;
		$the_excerpt = get_cfc_field('page-meta', 'blurb' , 	$the_post->ID);
		if ( empty( $the_excerpt ) ) $the_excerpt = wp_trim_words( $the_post->post_content ,32 );
	}
	$the_post_class = get_post_class( array( "support" ) );
	$the_post_class = join( " " , $the_post_class );
	$this_box .= "<article" . $the_post_class . ">\n<header>\n";
	$this_box .= "<h3>\n$the_glyph";
	$this_box .= "<a href='$the_permalink'>" . $the_title . "</a></h3>\n</header>\n";
	$this_box .= "<div class='entry-summary'>\n" . $the_excerpt . "\n";	
	$this_box .= "</div>\n</article>\n</div>";
	
	if ( $i & 1 ) {
		$lcol .= $this_box;
	} else {
		$rcol .= $this_box;
	}
	$i++;
}

// put the box data in two columns
echo "<div class='row'>";
echo "<div class='col-xs-12 col-md-6'>";
echo $lcol;
echo "</div>";
echo "<div class='col-xs-2 col-md-6'>";
echo $rcol;
echo "</div>";
echo "</div>";
?>

