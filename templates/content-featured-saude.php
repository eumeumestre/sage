<!-- START FEATURED PART 1 -->
<div class="featured-card-group">
  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="/saude/7-habitos-para-dias-mais-leves"><img alt="7 hábitos para dias mais leves" src="<?= get_template_directory_uri(); ?>/dist/images/featured/big/119.jpg" class="img-fluid"><h2>7 hábitos para dias mais leves</h2></a><p>Você pode começar o dia apertando a soneca e arrastando-se para fora da cama ou então iniciá-lo com o pé direito.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="/saude/8-beneficios-inesperados-da-sauna/"><img alt="8 benefícios inesperados da sauna" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/343.jpg"><h2>8 benefícios inesperados da sauna</h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="/saude/11-beneficios-do-cha-preto/"><img alt="11 Benefícios do chá preto que você não sabia" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/615.jpg"><h2>11 Benefícios do chá preto que você não sabia</h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END FEATURED PART 1 -->


<!-- START FEATURED PART 2 -->
<div class="featured-card-group">
  <div class="row mais-em">
    <div class="col-md-12">
      <h3>Últimos artigos em Saúde</h3> <small class="d-none">small aqui.</small>
    </div>
  </div><hr>
  <div class="row">
  <?php query_posts( array(
     'category_name' => 'saude',
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