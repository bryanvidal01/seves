<?php
    /*
    Template Name: Template
    */
  	the_post();
	get_header();
	$imageSingle = get_field('img_article');
	$urlBackground  = wp_get_attachment_image_src($imageSingle, '')[0];
?>

	<div class="container-img-single">
		<div class="img-background-single" style="background-image: url('<?php echo $urlBackground; ?>')"></div>
		<div class="background-left"></div>

		<div class="progressBarre">
			<div class="progressCurrent"></div>
			<div class="top-text">
				<?php echo get_the_title(); ?>
			</div>
			<div class="top-text bottom">
				<?php
				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="container-site">
		<div class="container-fluid container-single">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="title-page">
						<?php echo get_the_title(); ?>
					</h1>
					<h2 class="location-page">
						<?php echo get_field("location"); ?>
					</h2>
				</div>

					<?php
					// check if the flexible content field has rows of data
					if( have_rows('strates') ):

					     // loop through the rows of data
					    while ( have_rows('strates') ) : the_row();

					        if( get_row_layout() == 'strate_text' ): ?>
							<div class="col-sm-12">
								<div class="container-text-strate">

						        	<?php echo the_sub_field('content_text'); ?>

								</div>
							</div>

					        <?php elseif( get_row_layout() == 'strate_text_img_full' ):

								$imageSingle = get_sub_field('image_full');
								$urlBackground  = wp_get_attachment_image_src($imageSingle, '560x430')[0];
							?>
							<div class="col-sm-12">
								<img src="<?php echo $urlBackground; ?>" alt="" class="full"/>
							</div>
							<?php elseif( get_row_layout() == 'strate_text_img_three' ):

								$imageSingleLeft = get_sub_field('image_left');
								$urlBackgroundLeft  = wp_get_attachment_image_src($imageSingleLeft, '200x390')[0];

								$imageSingleCenter = get_sub_field('image_center');
								$urlBackgroundCenter  = wp_get_attachment_image_src($imageSingleCenter, '200x390')[0];

								$imageSingleRight = get_sub_field('image_right');
								$urlBackgroundRight  = wp_get_attachment_image_src($imageSingleRight, '200x390')[0];
							?>

							<div class="container-three-img">
								<div class="col-sm-4">
									<img src="<?php echo $urlBackgroundLeft; ?>" alt="" class="full"/>
								</div>
								<div class="col-sm-4">
									<img src="<?php echo $urlBackgroundCenter; ?>" alt="" class="full"/>
								</div>
								<div class="col-sm-4">
									<img src="<?php echo $urlBackgroundRight; ?>" alt="" class="full"/>
								</div>
							</div>
					        <?php endif;

					    endwhile;
					endif;
					?>
				</div>
			</div>

			<?php
			$next_post = get_next_post();
			if (!empty( $next_post )): ?>
			  <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-article"><span class="sup-title">Article Suivant</span><div class="article-next-text"><?php echo $next_post->post_title; ?></div></a>
			<?php endif; ?>
			<!-- <a href="http://bryanvidal.fr" class="next-article">Article Suivant</a> -->

		</div>
	</div>

<?php get_footer(); ?>
