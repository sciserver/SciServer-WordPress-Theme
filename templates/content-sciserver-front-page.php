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
<section class="splash-teaser" >
<?php 
if ( function_exists( 'get_cfc_meta' ) ) : 
$splash_teaser_ids = array();
foreach( get_cfc_meta( 'splash-teaser' ) as $key => $value ){ 
	$splash_teaser_ids[] = get_cfc_field( 'splash-teaser','page-number', false, $key );
}
$max_items = 6;
$this_item = 1;
?>
<div class="container">
<div class="row">
<?php 
	foreach ($splash_teaser_ids as $this_teaser_id) : 
	
		$this_teaser_post = get_post($this_teaser_id); 
		
		//glyph
		$this_teaser_glyph = get_cfc_field('page-meta', 'glyph' , 	$this_teaser_id);
		if ( !empty( $this_teaser_glyph ) ) { $this_teaser_glyph = "<span class='glyphicon " . $this_teaser_glyph . "' aria-hidden='true'></span>"; }
		
		//blurb
		$this_teaser_blurb = get_cfc_field('page-meta', 'blurb' , 	$this_teaser_id) ;
		if ( empty( $this_teaser_blurb ) ) { $this_teaser_blurb = wp_trim_words( $this_teaser_post->post_content , 10 );}
?>
	<div class="col-md-2 col-xs-4">
		<div class="panel panel-splash-teaser panel-splash-teaser-<?php echo $this_item; ?>">
			<div class="panel-heading"><a href="<?php echo get_page_link( $this_teaser_id ); ?>"><?php echo $this_teaser_glyph; ?></a>
			<?php //echo get_the_post_thumbnail( $this_teaser_id , 'thumbnail' , array('class' => " img-responsive alignright") ); ?>
		  </div>
			<div class="panel-body">
		  <div class="entry-summary">
			<h4 class="entry-title"><a href="<?php echo get_page_link( $this_teaser_id ); ?>"><?php echo $this_teaser_post->post_title; ?></a></h4>
			<div class="hidden-sm hidden-xs"><?php echo $this_teaser_blurb; ?></div>
		  </div>
		  </div>
		</div>
	</div>
<?php 
		$this_item++;
		if ($this_item>$max_items) {break;}
	endforeach; 
endif; 
?>
</div>
</div>
</section>
<section class="splash-intro" >
<div class="container">
<div class="row">
<div class="col-xs-12">
<?php
the_post(); 
the_content(); 
?>
</div>
</div>
</div>
</section>
<?php
//end Front Page Template.
?>
