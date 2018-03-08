<?php
/**
 * Template Name: Custom Template
 */
?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
<!-- START JUMBOTRON -->
<div class="jumbotron"><div class="label-featured">Em Destaque</div>
  <h2 class="display-5"><a href="/estilo-de-vida/3-licoes-de-vida-que-aprendi-viajando-pela-antartida/">3 lições de vida que aprendi viajando pela Antártida</a></h2>
  <p class="lead">Viajar para o continente mais remoto do mundo pode parecer assustador.<br>Na verdade um mundo majestoso e tranquilo, algo inacreditável, inabitável e severo, onde você está desconectado de tudo.</p>
  <a href="/estilo-de-vida/3-licoes-de-vida-que-aprendi-viajando-pela-antartida/"><span class="lead">Leia mais<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
</div>
<!-- END JUMBOTRON -->

<!-- START 0 -->
<div class="featured-card-group">
  <div class="row">
    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 894) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="featured-card-item-small">
        <a href="<?php the_permalink($post = 137) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="featured-card-item-small">
        <a href="<?php the_permalink($post = 499) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END 0 -->

<!-- START 1 -->
<div class="featured-card-group">
    <div class="row mais-em">
      <div class="col-md-8">
        <h3>Destaque em Psicologia</h3><small>Conceitos modernos da psicologia para exercitar a sua saúde mental.</small>
      </div>
      <div class="col-md-4 text-right">
        <a href="/psicologia">Mais em Psicologia<i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
      </div>
    </div>

    <hr>

  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="<?php the_permalink($post = 609) ?>"><?php the_post_thumbnail('featured-big', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a><?php the_excerpt(); ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 284) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 124) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END 1 -->

<!-- START 2 -->
<div class="featured-card-group">
    <div class="row mais-em">
      <div class="col-md-8">
        <h3>Destaque em Saúde</h3><small>Faça os hábitos saudáveis se tornarem permanentes em sua vida.</small>
      </div>
      <div class="col-md-4 text-right">
        <a href="/saude">Mais em Saúde<i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
      </div>
    </div>

    <hr>

  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="<?php the_permalink($post = 615) ?>"><?php the_post_thumbnail('featured-big', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a><?php the_excerpt(); ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 340 ) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 119) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END 2 -->

<!-- START 3 -->
<div class="featured-card-group">
    <div class="row mais-em">
      <div class="col-md-8">
        <h3>Destaque em Carreira</h3><small>Idéias e aprendizados para maximizar sua performance profissional.</small>
      </div>
      <div class="col-md-4 text-right">
        <a href="/carreira">Mais em Carreira<i aria-hidden="true" class="fa fa-long-arrow-right"></i></a>
      </div>
    </div>

    <hr>

  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="<?php the_permalink($post = 623) ?>"><?php the_post_thumbnail('featured-big', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a><?php the_excerpt(); ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 133) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 444) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
    </div>
  </div>
</div>
<!-- END 3 -->

<?php endwhile; ?>