<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/website_select.php',  // Sets Class to control website options (IDIES, SDSS, SciServer, Etc)
  'lib/init.php',            // Initial theme setup and constants
  'lib/idies_init.php',		 // IDIES initialization tasks //
  'lib/sciserver_init.php',	 // IDIES initialization tasks //
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/idies_config.php',	 // IDIES configuration tasks //
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
  'lib/sciserver-shortcodes.php',   	// Custom shortcodes
  'lib/sciserver-messages.php',   		// Messages to appear on SciServer components
  'lib/sciserver-guides.php',   		// User Guides
  'lib/widget-recent-releases.php',		// Widget to Show Recent Release CPT 
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
