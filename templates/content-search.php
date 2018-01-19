<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <span class="search-label">
  <?php
    foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
    } 
  ?>
</span>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta-search'); } ?>
  </header>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
<hr>