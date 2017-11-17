<?php
/**
 * Template Name: Sobre nós Template
 */
?>
<p>Testando template-sobre. Testando github com o Marcio.</p>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
