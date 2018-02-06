<?php while (have_posts()) : the_post(); ?>

<span class="post-label">
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

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-3870151252326045"
     data-ad-slot="8146926831"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>

<?php endwhile; ?>