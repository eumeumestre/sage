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
      get_template_part('templates/header', 'psicologia');  
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


<!-- START Newsletter Box -->

<?php get_template_part('templates/content', 'newsletter-jumbo'); ?>

<!-- END Newsletter Box -->


<!-- START Ultimos Top Artigos -->

<div class="container">

  <div class="ultimos-top-artigos">

    <div class="row">
      <div class="col-md-6">
        <h3>Ultimos artigos</h3><hr>
            <ul>
            <?php $the_query = new WP_Query( array( 'category_name' => 'psicologia', 'posts_per_page' => 10 ) );  ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <li>
              <i class="fa fa-circle-o" aria-hidden="true"></i><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </li>
              <?php 
              endwhile;
              wp_reset_postdata();
              ?>
            </ul>
      </div>
      <div class="col-md-6">
        <h3>Top artigos</h3><hr>
            <?php
            $args = array(
                'post_html' => '<li><i class="fa fa-circle-o" aria-hidden="true"></i><a href="{url}">{text_title}</a></li>'
            );
            wpp_get_mostpopular( $args );
            ?>
      </div>
    </div>

  </div>

</div>

<!-- END Ultimos Top Artigos -->


              <?php
                do_action('get_footer');
                get_template_part('templates/footer');
                wp_footer();
              ?>
  </body>
</html>