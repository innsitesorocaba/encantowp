<?php 
	/*
		Template name: Home
	*/
	get_header();

	$banners = get_field('home_banner');
	$messages = get_field('mensagens');
	$areaPreta = get_field('texto_da_area_preta');
	$areaPreta2 = get_field('area_preta_2');
	$textoContato = get_field('chamada_para_contato');
?>

<div class="container-fluid"  id="startFixedHere">
	<div class="row">
		<div class="owl-carousel" id="banner">
			<?php foreach ($banners as $banner) { ?>
				<div><img src="<?= $banner['url'] ?>" class="img-responsive" alt=""></div>
			<?php } ?>
		</div>
	</div>		
</div>

<div class="container-fluid black-featured-text">
	<div class="row">
		<div class="col-lg-12 col-md-12 text-center">
			<h2><?= $areaPreta[0]['titulo']; ?></h2>
			<h3><?= $areaPreta[0]['descricao']; ?></h3>
		</div>
	</div>
</div>

<div class="container-fluid icons-messages">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-4">
				<div class="message-wrapper">
					<div class="icon">
						<img src="<?= $messages['0']['icone']; ?>" alt="">
					</div>

					<div class="description">
						<?= $messages['0']['descricao_icone']; ?>
					</div>
				</div>			
			</div>

			<div class="col-md-4">
				<div class="message-wrapper">		
					<div class="icon">
						<img src="<?= $messages['1']['icone']; ?>" alt="">
					</div>

					<div class="description">
						<?= $messages['1']['descricao_icone']; ?>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="message-wrapper">
					<div class="icon">
						<img src="<?= $messages['2']['icone']; ?>" alt="">
					</div>

					<div class="description">
						<?= $messages['2']['descricao_icone']; ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<div class="container-fluid nossas-marcas">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2>Nossas marcas</h2>
			<h3>Marcas conceituadas no mercado e com ótimos valores para revenda.</h3>
		</div>

		<div class="col-md-12 marcas-logos">
			<div class="row">
				<div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-xs-offset-0 col-xs-6 marca marca-encanto">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo.png" class="img-responsive" alt="Logotipo da Encanto">
				</div>

				<div class="col-lg-3 col-md-3 col-xs-6 marca">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/anyflor_cosmeticos_logotipo.png" class="img-responsive" alt="Logotipo da AnyFlor">
				</div>
			</div>			
		</div>		
	</div>
</div>

<div class="container-fluid black-featured-text bg-111">
	<div class="row">
		<div class="col-md-6 showroom-border-right">
			<div class="col-md-4 col-xs-12 col-sm-12 imagem-produto-area-preta">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/showroom.png" width="200px" alt="">
			</div>

			<div class="col-md-8">
				<div class="col-md-12 col-sm-12  text-center">
					<h2>SHOWROOM</h2>
				</div>			

				<div class="col-md-12 col-sm-12 text-center">
					<h3>Conheça nossa grande variedade de produtos.</h3>
				</div>

				<div class="col-md-12 col-sm-12 text-center mt15">
					<a href="<?php echo get_site_url(); ?>/produtos/" class="btn border-left-green-btn">Saiba mais</a>
				</div>
			</div>			
		</div>

		<div class="col-md-6">
			<div class="col-md-4 col-sm-12 acerta-margin-consultoras col-xs-12 imagem-produto-area-preta">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/para_consultoras.png" width="200px" alt="">
			</div>

			<div class="col-md-8">
				<div class="col-md-12 col-sm-12 text-center">
					<h2>Para Consultoras: </h2>
				</div>			

				<div class="col-md-12 col-sm-12 text-center acerta-button-consultoras">
					<h3>Faça seu pedido online aqui: </h3>
				</div>

				<div class="col-md-12 col-sm-12 text-center mt15">
					<a href="<?php echo get_site_url(); ?>/seja-consultora/" class="btn border-left-green-btn">Clique aqui</a>
				</div>
			</div>			
		</div>
	</div>	
</div>

<div class="container-fluid padding-section contato-section">
	<div class="row">
		<div class="col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<div class="col-md-12 col-lg-12 text-center">
				<h2><?php echo $textoContato[0]['titulo']; ?></h2>
			</div>

			<div class="col-md-12 col-lg-12 text-center">
				<h3><?php echo $textoContato[0]['descricao']; ?></h3>
			</div>

			<form action="<?php echo get_template_directory_uri(); ?>/mail/send.php?pageFrom='<?php echo get_the_title(); ?>'" method="POST" name="contato">
				<input type="text" name="name" placeholder="Nome" class="form-control">

				<input type="email" name="email" placeholder="E-mail" class="form-control">

				<textarea type="text" name="message" id="message" placeholder="Mensagem" class="form-control"></textarea>

				<input type="submit" name="submit" value="Enviar" class="btn btn-send pull-right">
			</form>
		</div>
	</div>
</div>

<hr>

<div class="container-fluid section-maps padding-section">
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div class="col-md-7 col-xs-12 col-sm-12 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3!2d-47.47904539305551!3d-23.46313161527292!2m2!1f69.03563131397772!2f91.31691112447078!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x94c5f51aa49abebb%3A0x153168fad9d40c97!2sRua+Atan%C3%A1zio+Soares%2C+2710+-+Jardim+Maria+Eugenia%2C+Sorocaba+-+SP!5e0!3m2!1spt-BR!2sbr!4v1494007822647" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="col-md-5 col-xs-12 contatos">
				<h2>Endereço</h2>
				<div class="info">Rua Atanázio Soares, N° 2710 <br> Vila Formosa | Sala 02 | Sorocaba / SP</div>

				<h2>Telefones</h2>
				<div class="info">15 3329 8167 | 15 99781 2288</div>

				<h2>Horário de Funcionamento</h2>
				<div class="info">Segunda a sexta, das 9h às 18h</div>

				<h2>E-mail</h2>
				<div class="info">vendas@catalogoencanto.com.br</div>
				
				<div class="facebook-wrapper">
					<div class="info info-facebook">
						<a href="https://www.facebook.com/Cosmeticos-990630427739951/" title="Ir ao facebook da encanto" target="_blank"><i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
					</div>

					<div class="facebook-like-text">
						Curta nossa página no facebook
					</div>
					</a>
				</div>
			</div>
		</div>	
	</div>
</div>


<?php get_footer(); ?>