<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'intervention',
    array(
      'labels' => array(
        'name' => __( 'Interventions' ),
        'singular_name' => __( 'Intervention' )
      ),
      'public' => true
    )
  );
}


show_admin_bar(false);
add_theme_support( 'post-thumbnails' );
add_image_size( '560x430', 600, 400, true ); // Hard Crop Mode
add_image_size( '685x500', 685, 500, true ); // Hard Crop Mode
add_image_size( '200x390', 200, 390, true ); // Hard Crop Mode

?>
