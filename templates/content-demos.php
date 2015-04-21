<?php
// Content specifically for the Demos page.
?>
<?php 
/* 
 * Get/validate input parameters
 */
if ( $ra = get_query_var( 'right-ascension' ) ) $ra = floatval( $ra );
if ( $dec = get_query_var( 'declination' ) ) $dec = floatval( $dec );

/* 
 * Show the image
 */
 
?>
<h2 id="webservices">Webservices Demo</h2>

Retrieve an image of the sky from the Sloan Digital Sky Survey. Enter a right ascension and declination in decimal degrees in the textboxes below and click Submit to get an image.

<?php
if ( (!empty($ra) && !empty($dec) ) )  :
	$this_title = "Your SkyServer Image";
	$this_src = "http://scitest02.pha.jhu.edu/SkyServerWS/DR10/ImgCutout/getjpeg?ra=" . $ra . "&dec=" . $dec . "&scale=0.7&width=512&height=512";
	
else :
	$this_title = "Enter Coordinates to view a SkyServer Image";
	$this_src = "http://test.sciserver.org/wp-content/uploads/2014/09/sdss-telescope.jpg";
endif;
?>
<div class="panel-group" id="skyserver">
<div class="panel panel-primary">
<div class="panel-heading"><h2 class="panel-title"><?php echo $this_title; ?></h2></div>
<div class="panel-body" style="min-height:532px;">
<div class="row">
<div class="col-xs-12">
<img class="img-responsive aligncenter" src="<?php echo $this_src; ?>" width="512" height="512">
</div>
</div>
</div>
</div>
</div>
<?php
 /* 
 * Show the form
 */
 ?>
<div class="panel panel-primary">
<div class="panel-body">
<form action="<?php echo get_permalink(  ) . '#skyserver' ; ?>" method="POST">
<div class="demos-form">
	<div class="form-group form-group-1">
		<div class="row">
			<div class="col-sm-4 text-right">
				<label class="h4" for="right-ascension">Right Ascension:</label><br>
				In decimal degrees, for example 215.6.
			</div>
			<div class="col-sm-8 text-left">
					<input type="text" id="right-ascension" name="right-ascension" value="<?php echo $ra; ?>" size="60px" required >
			</div>
		</div>
	</div>
	<div class="form-group form-group-2">
		<div class="row">
			<div class="col-sm-4 text-right">
				<label class="h4" for="declination">Declination: </label><br>
				In decimal degrees, for example 35.2.
			</div>
			<div class="col-sm-8 text-left">
					<input type="text" id="declination" name="declination"  value="<?php echo $dec; ?>" size="60px" required >
			</div>
		</div>
	</div>
	<div class="form-group form-group-3">
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
</div>
</form>
</div>
</div>
