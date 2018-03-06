<!-- START FEATURED PART 1 -->
<div class="featured-card-group">
  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="/psicologia/inteligencia-emocional-o-verdadeiro-sucesso"><img alt="Inteligência Emocional: o verdadeiro sucesso" src="<?= get_template_directory_uri(); ?>/dist/images/featured/big/124.jpg" class="img-fluid"><h2>Inteligência Emocional: o verdadeiro sucesso</h2></a><p>Manter o sentimento de felicidade não é fácil, mas investir nos hábitos certos é recompensador. Adotá-los fará uma grande diferença no seu humor e o aproximará de pessoas com a mesma mentalidade.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="/psicologia/os-habitos-da-felicidade"><img alt="Os hábitos da felicidade" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/135.jpg"><h2>Os hábitos da felicidade</h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="/psicologia/10-dicas-basicas-para-automotivacao/"><img alt="10 dicas básicas para automotivação" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/609.jpg"><h2>10 dicas básicas para automotivação</h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END FEATURED PART 1 -->


<!-- START FEATURED PART 2 -->
<div class="featured-card-group">
  <div class="row mais-em">
    <div class="col-md-12">
      <h3>Últimos artigos em Psicologia</h3> <small class="d-none">small aqui.</small>
    </div>
  </div><hr>
  <div class="row">
  <?php query_posts( array(
     'category_name' => 'psicologia',
     'posts_per_page' => 3,
  )); ?>
  <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php __('Nada a mostrar'); ?></p>
    <?php endif; ?>
  </div>
</div>
<!-- END FEATURED PART 2 -->