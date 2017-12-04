<h1>Resultado da pesquisa</h1>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    Nenhum resultado encontrado.
  </div>
  
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
