<?php
/*
	Template name: Página Sobre
*/

	get_header();
	$sobre = get_field('sobre');
	$missao = get_field('missao');
?>

<div class="container-fluid padding-section about-title"  id="startFixedHere">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-left col-xs-12 col-xs-offset-0">
			<h1>Sobre a Encanto <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_icon.png" class="img-responsive" alt="Logotipo da Encanto"></h1> 
		</div>
	</div>
</div>

<div class="container-fluid padding-section">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
			<p><?php echo $sobre[0]['sobre']; ?></p>
		</div>		
	</div>
</div>

<div class="container-fluid padding-section purple-section-about">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p><?php echo $sobre[1]['sobre']; ?></p>
		</div>		
	</div>
</div>

<div class="container-fluid padding-section purple-section-about mission">
	<div class="row">
		<div class="col-md-12">
			<?php echo get_field('missao'); ?> <br><i class="fa fa-heart" aria-hidden="true"></i>
		</div>
	</div>
</div>

<div class="container-fluid black-featured-text bg-111">
	<div class="row">
		<div class="col-md-6 showroom-border-right">
			<div class="col-md-4 col-xs-12 imagem-produto-area-preta">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/showroom.png" width="200px" alt="">
			</div>

			<div class="col-md-8 col-xs-12">
				<div class="col-md-12 col-xs-12  text-center">
					<h2>SHOWROOM</h2>
				</div>			

				<div class="col-md-12 col-xs-12 text-center">
					<h3>Conheça nossa grande variedade de produtos.</h3>
				</div>

				<div class="col-md-12 col-xs-12 text-center mt15">
					<a href="#" class="btn border-left-green-btn">Saiba mais</a>
				</div>
			</div>			
		</div>

		<div class="col-md-6">
			<div class="col-md-4 col-xs-12 imagem-produto-area-preta acerta-margin-consultoras">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/para_consultoras.png" width="200px" alt="">
			</div>

			<div class="col-md-8 col-xs-12">
				<div class="col-md-12 col-xs-12 text-center">
					<h2>Para Consultoras: </h2>
				</div>			

				<div class="col-md-12  col-xs-12 text-center acerta-button-consultoras">
					<h3>Faça seu pedido online aqui:</h3>
				</div>

				<div class="col-md-12 col-xs-12  text-center mt15">
					<a href="#" class="btn border-left-green-btn">Clique aqui</a>
				</div>
			</div>			
		</div>
	</div>	
</div>

<?php
	get_footer();
?>