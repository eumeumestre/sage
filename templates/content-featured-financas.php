<!-- START FEATURED PART 1 -->
<div class="featured-card-group">
  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="/financas/os-principios-basicos-do-dinheiro"><img alt="Os princípios básicos do dinheiro" src="<?= get_template_directory_uri(); ?>/dist/images/featured/big/141.jpg" class="img-fluid"><h2>Os princípios básicos do dinheiro</h2></a><p>Manter o sentimento de felicidade não é fácil, mas investir nos hábitos certos é recompensador. Adotá-los fará uma grande diferença no seu humor e o aproximará de pessoas com a mesma mentalidade.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="/financas/licoes-para-aprender-com-warren-buffett/"><img alt="5 lições para aprender com Warren Buffett" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/455.jpg"><h2>5 lições para aprender com Warren Buffett</h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="/financas/truques-financeiros-para-economizar-para-o-seu-sonho"><img alt="Truques financeiros para economizar para o seu sonho" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/525.jpg"><h2>Truques financeiros para economizar para o seu sonho</h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END FEATURED PART 1 -->


<!-- START FEATURED PART 2 -->
<div class="featured-card-group">
  <div class="row mais-em">
    <div class="col-md-12">
      <h3>Últimos artigos em Finanças</h3> <small class="d-none">small aqui.</small>
    </div>
  </div><hr>
  <div class="row">
  <?php query_posts( array(
     'category_name' => 'financas',
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