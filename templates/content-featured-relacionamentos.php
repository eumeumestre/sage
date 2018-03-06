<!-- START FEATURED PART 1 -->
<div class="featured-card-group">
  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="/relacionamentos/os-pilares-de-um-relacionamento-saudavel"><img alt="Os pilares de um relacionamento saudável" src="<?= get_template_directory_uri(); ?>/dist/images/featured/big/137.jpg" class="img-fluid"><h2>Os pilares de um relacionamento saudável</h2></a><p>Todos nós desejamos um relacionamento que envolva alegria, cumplicidade e afeto mútuo. Mas já dizia William Shakespeare, famoso escritor inglês: o percurso do amor verdadeiro nunca foi tranquilo.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="/relacionamentos/4-passos-para-elevar-seu-carisma/"><img alt="4 passos para elevar seu carisma
" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/604.jpg"><h2>4 passos para elevar seu carisma
</h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="/relacionamentos/como-detectar-um-narcisista-no-primeiro-encontro/"><img alt="Como detectar um narcisista no primeiro encontro" class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/featured/small/825.jpg"><h2>Como detectar um narcisista no primeiro encontro</h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END FEATURED PART 1 -->


<!-- START FEATURED PART 2 -->
<div class="featured-card-group">
  <div class="row mais-em">
    <div class="col-md-12">
      <h3>Últimos artigos em Relacionamentos</h3> <small class="d-none">small aqui.</small>
    </div>
  </div><hr>
  <div class="row">
  <?php query_posts( array(
     'category_name' => 'relacionamentos',
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