<?php 
	/* 
		Template name: página dicas
	*/
	get_header(); ?>
	
	<div class="contentPages">
		<div class="container">
			<div class="row">
	            <?php
	            	// custom páginação (para o futuro)

	            	// página atual
	            	$pageAtual = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

	            	// resultados (limit)
	            	$result = (isset($_GET['result']))? $_GET['result'] : 0;

	            	// numero de resultados por page
	            	$numResults = 2;

	                global $post;
	                $args = array(
	            		'category' => 3,
	            		'order' => 'ASC',
	            		'post_status' => 'publish',
	            		'posts_per_page' => 15,
	            		'offset' => 0
	                );

	                $args_count = array(
	            		'category' => 3,
	            		'order' => 'DESC',
	            		'post_status' => 'publish'
	                );

	                $myposts = get_posts( $args );
	                $mypostscount = get_posts( $args_count );

	                $count = count($mypostscount);

	                foreach($myposts as $post) : setup_postdata($post); ?>
	                	<div class="divDicas col-md-12">
	                		<div class="col-md-7 col-sm-12">
		               	 		<div class="titleDicas">
		               	 			<a href="<?php echo get_permalink(); ?>" title="Ler mais: <?php the_title(); ?>">
		               	 				<?php the_title(); ?> 
		               	 			</a>
		               	 		</div>
		               	 		<div class="contentDicas">
		               	 			<?php echo the_excerpt();  ?>
		               	 		</div>
		               	 		<div class="btnViewMore">
		               	 			<a href="<?php echo get_permalink(); ?>" title="Ler mais: <?php the_title(); ?>">
		               	 				Ver mais
		               	 			</a>
		               	 		</div>
		               	 	</div>
		               	 	<div class="col-md-5 col-sm-12">
								<div class="imageDicas">
									<a href="<?php echo get_permalink(); ?>" title="Ler mais: <?php the_title(); ?>">
										<?php echo get_the_post_thumbnail( $post_id, array(428, 173) ); ?>
									</a>
								</div>
							</div>

							<div class="clearfix"></div>
						</div>
	            	<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>