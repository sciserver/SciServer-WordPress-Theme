<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><?php echo get_post_format(); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
<?php 
$the_excerpt = get_the_excerpt();
if ( function_exists( 'get_cfc_meta' ) && ( empty( $the_excerpt ) ) ) {
	$the_excerpt = get_cfc_field( 'release-notes' , 'notes' );
	$the_excerpt =( $the_excerpt ) ? '<h3>New in this Release</h2>' . $the_excerpt : '';
}
?>
  <div class="entry-summary">
    <?php echo $the_excerpt; ?>
  </div>
</article>
