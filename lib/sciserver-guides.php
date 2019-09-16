<?php 
function sciserver_guide_updated( $post_id ) {

	// If this is just a revision, don't do anything.
	if ( wp_is_post_revision( $post_id ) )
		return;

	// Only run this if a single post of type 'guide' was updated
	if ( !is_single( $post_id ) && ( get_post_type( $post_id ) != 'guide' ) )
		return;
}
add_action( 'save_post', 'sciserver_guide_updated' );
 ?>