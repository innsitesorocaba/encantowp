<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="author" content="Equipe Innsite">

	<!-- wp_head -->
	<?php wp_head(); ?>
	<!-- wp_head -->

	<!-- Custom Assets -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bxslider/jquery.bxslider.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/animatecss/animate.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body>
	<header class="container-fluid">
		<div class="row">
			<div class="header-padding">
				<div class="col-lg-2 col-xs-4 col-md-2 col-sm-4 logo animated fadeInUp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo.png" class="img-responsive" alt="Logotipo da Encanto">
				</div>

				<nav class="col-lg-7 col-md-7 menu hidden-xs hidden-sm">
					<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
					<li><a href="<?php echo get_site_url(); ?>/sobre/">Quem Somos</a></li>
					<li><a href="<?php echo get_site_url(); ?>/produtos/">Produtos</a></li>
					<li><a href="<?php echo get_site_url(); ?>/seja-consultora/">Seja uma consultora</a></li>
					<li><a href="<?php echo get_site_url(); ?>/contato/">Contato</a></li>
				</nav>

				<div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-1 col-md-offset-0 col-lg-offset-0 hidden-xs header-phones">
					<div><span>15 3329 8167</span> <a href="https://www.facebook.com/Cosmeticos-990630427739951/" target="_blank" title="Ir ao facebook da encanto"><i class="fa fa-facebook fa-2x"></i></a></div>
					<div><span>15 99781 2288</span> <i class="fa fa-whatsapp fa-2x"></i></div>
				</div>

				<div class="col-xs-2 col-xs-offset-6 col-sm-offset-3 col-sm-1 pull-right mobile-toggle-wrapper hidden-lg hidden-md text-right">
					<a class="mobile-toggle" id="mobile-toggle"><i class="fa fa-align-right fa-3x" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>		
	</header>

	<nav class="mobile-menu hidden-lg" id="false">
		<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
		<li><a href="<?php echo get_site_url(); ?>/sobre/">Quem Somos</a></li>
		<li><a href="<?php echo get_site_url(); ?>/produtos/">Produtos</a></li>
		<li><a href="<?php echo get_site_url(); ?>/seja-consultora/">Seja uma consultora</a></li>
		<li><a href="<?php echo get_site_url(); ?>/contato/">Contato</a></li>
	</nav>

	<div class="distance-top"></div>