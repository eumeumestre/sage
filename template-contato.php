<?php
/**
 * Template Name: Contato Template
 */
?>
<p>Testando template-contato</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
