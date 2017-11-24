<div class="emm-top-ad">
  <small>Publicidade</small>
  <img src="<?= get_template_directory_uri(); ?>/dist/images/728x90.gif">
</div>  
<?php while (have_posts()) : the_post(); ?>

        <span style="margin-bottom: 10px;" class="badge badge-pill badge-primary">
          <?php
        foreach((get_the_category()) as $category) { 
        echo $category->cat_name . ' '; 
        } 
?>
</span>


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