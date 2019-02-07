<?php
/* enqueue styles og parent theme */
function parent_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
add_action( 'wp_enqueue_scripts', 'parent_enqueue_styles' );

/* function to run after parents function.php */
function late_child_function() {
	
	/* add shortcode for slider */
	if (!function_exists('pirate_rogue_shortcode_slider') && !function_exists('pirate_rogue_shortcode_slider_entry')) {
		function pirate_rogue_shortcode_slider( $atts, $content = null ) {
			// pirate-rogue-script must be enqueued after slick
			wp_dequeue_script('pirate-rogue-script');
			wp_enqueue_script('pirate-rogue-slick');
			wp_enqueue_script('pirate-rogue-script');

			$out = '<div class="featured-slider cf">'.do_shortcode( $content ).'</div>';
			return $out;
		}
		function pirate_rogue_shortcode_slider_entry( $atts, $content = null ) {
			extract(shortcode_atts(array(
				'url'	=> '',
				'img'	=> '',
				'alt'   => '',
			), $atts));
			$url =  esc_attr($url);
			$img =  esc_attr($img);
			$alt =  esc_attr($alt);
			$out = '<article><div class="entry-thumbnail" role="presentation"><a href="'.$url.'"><img src="'.$img.'" alt="'.$alt.'"></a></div></article>';
			return $out;
		}
		add_shortcode('slider', 'pirate_rogue_shortcode_slider');
		add_shortcode('slider-entry', 'pirate_rogue_shortcode_slider_entry');
	}
}
add_action( 'after_setup_theme', 'late_child_function' );
?>
