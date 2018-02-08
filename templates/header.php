<header class="banner">
<div class="emm-container-responsive">


<!--START TOP HEADER-->

<div class="emm-top-header container">

	<div class="row">

		<div class="col">
			<a href="<?= esc_url(home_url('/')); ?>"><img class="img-fluid logo" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"></a>
		</div>

		<div class="col emm-slogan align-self-center">
			O ponto de partida para o seu desenvolvimento pessoal
		</div>

		<div class="col emm-social-top text-right">
			<span>Nossas redes sociais</span>
            <a href="https://www.youtube.com/channel/UCQhv8p10VABcpHkkpnSZYyg" target="_blank" class="d-none"><i class="fa fa-youtube"></i></a>
            <a href="https://www.instagram.com/meumestre.eu/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/eumeumestre/" target="_blank"<i class="fa fa-facebook-official"></i></a>
            <a href="https://twitter.com/eumeumestre" target="_blank"><i class="fa fa-twitter"></i></a>
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
					<?php get_search_form(); ?>
				</div>



		</div>

	</div>

</nav>
<!--END NAVBAR-->

</div> 
</header>

<!--START PAGE HEADER (DEFAULT FOR PAGES AND POSTS)-->
<div class="container-fluid-main">
	ad
</div>
<!--END PAGE HEADER (DEFAULT FOR PAGES AND POSTS)-->


