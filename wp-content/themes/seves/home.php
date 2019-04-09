<?php
/*
Template Name: Home
*/

$background     = get_field('background_page');
$urlBackground  = wp_get_attachment_image_src($background, '')[0];
get_header(); ?>
<div class="background" style="background-image: url('<?php echo  $urlBackground; ?>')"></div>


<div class="intro-site">
    <div class="text-intro">
        <div class="title-text">
            SEVES
        </div>
        <?php echo get_field("intro_text"); ?>
    </div>
</div>
<div class="container-barres">
    <div class="barre">
        <?php
        $loop = new WP_Query( array( 'post_type' => 'intervention' ) );
        while ( $loop->have_posts() ) : $loop->the_post();
            $position = get_field('line_number');
            if($position == 1){ ?>
                <a href="<?php echo get_the_permalink(); ?>" class="point" style="left: <?php echo get_field("position_point"); ?>%;">
                    <div class="text-point">
                        <div class="title-point">
                            <?php echo the_title(); ?>
                        </div>
                        <div class="location">
                            <?php echo get_field("location"); ?>
                        </div>
                    </div>
                </a>
            <?php }
        endwhile;
        ?>
    </div>
    <div class="barre">
        <?php

        while ( $loop->have_posts() ) : $loop->the_post();
            $position = get_field('line_number');
            if($position == 2){ ?>
                <a href="<?php echo get_the_permalink(); ?>" class="point" style="left: <?php echo get_field("position_point"); ?>%;">
                    <div class="text-point">
                        <div class="title-point">
                            <?php echo the_title(); ?>
                        </div>
                        <div class="location">
                            <?php echo get_field("location"); ?>
                        </div>
                    </div>
                </a>
            <?php }
        endwhile;
        ?>
    </div>
    <div class="barre">
        <?php
        while ( $loop->have_posts() ) : $loop->the_post();
            $position = get_field('line_number');
            if($position == 3){ ?>
                <a href="<?php echo get_the_permalink(); ?>" class="point" style="left: <?php echo get_field("position_point"); ?>%;">
                    <div class="text-point">
                        <div class="title-point">
                            <?php echo the_title(); ?>
                        </div>
                        <div class="location">
                            <?php echo get_field("location"); ?>
                        </div>
                    </div>
                </a>
            <?php }
        endwhile;
        ?>
    </div>
    <div class="barre">
        <?php
        while ( $loop->have_posts() ) : $loop->the_post();
            $position = get_field('line_number');
            if($position == 4){ ?>
                <a href="<?php echo get_the_permalink(); ?>" class="point" style="left: <?php echo get_field("position_point"); ?>%;">
                    <div class="text-point">
                        <div class="title-point">
                            <?php echo the_title(); ?>
                        </div>
                        <div class="location">
                            <?php echo get_field("location"); ?>
                        </div>
                    </div>
                </a>
            <?php }
        endwhile;
        ?>
    </div>
</div>
<?php get_footer(); ?>
