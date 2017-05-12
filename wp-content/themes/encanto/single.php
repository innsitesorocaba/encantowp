<?php get_header(); ?>
	<div class="contentPages">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="titlePages">
 						<?php the_title(); ?>
 					</div>
 					<div class="imgPost text-center">
 						<?php echo get_the_post_thumbnail(); ?>
 					</div>
 					<div class="textPages">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				
				<br>
				<a href="dicas/" class="backPage">
			    	Voltar para dicas
			    </a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
