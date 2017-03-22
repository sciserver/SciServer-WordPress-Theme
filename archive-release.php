<?php
/*
Template Name: Release Archive
*/
?>
<?php 
get_template_part('templates/page', 'header-release'); 
?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'release' ); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older releases', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer releases &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
