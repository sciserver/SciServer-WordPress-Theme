<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Remove 'Categories:" from the title()
 */
add_filter('get_the_archive_title', 'idies_better_title');
function idies_better_title( $title ) {

	$count = 1;
	if ( is_category() ) {
		$title = str_replace ( 'Category: ' , '', $title , $count ); 
	} elseif ( is_tag() ) {
		$title = str_replace ( 'Tags: ' , '', $title , $count );
	} elseif ( is_archive() ) {
		$title = str_replace ( 'Archives: ' , '', $title , $count );
	}
	
	return $title;
 }
