<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NPNXM7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NPNXM7');</script>
<!-- End Google Tag Manager -->

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
	//do_action('get_header');
    //get_template_part('templates/header');
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
	//get_template_part('templates/footer'); 
	get_template_part('templates/'.$IDIES_Web->footer_file); 
?>

  <?php wp_footer(); ?>

</body>
</html>
