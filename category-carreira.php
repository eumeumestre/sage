<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div> 
  <?php get_search_form(); ?>
<?php endif; ?>

<!--START CARREIRA CONTENT-->

<!--END CARREIRA CONTENT-->

<?php the_posts_navigation(); ?>
