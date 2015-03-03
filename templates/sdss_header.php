<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="logo">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<a href="<?php get_bloginfo( 'wpurl ' ); ?>"><img src="<?php echo get_bloginfo('template_url') . '/assets/img/headerlogo.png'; ?>" class="header-logo img-responsive" alt="<?php get_bloginfo( 'name ' ); ?>"></a>
				</div>
				<div class="col-sm-6 col-xs-12">
					<img src="<?php echo get_bloginfo('template_url') . '/assets/img/headerlogo2.png'; ?>" class="header-logo header-logo-right img-responsive" ><div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="blogname"><?php echo get_bloginfo( 'name' ); ?></div>
				</div>
			</div>
		</div>
	</div>
<div class="container">
	<div class="row">
<?php
/* for sdss
		<div class="col-sm-3 col-xs-12">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php get_bloginfo( 'wpurl' ); ?>"><img src="<?php echo get_bloginfo('template_url') . '/assets/img/navbarlogo.png'; ?>" class="navbar-logo img-responsive" alt="<?php get_bloginfo( 'name ' ); ?>"></a>
			</div>
		</div>
		<div class="col-sm-9">
			<nav class="collapse navbar-collapse" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
			endif;
			?>
			</nav>
		</div>
*/		
?>
		<div class="col-xs-12">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="primary-nav" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
			endif;
			?>
			</div>
		</div>
	</div>
</div>
</header>
