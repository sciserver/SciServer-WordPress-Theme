<?php
/**
 * IDIES initial setup and constants
 */
function idies_setup() {

  // Add more menus
  register_nav_menus(array(
    'secondary_navigation' => __('Secondary Navigation', 'roots')
  ));

}

add_action('after_setup_theme', 'idies_setup');

/**
 * Add more sidebars
 */
function idies_widgets_init(  ) {

	global $IDIES_Web;
	
	for ($indx=1;$indx <= $IDIES_Web->splash_widgets; $indx++) {
		register_sidebar(array(
		'name'          => __('Splash'.$indx, 'roots'),
		'id'            => 'sidebar-splash-'.$indx,
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		));
	}

	for ($jndx=1;$jndx <= $IDIES_Web->footer_widgets; $jndx++) {
		register_sidebar(array(
		'name'          => __('Footer'.$jndx, 'roots'),
		'id'            => 'sidebar-footer-'.$jndx,
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		));
	}
	
	register_sidebar(array(
		'name'          => __('Splash Slideshow'),
		'id'            => 'sidebar-slideshow',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<p class="brand-heading">',
		'after_title'   => '</p>',
		));

  
}
add_action('widgets_init', 'idies_widgets_init' );
