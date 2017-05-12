<?php 
	/*
		Template name: Página Contato
	*/
	get_header(); 
?>

<div class="container-fluid padding-section download-title" id="startFixedHere">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-12">
				<h1>Contato</h1>
			</div>
		</div>
	</div>
</div>

 <div class="container-fluid padding-section">	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-4">
				<div class="inside-information-contact">
					Rua Atanázio Soares, N° 2710<br>Vila Formosa | Sala 02 | Sorocaba / SP
				</div>
			</div>

			<div class="col-md-4">
				<div class="inside-information-contact">
					15 3329 8167<br>
					15 99781 2288
				</div>
			</div>

			<div class="col-md-4">
				<div class="inside-information-contact">
					vendas@catalogoencanto.com.br<br>
					<a href="https://www.facebook.com/Cosmeticos-990630427739951/" target="_blank" title="Ir ao facebook da Encanto" class="facebook-contact">
						<i class="fa fa-facebook fa-2x"></i> Acesse nosso facebook
					</a>
				</div>
			</div>
		</div>		
	</div>
 </div>

  <div class="container-fluid">
	<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3!2d-47.47904539305551!3d-23.46313161527292!2m2!1f69.03563131397772!2f91.31691112447078!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x94c5f51aa49abebb%3A0x153168fad9d40c97!2sRua+Atan%C3%A1zio+Soares%2C+2710+-+Jardim+Maria+Eugenia%2C+Sorocaba+-+SP!5e0!3m2!1spt-BR!2sbr!4v1494007822647" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

<div class="container-fluid padding-section section-form contato-section">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Envie um e-mail ;)</h2>
		</div>

		<div class="col-md-10 col-md-offset-1">
			<form action="<?php echo get_template_directory_uri(); ?>/mail/send.php?pageFrom='<?php echo get_the_title(); ?>" name="contato" method="post">
				<input type="text" name="name" placeholder="Nome" class="form-control">

				<input type="text" name="telefone" placeholder="Telefone" class="form-control">

				<input type="email" name="email" placeholder="E-mail" class="form-control">

				<textarea type="text" name="message" id="message" placeholder="Mensagem" class="form-control"></textarea>

				<input type="submit" name="submit" value="Enviar" class="btn btn-send pull-right">
			</form>
		</div>
	</div>
</div>
 




<?php get_footer(); ?>