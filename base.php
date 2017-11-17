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
      get_template_part('templates/header');
    ?>

      <div class="container-fluid" style="margin: 0px; padding: 0px; height: 500px; background-image: url('<?= get_template_directory_uri(); ?>/dist/images/image-fluid.jpg')">
              <div class="text-center" style="padding-top: 20px;"><img class="" src="<?= get_template_directory_uri(); ?>/dist/images/970x250.gif"></div>
      </div>

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

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
