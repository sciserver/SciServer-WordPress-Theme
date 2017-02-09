<?php
/*
 * 
 * This function runs whenever the Backend of the WordPress site is loaded.
 */
add_action( 'init', 'sciserver_check_messages' );

function sciserver_check_messages() {
	$args = array( 'post_type' => 'messages', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	endwhile;

}