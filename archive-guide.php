<?php
/*
Template Name: Help Guide Archive
*/
global $post;

get_template_part('templates/page', 'header'); 
?>
<?php if ( !have_posts() ) : ?>

  <div class="alert alert-warning">
    <?php _e('Sorry, no guides found.', 'roots'); ?>
  </div>

<?php 
else : 

	while ( have_posts()) : the_post(); 
		get_template_part('templates/content', 'guide' ); 
	endwhile; 
	
	$the_title;
endif;
