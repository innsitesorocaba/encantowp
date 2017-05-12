<?php 
	/*
		Template name: página serviços
	*/
	get_header(); 
?>
 	<div class="contentPages">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="titlePages">
 						<?php the_title(); ?>
 					</div>
 					<div class="textPages controlImage">
 						<?php while ( have_posts() ) : the_post(); ?> 
				            <?php the_content(); ?> 
					    <?php endwhile; ?>
					    <?php wp_reset_query(); ?>				
 					</div>

 					<div class="clearfix"></div>
 				</div>
 			</div>
 		</div>
 	</div>
<?php get_footer(); ?>