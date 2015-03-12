<?php 
the_post(); 
the_content(); 
?>
<div id="accordion" class="panel-group">
<?php if (function_exists( 'get_cfc_meta' )) : ?>
<?php 	$thisCollapse = 1; ?>
<?php 	$accToggle = ''; ?>
<?php 	$accIn = ' in '; ?>
<?php 	foreach ( get_cfc_meta( 'accordions-meta' ) as $key => $value ) :  ?>
<?php
$cfc_thumb = the_cfc_field('accordions-meta', 'thumbnail', false, $key , false);
$cfc_thumb = (!empty($cfc_thumb) ) ? "<img src=" . $cfc_thumb . " class='img-responsive alignright thumbnail' />" : "" ; 
?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="heading<?php echo $thisCollapse; ?>">
<h3 class="panel-title"><a data-toggle="collapse" class="accordion-toggle <?php echo $accToggle; ?>" data-parent="#accordion" href="#collapse<?php echo $thisCollapse; ?>" aria-expanded="true" aria-controls="collapse<?php echo $thisCollapse; ?>"><?php the_cfc_field( 'accordions-meta','title', false, $key );?></a></h3>
</div>
<div id="collapse<?php echo $thisCollapse; ?>" class="panel-collapse collapse <?php echo $accIn; ?>" role="tabpanel" aria-labelledby="heading<?php echo $thisCollapse; ?>">
<div class="panel-body"><?php echo $cfc_thumb; ?><?php the_cfc_field( 'accordions-meta','body', false, $key );?></div>
</div>
</div>
<?php 	$thisCollapse++; ?>
<?php 	$accToggle = 'collapsed'; ?>
<?php 	$accIn = ''; ?>
<?php 	endforeach; ?>
<?php endif; ?>
</div>
