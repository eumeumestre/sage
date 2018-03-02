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

    <div class="wrap container rounded-right rounded-left" role="document">
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


<!-- START NEWSLETTER JUMBO -->
<?php get_template_part('templates/content', 'newsletter-jumbo'); ?>
<!-- END NEWSLETTER JUMBO -->


<!-- START MAIS EM -->
<?php get_template_part('templates/content', 'mais-em-estilo-de-vida'); ?>
<!-- END MAIS EM -->


<!-- START NEWSLETTER JUMBO BOTTOM -->
<?php get_template_part('templates/content', 'newsletter-jumbo-bottom'); ?>
<!-- END NEWSLETTER JUMBO -->


<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>


  </body>
</html>