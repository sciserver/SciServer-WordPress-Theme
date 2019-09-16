<article <?php post_class(); ?>>
	<header>
		<h2 class="entry-title"><?php echo get_post_format(); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-summary">
		<?php the_content(); ?>
	</div>

</article>
