<!-- START FEATURED PART 1 -->
<div class="featured-card-group">
  <div class="row">
    <div class="col-md-8">
      <div class="featured-card-item-big">
      <a href="<?php the_permalink($post = 124) ?>"><?php the_post_thumbnail('featured-big', array('class' => 'img-fluid')); ?><h2><?php the_excerpt(); ?></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 135) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
      </div>
      <div class="featured-card-item-small">
      <a href="<?php the_permalink($post = 609) ?>"><?php the_post_thumbnail('featured-small', array('class' => 'img-fluid')); ?><h2><?php the_title(); ?></h2></a>
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