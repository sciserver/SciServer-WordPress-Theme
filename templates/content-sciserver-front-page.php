<?php 
// Show the intro splash image with overlay of h1 and image caption and show page content below image
?>
<section class="splash" >
<?php
if ( function_exists( 'get_cfc_meta' ) ) : 
?>
	<div class="splash-screen" style="background:url(<?php the_cfc_field( 'splash-meta',	
		'background-image' ); ?>) center center; 
          background-size:cover;" >
		<div class="container">
			<div class="intro-message">
				<div class="splash-title"><?php the_cfc_field('splash-meta', 'title' ); ?></div>
				<div class="splash-subtitle"><?php the_cfc_field('splash-meta', 'subtitle' ); ?></div>
			</div>
		</div>
	</div>
<?php 
endif;
?>
</section>
<section class="splash-banner" >
<div class="container">
<div class="row">
<div class="col-sm-3">
<a href="mailto:elbert@jhu.edu" class="btn btn-success" target="_blank" >About</a>
</div>
<div class="col-sm-3">
<a href="//hemi.jhu.edu/cmede/" class="btn btn-danger" target="_blank" >Visit CMEDE</a>
</div>
<div class="col-sm-3">
<a href="//alpha.sciserver.org" class="btn btn-info" target="_blank" >Visit SciServer</a>
</div>
<div class="col-sm-3">
<a href="//alpha02.sciserver.org" class="btn btn-warning" target="_blank" >Login to MEDEDSC</a>
</div>
</div>
</div>
</section>
<section class="splash-content" >
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="content-box"><?php if ( have_posts(  ) ) { the_post(); the_content(); }?></div>
</div>
</div>
</div>
</section>
<?php
//End Splash Page Template.
?>
