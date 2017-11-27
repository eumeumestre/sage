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
      get_template_part('templates/header', 'financas');  
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

<!--START AQUI VAI O TEMPLATE DE LAST/TOP POSTS DA CATEGORIA-->
<div style="text-align: center;"><strong class="text-center">Últimos artigos / Artigos mais lidos</strong></div><br><br><br><br><br>
<!--END AQUI VAI O TEMPLATE DE LAST/TOP POSTS DA CATEGORIA-->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>