<?php
/*
Template Name: Archive Actualité
*/
get_header(); ?>
	<div class="header-img" style="background-image: url('<?php echo get_field('image_background');?>')">

		<div class="text">
			Les actualités
		</div>
	</div>
	<div class="container archive">
		<?php
		$loop = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page'=> -1 ) );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="row article-actu">
					<div class="col-sm-4">
						<div class="img-actualite">
							<?php echo get_the_post_thumbnail($post_id, '560x430'); ?>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="preview">
							<h2 class="title-article-actuality">
								<?php
									echo get_the_title();
								?>
							</h2>
							<div class="description">
								<?php echo get_the_content();	 ?>
							</div>
							<div class="date-post">
								<?php echo get_the_date('d/m/Y'); ?>
							</div>
						</div>
					</div>
				</div>
	            <?php
	        endwhile;
			wp_reset_query();
	        ?>
	</div>
<?php get_footer(); ?>
