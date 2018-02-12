<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<?php
if (locate_template('templates/pre-header.php') != '') {
	get_template_part('templates/pre-header');
}
do_action('get_header' , $IDIES_Web->header_file);
get_template_part('templates/'.$IDIES_Web->header_file);
?>

<?php if (is_front_page()) :   ?>
<div class="wrap container-fluid" role="document">
<?php else :   ?>
<div class="wrap container" role="document">
<?php endif;   ?>

<div class="content row">
  <main class="main" role="main">
	<?php include roots_template_path(); ?>
  </main><!-- /.main -->
  <?php if (roots_display_sidebar()) : ?>
	<aside class="sidebar" role="complementary">
	  <?php include roots_sidebar_path(); ?>
	</aside><!-- /.sidebar -->
  <?php endif; ?>
</div><!-- /.content -->
</div><!-- /.wrap -->

  
<?php
	get_template_part('templates/'.$IDIES_Web->footer_file); 
	get_template_part('templates/sciserver_login');
?>

  <?php wp_footer(); ?>

</body>
</html>
