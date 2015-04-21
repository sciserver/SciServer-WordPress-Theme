<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
	<?php $current_page = get_post(); ?>
	<?php if (locate_template('templates/content-' . $current_page -> post_name . '.php') != '') : ?>
	<?php 		get_template_part('templates/content', $current_page -> post_name); ?>
	<?php endif; ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
