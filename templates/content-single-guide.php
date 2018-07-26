<?php 
global $post;
the_post();
?>
&nbsp;

<article <?php post_class(); ?>>
	<div id="<?php echo get_post_meta( $post->ID , 'guide-id' , true ); ?>" class="<?php echo get_post_meta( $post->ID , 'guide-class' , true ); ?>">
	
		
		<?php //HEADER ?>
		<header>
			<h2 class="entry-title"><?php echo get_post_format(); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <div class="pull-right"><small><a target="_blank" href="<?php echo get_post_meta( $post->ID , 'tool-url' , true ); ?>">Launch <?php echo get_post_meta( $post->ID , 'tool-name' , true ); ?> <i class="fa fa-external-link-square" aria-hidden="true"></i></a></small></div>
		</header>
		
		<?php //CONTENT ?>
		<div class="entry-content">
			<?php the_content(); ?>	
			
			<?php //SECTIONS ?>
<?php 
			$result = "";
			$menu = "";
			$sections = get_cfc_meta( 'section' ); 
			foreach( $sections as $skey => $svalue ){
				// get raw data
				$this_heading = ( array_key_exists( "heading" , $svalue ) ) ? $svalue[ "heading" ] : "";
				$this_content = ( array_key_exists( "section-content" , $svalue ) ) ? $svalue[ "section-content" ] : "";
				$this_id = ( array_key_exists( "section-id" , $svalue ) ) ? $svalue[ "section-id" ] : "" ;
				$this_class = ( array_key_exists( "section-class" , $svalue ) ) ? $svalue[ "section-class" ] : "" ;
				$this_level = ( array_key_exists( "level" , $svalue ) ) ? $svalue[ "level" ] + 1 : 2 ;
				
				//format it
				$result .= "<div id='" . $this_id . "' class='" . $this_class . "'>";
				$result .= "<h" . $this_level . ">" . $this_heading . "</h" . $this_level . ">";
				$result .= "<div class='content'>$this_content</div>";
				$result .= "</div>";
				
				//to top
				$result .= "&nbsp<br><div class='totop'><a href='#'><strong>To Top <i class='fa fa-arrow-up' aria-hidden='true'></i></strong></a></div>";
				
				$menu .= "<li><i class='fa-li fa fa-question-circle' aria-hidden='true' style='color:#004e99'></i><a href='#$this_id'>$this_heading</a></li>";
				
			}
			$menu = "<div class='pull-right'><ul class='fa-ul'>$menu</ul></div>";
			echo $menu;
			echo $result;
?>
			<p>&nbsp;</p>
			<div class="alert alert-info">If you encounter bugs or have questions or suggestions, please let us know using our <a href="/support/bug-report-and-suggestion-form/" target="_blank" >feedback form</a>!</div>
		</div>

	</div>

</article>

<?php //BREADCRUMBS ?>
<ol class="breadcrumb"><li><a href="/">SciServer</a></li><li><a href="/guide/">User Guides</a></li><li><?php the_title(); ?></li></ol>