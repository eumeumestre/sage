<?php while (have_posts()) : the_post(); ?>

<!--CATEGORY NAME BADGE START-->
<span class="badge badge-pill badge-primary">
  <?php
    foreach((get_the_category()) as $category) { 
    echo $category->cat_name . ' '; 
    } 
  ?>
</span>
<!--CATEGORY NAME BADGE END-->

  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>