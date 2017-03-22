<?php
global $post;

//if page has a special template, show that
if (locate_template('page-' . $post->post_name . '.php') != '') {
	get_template_part('page', $post->post_name);
	
//otherwise, just show the page
} else {
	get_template_part('templates/page', 'header'); 
	get_template_part('templates/content', 'page'); 
}
?>
