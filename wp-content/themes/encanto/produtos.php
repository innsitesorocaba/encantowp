<?php 
	/*
		Template name: Página produtos
	*/
	get_header(); 
	$catalogos = get_field('catalogos');
?>

<div class="container-fluid padding-section purple-section-about	 download-title" id="startFixedHere">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
			<h1> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Faça o download do nosso catálogo: </h1>
		</div>		
	</div>
</div>

<div class="container-fluid padding-section">
	<div class="row">
		<?php foreach ($catalogos as $catalogo) { ?>
			<div class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 catalog-wrapper">
				<div class="catalog-inside">
					<div class="image-wrapper">
						<img src="<?php echo $catalogo['capa_catalogo']; ?>" alt="Nosso catálogo" class="img-responsive">
					</div>

					<div class="download"><a href="<?= $catalogo['pdf']; ?>" title="Baixar o catálogo" download="true" target="_blank">
						<i class="fa fa-cloud-download" aria-hidden="true"></i> Baixar
						</a>
					</div>
				</div>
			</div>
		<?php } ?>		
	</div>
</div>

<?php get_footer(); ?>