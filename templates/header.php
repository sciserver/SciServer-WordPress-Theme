<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="logo">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<a href="<?php get_bloginfo( 'wpurl ' ); ?>"><img src="<?php get_bloginfo( 'wpurl ' ); ?>/wp-content/themes/idiestheme/assets/img/headerlogo.png" class="header-logo img-responsive" alt="<?php get_bloginfo( 'name ' ); ?>"></a>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="tagline"><?php get_bloginfo( 'description ' ); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php get_bloginfo( 'wpurl ' ); ?>"><?php bloginfo('name'); ?></a>
		</div>
		<nav class="collapse navbar-collapse" role="navigation">
		  <?php
			if (has_nav_menu('primary_navigation')) :
			  wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
			endif;
		  ?>
		</nav>
  </div>
</header>
