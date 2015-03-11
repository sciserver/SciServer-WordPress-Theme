<?php 
the_post(); 
the_content(); 
?>
<?php 
$core_archives = get_pages( array( 'parent' => get_the_ID(), 
										'post_type' => 'page',
										'post_status' => 'publish',
										) ) ; 
?>
<div class="row">
<?php foreach ($core_archives as $this_core_page) : 
	$cfc_glyph = function_exists( 'get_cfc_meta' ) ? "<span class='glyphicon ".get_cfc_field('page-meta', 'glyph' , $this_core_page->ID)." aria-hidden='true'></span>" : '' ;
	?>
	<div class="col-md-6 col-sm-12">
	<div class="well">
	<article <?php post_class( "core-functions" ); ?>>
	  <header>
		<?php echo get_the_post_thumbnail( $this_core_page->ID , 'thumbnail' , array('class' => " img-responsive alignright") ); ?>
		<h3 class="entry-title"><?php echo $cfc_glyph; ?> <a href="<?php echo get_page_link( $this_core_page->ID ); ?>"><?php echo $this_core_page->post_title; ?></a></h3>
	  </header>
	  <div class="entry-summary">
		<?php echo wp_trim_excerpt( $this_core_page->post_excerpt ); ?>
	  </div>
	</article>
	</div>
	</div>
<?php endforeach; ?>
</div>