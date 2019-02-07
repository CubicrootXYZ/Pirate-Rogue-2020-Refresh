<?php
/* enqueue styles og parent theme */
function parent_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
add_action( 'wp_enqueue_scripts', 'parent_enqueue_styles' );
?>
