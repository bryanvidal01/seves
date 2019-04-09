<?php
/*
Template Name: Archive
*/
get_header(); ?>
	<div class="header-img" style="background-image: url('<?php echo get_field('image_background');?>')">

		<div class="text">
			Les interventions
		</div>
	</div>
	<div class="container archive">
		<div class="row">

			<?php
			$i = 0;
	        $loop = new WP_Query( array( 'post_type' => 'intervention', 'orderby' => 'date', 'order' => 'ASC' ) );
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php
					$imageSingle = get_field('img_article');
					$urlBackground  = wp_get_attachment_image_src($imageSingle, '560x430')[0];

					if($i < 2): $col = 6; else: $col = 4; endif;?>
					<div class="col-sm-<?php echo $col; ?> col<?php echo $col; ?>">
						<a href="<?php echo get_the_permalink(); ?>" class="preview">
							<img src="<?php echo $urlBackground; ?>"/>
							<h2 class="title-article">
								<?php
								if($i < 2):
									echo mb_strimwidth(get_the_title(), 0, 52, "...");
								else:
									echo mb_strimwidth(get_the_title(), 0, 32, "...");
								endif;
								?>
							</h2>
							<div class="description">
								<!-- <?php  echo mb_strimwidth(get_the_excerpt(), 0, 100, "..."); ?> -->
								<?php echo get_field("location"); ?>
							</div>
							<div class="read-more">
								Voir la suite
							</div>
						</a>
					</div>
	            <?php
	        $i++; endwhile;
	        ?>
		</div>
	</div>
<?php get_footer(); ?>
