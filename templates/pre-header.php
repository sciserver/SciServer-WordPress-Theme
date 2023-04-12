<?php 
/*
 * Bonnie Souter 03/08/2016
 * Moved pre-header info from base template.
 */
?>

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
/*if ( defined( 'WP_ENV' ) && 
	( strcmp( WP_ENV , 'development' ) === 0 ) ) :  */
if ( ($_ENV['PANTHEON_ENVIRONMENT'] == 'dev') || ($_ENV['PANTHEON_ENVIRONMENT'] == 'test') ): 
?>
	<div class="wrap container-fluid" role="document">
		<div class="content row">
			<div class="col-xs-12" style="background-color: yellow;">
            	<p class="pull-left align-left" style='font-size: xx-large;'>
                	<span style='font-weight:bold;'><?php echo $_ENV['PANTHEON_ENVIRONMENT']; ?></span> site:
                    	<?php echo REMINDER; ?>
                </p>
				<p class="pull-right align-right">&nbsp;<br><?php
				if (! is_user_logged_in()) {
					echo( '<span><a href="/wp-login.php" class="btn btn-primary">Login to WordPress</a></span>' );
				}?></p>
			</div>
			<div class="clearfix"><div>
		</div>
	</div>
<?php
endif;
?>
