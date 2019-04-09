<?php
/*
Template Name: Partenaires
*/
get_header(); ?>
	<div class="header-img" style="background-image: url('<?php echo get_field('image_background');?>')">

		<div class="text">
			<?php echo get_the_title(); ?>
		</div>
	</div>
	<div class="container partners">
		<div class="row">

			<?php
			// check if the repeater field has rows of data
			if( have_rows('bloque_partenaire') ):

			 	// loop through the rows of data
			    while ( have_rows('bloque_partenaire') ) : the_row(); ?>
					<div class="col-sm-12">
						<h2 class="title-bloque">
							<?php the_sub_field('nom_du_bloque'); ?>
						</h2>
					</div>
					<?php // check if the repeater field has rows of data
					if( have_rows('partners_type') ):

					 	// loop through the rows of data
					    while ( have_rows('partners_type') ) : the_row(); ?>
							<div class="col-sm-3">
								<?php if(get_sub_field('partner_link')): ?>
									<a target="_blank" href="<?php echo the_sub_field('partner_link'); ?>">
								<?php endif; ?>
									<img class="logo-partners" src="<?php the_sub_field('image'); ?>" />
								<?php if(get_sub_field('partner_link')): ?>
									</a>
								<?php endif; ?>
							</div>
					    <?php endwhile;

					else :

					    // no rows found

					endif;

			    endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div>
	</div>
<?php get_footer(); ?>
