<?php 
	/*
		Template name: Página seja uma consultora
	*/
	get_header(); 
?>

<div class="container-fluid padding-section download-title" id="startFixedHere">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-12">
				<h1>Seja uma consultora</h1>
			</div>
		</div>
	</div>
</div>

 <div class="container-fluid padding-section">	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>1° Certifique-se de cumprir com os requisitos abaixo:</h2>
		</div>

		<div class="col-md-10 col-md-offset-1 lista-requisitos-consultora">
			<ul>
				<li><i class="fa fa-check-square-o" aria-hidden="true"></i> Sou maior de 18 anos</li>
				<li><i class="fa fa-usd" aria-hidden="true"></i> Não possuo restrição financeira</li>
			</ul>
		</div>

		<div class="col-md-10 col-md-offset-1 margin-top-consultora">
			<h2>2º Envie os documentos conforme abaixo para o email: vendas@catalogoencanto.com.br.</h2>
		</div>

		<div class="col-md-10 col-md-offset-1 lista-requisitos-consultora">
			<ul>
				<li><i class="fa fa-address-card-o" aria-hidden="true"></i> RG</li>
				<li><i class="fa fa-address-card-o" aria-hidden="true"></i> CPF</li>
				<li><i class="fa fa-file-o" aria-hidden="true"></i> Comprovante de residência </li>
			</ul>
		</div>

		<div class="col-md-10 col-md-offset-1 margin-top-consultora">
			<h2>3º Preencha o formulário abaixo e em seguida entraremos em contato com você!</h2>
		</div>
	</div>
 </div>

<div class="container-fluid padding-section section-form contato-section">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<form action="<?php echo get_template_directory_uri(); ?>/mail/send.php?pageFrom='<?php echo get_the_title(); ?>&action=seja_consultora" name="contato" method="post">
				<input type="text" name="name" placeholder="Nome" class="form-control">

				<input type="text" id="telefone-input" name="telefone" placeholder="Telefone" class="form-control">

				<input type="email" name="email" placeholder="E-mail" class="form-control">

				<input type="submit" name="submit" value="Enviar" class="btn btn-send pull-right">
			</form>
		</div>
	</div>
</div>
 




<?php get_footer(); ?>