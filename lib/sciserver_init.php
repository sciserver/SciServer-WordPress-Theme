<?php
/**
 * Add extra query variables
 */
function sciserver_add_query_vars_filter( $vars ){
  $vars[] = "right-ascension";
  $vars[] = "declination";
  return $vars;
}
add_filter( 'query_vars', 'sciserver_add_query_vars_filter' );
