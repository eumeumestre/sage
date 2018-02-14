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
      <div class="col-md-4 space">
        <h3>Mais em Psicologia</h3><hr>

            <ul>
            <?php $the_query = new WP_Query( array( 'category_name' => 'psicologia', 'posts_per_page' => 3 ) );  ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <li>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'custom-size-1',array( 'class' => 'img-fluid' ));  ?><p style="margin-top: 5px;"><?php the_title(); ?></p></a>
            </li>
              <?php 
              endwhile;
              wp_reset_postdata();
              ?>
            </ul>

      </div>
      <div class="col-md-4 space">
        <h3 class="d-none"></h3><hr>
            <ul>
            <li>
              <a href="<?php echo get_the_permalink( 148 ); ?>"><?php echo get_the_post_thumbnail(148, 'custom-size-1', array( 'class' => 'img-fluid' )); ?> <p style="margin-top: 5px;"><?php echo get_the_title( 148 ); ?></p></a>
            </li>
            <li>
              <a href="<?php echo get_the_permalink( 476 ); ?>"><?php echo get_the_post_thumbnail(476, 'custom-size-1', array( 'class' => 'img-fluid' )); ?> <p style="margin-top: 5px;"><?php echo get_the_title( 476 ); ?></p></a>
            </li>
            <li>
              <a href="<?php echo get_the_permalink( 124 ); ?>"><?php echo get_the_post_thumbnail(124, 'custom-size-1', array( 'class' => 'img-fluid' )); ?> <p style="margin-top: 5px;"><?php echo get_the_title( 124 ); ?></p></a>
            </li>
        
            </ul>
      </div>
<div class="col-md-4 space">
        <h3 class="d-none"></h3><hr>
            
            <ul>
            <li>
              <a href="<?php echo get_the_permalink( 146 ); ?>"><?php echo get_the_post_thumbnail(146, 'custom-size-1', array( 'class' => 'img-fluid' )); ?> <p style="margin-top: 5px;"><?php echo get_the_title( 146 ); ?></p></a>
            </li>
            <li>
              <a href="<?php echo get_the_permalink( 284 ); ?>"><?php echo get_the_post_thumbnail(284, 'custom-size-1', array( 'class' => 'img-fluid' )); ?> <p style="margin-top: 5px;"><?php echo get_the_title( 284 ); ?></p></a>
            </li>
            <li>
              <a href="<?php echo get_the_permalink( 135 ); ?>"><?php echo get_the_post_thumbnail(135, 'custom-size-1', array( 'class' => 'img-fluid' )); ?> <p style="margin-top: 5px;"><?php echo get_the_title( 135 ); ?></p></a>
            </li>
            </ul>
      </div>
    </div>

  </div>

</div>

<!-- AD BOTTOM START -->

<div class="newsletter-horizontal-box-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div><small>Publicidade</small></div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Bottom Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3870151252326045"
     data-ad-slot="8593836740"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    </div>
  </div>
</div>

<!-- END BOTTOM END -->



<!-- END Ultimos Top Artigos -->


              <?php
                do_action('get_footer');
                get_template_part('templates/footer');
                wp_footer();
              ?>
  </body>
</html>