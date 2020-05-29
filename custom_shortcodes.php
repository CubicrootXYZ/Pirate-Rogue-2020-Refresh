<?php

// Add all shortcodes
add_shortcode('topicrect', 'topicrect_func');

function topicrect_func($atts, $content = null) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => '',
        'url' => '#',
        'title' => 'Use title=Title'
       ), $atts));
    return "<div style='background-image: url(".$image.")' class=''>".$title."</div>";
}
?>