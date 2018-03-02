<header class="header-banner">
<div class="header-container-responsive">


<!--START TOP HEADER-->
<div class="header-top container">
  <div class="row">
    <div class="col-md-3">
      <a href="<?= esc_url(home_url('/')); ?>"><img class="img-fluid header-logo" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"></a>
    </div>
    <div class="col-md-9 align-self-center">
      <span class="header-slogan">O ponto de partida para o seu desenvolvimento pessoal</span>
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

        <div class="header-form">
          <?php get_search_form(); ?>
        </div>
    </div>
  </div>
</nav>
<!--END NAVBAR-->


</div> 
</header>


<!--START PAGE HEADER-->
<div class="header-fluid-carreira"><h1>Carreira</h1></div>
<!--END PAGE HEADER-->