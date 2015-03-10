<?php 
the_post(); 
//the_content(); 
?>
<?php $core_archives = get_pages( array( 'parent' => get_the_ID(), 
										'post_type' => 'page',
										'post_status' => 'publish',
										) ) ; 
?>
<div class="row">
<?php foreach ($core_archives as $this_core_page) : 
	//var_dump($this_core_page);
	//echo "<br>\n";
	?>
	<div class="col-sm-6 col-xs-12">
	<div class="well well-sm">
	<article <?php post_class( "core-functions" ); ?>>
	  <header>
		<h3 class="entry-title"><a href="<?php echo get_page_link( $this_core_page->ID ); ?>"><?php echo $this_core_page->post_title; ?></a></h3>
	  </header>
	  <div class="entry-summary">
		<?php echo wp_trim_excerpt( $this_core_page->post_excerpt ); ?>
	  </div>
	</article>
	</div>
	</div>
<?php endforeach; ?>
</div>