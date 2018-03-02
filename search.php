<h1>Resultado da Pesquisa</h1>
<div><p class="text-info"><?php echo('Pesquisa feita em '.timer_stop( 0 ).' segundos'); ?></p></div>


<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        Nenhum resultado encontrado.
    </div>
<?php endif; ?>


<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>


<?php the_posts_navigation(); ?>