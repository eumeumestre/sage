<?php
/**
 * Template Name: Custom Template
 */
?>
<p>Testando template-custom</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
