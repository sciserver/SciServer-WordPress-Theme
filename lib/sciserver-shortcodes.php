<?php 
/* Add shortcodes 
 *	[SDSS_TOC selectors="h2, h3"] Shows a table of contents containing all h2 and h3 selectors
 *	[SDSS_TOTOP] Shows an up arrow and "Back to top" that takes you to the top of the current page.
 */
add_shortcode('populatez','populatez');
add_action( 'wp_enqueue_scripts', 'register_populatez_script' );

add_shortcode('scis-show-cpt','scis_show_cpt');

function register_populatez_script(){
	wp_register_script( 'populatez', get_template_directory_uri() . '/assets/vendor/sciserver/js/populatez.js', array( 'jquery' ), '1.0.0', true );
}

function populatez( $atts ) {
	
	wp_enqueue_script( 'populatez' );
	
	return "<div id='populatez' " . " data-populatez-request='" . json_encode( $_POST ) . "' ></div>";
	
}

function scis_show_cpt( $atts=array() , $content = "" ) {
	if ( !empty($atts['for']) ) $content = "for = " . $atts['for'] ;
	return $content;
	
}
?>