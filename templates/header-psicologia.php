<header class="banner">
<div class="emm-container-responsive" style="border-bottom: 6px solid #296DE1;">

<!--START TOP HEADER-->
<div class="emm-top-ad text-center">
  <img src="<?= get_template_directory_uri(); ?>/dist/images/728x90.gif">
</div>  

<div class="emm-top-header container">

  <div class="row">

    <div class="col">
      <a href="<?= esc_url(home_url('/')); ?>"><img class="img-fluid logo" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"></a>
    </div>

    <div class="col emm-slogan align-self-center">
      O maior portal sobre desenvolvimento pessoal do Brasil
    </div>
HEADER PSICOLOGIAAAA
    <div class="col emm-social-top text-right">
      <a><i class="fa fa-youtube"></i></a>
      <a><i class="fa fa-instagram"></i></a>
      <a><i class="fa fa-facebook-official"></i></a>
      <a><i class="fa fa-twitter"></i> </a>
      <a><i class="fa fa-pinterest-p"></i></a>
    </div>

  </div>

</div>
<!--END TOP HEADER-->


<!--START NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">

    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <?php
        function add_specific_menu_location_atts( $atts, $item, $args ) {
        // check if the item is in the primary menu
        if( $args->theme_location == 'primary_navigation' ) {
        // add the desired attributes:
        $atts['class'] = 'nav-link';
        }
        return $atts;
        }
        add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );
        ?>
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>

        <div class="emm-header-form">
          <form class="form-inline my-2 my-lg-0">
            <label id="email-label2">
              <i class="fa fa-search"></i>
              <input class="form-control mr-2" style="width: 165px;" placeholder="Pesquisar por">
              <button type="submit" class="btn btn-primary">Ir</button>
            </label>
          </form>
        </div>

        <div class="emm-login">
          <a href="http://google.com">
            <i style="font-size: 15px; cursor: pointer; margin-right: 5px;" class="fa fa-sign-in" aria-hidden="true"></i><b>Login</b>
          </a>
        </div>

        <div class="emm-premium">
          <a href="http://google.com">
            <i style="font-size: 15px; cursor: pointer; margin-right: 5px;" class="fa fa-star" aria-hidden="true"></i><b>PREMIUM</b>
          </a>
        </div>

        <div class="emm-w3m">
        </div>

    </div>

  </div>

</nav>
<!--END NAVBAR-->

</div> 
</header>



      <div class="container-fluid" style="margin: 0px; padding: 0px; height: 450px; background-image: url('<?= get_template_directory_uri(); ?>/dist/images/image-fluid.jpg')">
              <div class="text-center" style="padding-top: 20px;">
                            <div class="page-header">
              <h1 style="margin-bottom: 30px; margin-top: 75px; color: white;">Psicologia</h1>
              </div></div>

      </div>
