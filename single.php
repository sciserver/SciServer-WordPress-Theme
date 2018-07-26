<?php 
global $post;

if ( locate_template('templates/content-single-' . $post -> post_type . '.php') != '') :
        get_template_part('templates/content', 'single-' . $post -> post_type );
else:
        get_template_part('templates/content', 'single');
endif;

