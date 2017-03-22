<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
	<?php if ( function_exists( 'get_cfc_field' ) ) { ?>
		<?php 
		// New in this Release 
		$notes = get_cfc_field( 'release-notes' , 'notes' );
		$notes = ( empty( $notes ) ) ? "" : "<h2 id='new'>New in this Release</h2>" . $notes ;
		echo $notes;
		
		// Change Log 
		$changelog = get_cfc_meta( 'change-log' );
		if ( ! empty( $changelog ) ) {
			$changelog = "<h2 id='change-log'>Change Log</h2>" . "<br>\n";
			$changelog .= "<ul class='fa-ul'>" . "\n";
			foreach( get_cfc_meta( 'change-log' ) as $key => $value ) : 
				$changelog .= '<li><i class="fa fa-li fa-bug"></i><strong>';
				$changelog .= get_cfc_field('change-log', 'change-title', false, $key);
				$changelog .= '</strong> <em>';
				$changelog .= get_cfc_field('change-log', 'update-type', false, $key);
				$changelog .= '</em>: ';
				$changelog .= get_cfc_field('change-log', 'change-description', false, $key);
				$changelog .= '</li>' . "\n";
			endforeach;
			$changelog .= "</ul>" . "\n";
			echo $changelog;
		}
	} ?>
    </div>
    <footer>
	  <?php $the_parent = wp_get_post_parent_id( get_the_id() ); ?>
	  <ul class="breadcrumb">
		<li><a href="<?php echo home_url(); ?>">SciServer</a></li>
		<li><a href="/support/updates/">All Releases</a></li>
		<li><?php the_title(); ?></li>
	</ul> 
    </footer>
  </article>
<?php endwhile; ?>
 