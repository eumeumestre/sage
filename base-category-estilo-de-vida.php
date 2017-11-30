<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header', 'estilo-de-vida');  
    ?>

    <div class="wrap container" style="background-color: #fff; margin-top: -210px;" role="document">
      <div class="content row"">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->

<?php get_template_part('templates/content', 'newsletter-jumbo'); ?>

<!-- LAST TOP ARTICLES START -->
<div class="container">
  <div class="ultimos-top-artigos">
  <div class="row">
    <div class="col-md-6">
      <h3>Ultimos artigos</h3>
                <ul style="list-style: none; padding: 0;">
          <?php $the_query = new WP_Query( array( 'category_name' => 'estilo-de-vida', 'posts_per_page' => 10 ) );  ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <li style="margin-bottom: 10px;"><i style="color: #fbab19; margin-right: 5px;" class="fa fa-circle-o" aria-hidden="true"></i><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
          <?php 
          endwhile;
          wp_reset_postdata();
          ?>
          </ul>
    </div>
    <div class="col-md-6">
      <h3>Top artigos</h3>
    </div>
  </div>
</div>
</div>
  <!-- LAST TOP ARTICLES END -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>